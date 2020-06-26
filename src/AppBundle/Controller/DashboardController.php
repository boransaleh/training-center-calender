<?php
/**
 * Created by PhpStorm.
 * User: boran
 * Date: 06/09/2017
 * Time: 23:24
 */

namespace AppBundle\Controller;

use AppBundle\Datatables\CompanyEventsDatatable;
use AppBundle\Datatables\UserDatatable;
use AppBundle\Form\ShuhleGroupsFormType;
use Sg\DatatablesBundle\Datatable\DatatableInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class DashboardController extends Controller
{
    /**
     * @Route("/dashboard", name="dashboard")
     * @Security("is_granted('ROLE_USER')")
     */

    public function dashboardAction(Request $request){

        //$em=$this->getDoctrine()->getManager();
        //$eventType=$em->getRepository('AppBundle:EventType')->find(4);
        $user=$this->getUser();
        $Ort=$user->getStandOrt();
        $ortId=$Ort->getId();

        $unterrichtNumber=$this->getEventsSum(4);
        $PraktikumNumber=$this->getEventsSum(1);
        $UrlaubNumber=$this->getEventsSum(2);

        return $this->render('mainpages/dashboard.html.twig',['unterricht'=>$unterrichtNumber,
            'praktikum'=>$PraktikumNumber,'urlaub'=>$UrlaubNumber]);
    }



    public function getEventsSum($eventTypeId){

        $em=$this->getDoctrine()->getManager();
        $user=$this->getUser();
        $Ort=$user->getStandOrt();
        $eventType=$em->getRepository('AppBundle:EventType')->find($eventTypeId);
        $eventsCount=$em->getRepository('AppBundle:CompanyEvents')->getEventsByStandOrt($Ort,$eventType);
        if ($eventTypeId==4){
            return $eventsCount;
        }
        return $eventsCount/8;

    }

    /**
     * @Route("/chart", name="chart")
     */

    public function ChartAction(){

        $ChartData=array();
        $ChartLabel=array();
        $em=$this->getDoctrine()->getManager();
        $user=$this->getUser();
        $Ort=$user->getStandOrt();
        $Dozenten=$em->getRepository('AppBundle:Dozent')->getDozentByOrt($Ort);
        foreach ($Dozenten as $dozent){

            $DozentEventSum=$em->getRepository('AppBundle:CompanyEvents')->getSumEventsByDozent($dozent);
            $dozentName=$dozent->getDozentName();
            array_push($ChartLabel,$dozentName);
            array_push($ChartData,$DozentEventSum);
        }
        return new Response(json_encode(array('data'=>$ChartData ,'label'=>$ChartLabel)));


    }




}