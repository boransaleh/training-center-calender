<?php
/**
 * Created by PhpStorm.
 * User: boran
 * Date: 29/08/2017
 * Time: 08:10
 */

namespace AppBundle\Controller;

use AppBundle\Datatables\FreitagDatatable;
use AppBundle\Entity\EventType;
use AppBundle\Form\AddFeirtagForm;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Form\AddEventFormType;
use AppBundle\Entity\CompanyEvents;
use AppBundle\Entity\StandOrt;
use AppBundle\Entity\Freitag;
use AppBundle\Entity\SchuleGroup;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class feirtageController extends Controller
{

    /**
     * @Route("/feirtageview", name="feirtage-view")
     * @Security("is_granted('ROLE_USER')")
     */


    public function feirtageViewAction(Request $request){

        $addFeirtagForm= $this->get('form.factory')->createNamed(null,AddFeirtagForm::class);
        $datatable = $this->get('sg_datatables.factory')->create(FreitagDatatable::class);
        $datatable->buildDatatable();
        $isAjax = $request->isXmlHttpRequest();
        if ($isAjax) {

            $responseService = $this->get('sg_datatables.response');
            $responseService->setDatatable($datatable);

            $datatableQueryBuilder = $responseService->getDatatableQueryBuilder();

            $datatableQueryBuilder->buildQuery();
            /*
                        $qb=$datatableQueryBuilder->getQb();
                        $qb->andWhere('StandOrt.id = :id');
                        $qb->setParameter('id', $ortId);
            */
            $qb = $datatableQueryBuilder->getQb();
            //dump($datatableQueryBuilder->getQb()->getDQL()); die();

            return $responseService->getResponse(true, true);
        }

        return $this->render(':mainpages:FeirtageView.html.twig',['datatable' => $datatable,'addFeirtagForm'=>$addFeirtagForm->createView()]);
    }


    /**
     * @Route("/saveFeirtag",name="save_feirtag")
     */

    public function addFeirtagAction(Request $request){

        if ($request->isXMLHttpRequest()) {

            $data=$request->getContent();
            $em=$this->getDoctrine()->getManager();
            $Freitag_Name = $_POST['Freitag_Name'];
            $Freitag_Datum = new \DateTime($_POST['Freitag_Datum']);

            $feirtag=new Freitag();
            $feirtag->setFreitagName($Freitag_Name);
            $feirtag->setFreitagDatum($Freitag_Datum);
            $feirtag->setGultig(1);
            $em->persist($feirtag);
            $em->flush();

            return new JsonResponse(array('status' => '1', 'message' => 'Done '));
        }

        return new JsonResponse(array('failed' => 'Something is going wrong'));


    }


    public function MigrateFreiTagEventsAction(Request $request ){


        // $this->CreateFeirtagEventsAction($group);

        $id = $request->get('Groupid');
        $em=$this->getDoctrine()->getManager();
        $schuhleGroup=$em->getRepository('AppBundle:SchuleGroup')->find($id);
        $eventType=$em->getRepository('AppBundle:EventType')->find(3);
        $this->deleteFreitagEventsAction($schuhleGroup,$eventType);
        $this->CreateFeirtagEventsAction($schuhleGroup,$eventType);




        return new Response(json_encode(array('msg'=>$id)));


    }

    public function CreateFeirtagEventsAction(SchuleGroup $group,EventType $eventType){


        $em=$this->getDoctrine()->getManager();
        $einDate=$group->getEintrittDate();
        $ausDate=$group->getAustrittDate();
        $gultigFeirtag=$em->getRepository('AppBundle:Freitag')->getGultigFeirtageStandort($einDate,$ausDate);
		$user=$this->getUser();
        $Ort=$user->getStandOrt();

        foreach ($gultigFeirtag as $Freitag) {

            $Freitagname = $Freitag->getFreitagName();
            $startDate = $this->getDateAction($Freitag->getFreitagDatum(), 'start');
            $endDate = $this->getDateAction($Freitag->getFreitagDatum(), 'end');
            $event_date= $Freitag->getFreitagDatum()->format('Y-m-d');
            $event=new CompanyEvents();
            $event->setTitle($Freitagname);
            $event->setStartDatetime(new \DateTime($startDate));
            $event->setEndDatetime(new \DateTime($endDate));
            $event->setSchuleGroup($group);
			$event->setStandOrt($Ort);
            $event->setBgColor('#d9534f');
            $event->setEventtype($eventType);
            $event->setEventDate($event_date);
            $event->setAllDay(0);
            $event->setEventHours(9);
            $em->persist($event);
            $em->flush();
        }

    }



    public function deleteFreitagEventsAction(SchuleGroup $group,EventType $eventType){

        $em=$this->getDoctrine()->getManager();
        $StandOrtGroups=$em->getRepository('AppBundle:CompanyEvents')->DeleteFreitageEventQuery($group ,$eventType);

    }

    public function getDateAction (\DateTime $Date ,$type){


        if($type=='start'){

            return  $Date=$Date->format('Y-m-d 01:00:00');

        }
        return  $startDate=$Date->format('Y-m-d 10:00:00');

    }


}