<?php
/**
 * Created by PhpStorm.
 * User: boran
 * Date: 12/09/2017
 * Time: 11:57
 */

namespace AppBundle\Controller;

use AppBundle\Entity\SchuleGroup;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Response;

class PdfGroupBerichtenController extends Controller
{
    /**
     * @Route("/exportgrouppdf/{id}", name="export-gpdf")
     * @Security("is_granted('ROLE_USER')")
     */
    public function PrintAction(Request $request,SchuleGroup $SchuleGroup){


        $em = $this->getDoctrine()->getManager();
        $eventTypeUnterricht=$em->getRepository('AppBundle:EventType')->find(4);
        $eventTypeUrlaub=$em->getRepository('AppBundle:EventType')->find(2);
        $eventTypePraktikum=$em->getRepository('AppBundle:EventType')->find(1);
        $events=$em->getRepository('AppBundle:CompanyEvents')->getEventsbyGroupandEinzehlfach($SchuleGroup,$eventTypeUnterricht);
        $Urlaubevents=$em->getRepository('AppBundle:CompanyEvents')->getUrlaubOfgroup($SchuleGroup,$eventTypeUrlaub);
        $Praktikumevents=$em->getRepository('AppBundle:CompanyEvents')->getPraktikumOfgroup($SchuleGroup,$eventTypePraktikum);

        $groupName=$SchuleGroup->getGroupName();
        $groupId=$SchuleGroup->getId();
        $filename=$groupName.'.pdf';
        $snappy=$this->get('knp_snappy.pdf');

        $html = $this->renderView(':mainpages:GruppeBerichtenView.html.twig',['events'=>$events,'groupname'=>$groupName,'groupid'=>$groupId,'Praktikum'=>$Praktikumevents[0][1]/8,'Urlaub'=>$Urlaubevents[0][1]/8]);




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