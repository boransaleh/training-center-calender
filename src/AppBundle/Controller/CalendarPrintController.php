<?php
/**
 * Created by PhpStorm.
 * User: boran
 * Date: 12/09/2017
 * Time: 11:57
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Response;

class CalendarPrintController extends Controller
{
    /**
     * @Route("/print", name="print_calendar")
     * @Security("is_granted('ROLE_USER')")
     */
    public function PrintCalendarAction(Request $request){


        $events=$this->get('session')->get('events');
        $toShortDate=$this->get('session')->get('enddate');
        $fromdate=$this->get('session')->get('fromdate');
        $groupname=$this->get('session')->get('groupname');
        $dozentname=$this->get('session')->get('Dozent');
        $filename=$dozentname.'_'.$groupname.'.pdf';
        $snappy=$this->get('knp_snappy.pdf');

        $html = $this->renderView('mainpages/DrawTableView.html.twig',
            ['events'=>$events,'fromdate'=>$fromdate ,'enddate'=>$toShortDate,'groupname'=>$groupname,'dozentname'=>$dozentname]);




        return new Response(
            $snappy->getOutputFromHtml($html),
            200,
            array(
                'Content-Type'          => 'application/pdf',
                'Content-Disposition'   => 'attachment; filename="'.$filename.'"'
            )
        );

        // I have to unset session


    }

}