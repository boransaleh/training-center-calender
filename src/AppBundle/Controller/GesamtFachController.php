<?php
/**
 * Created by PhpStorm.
 * User: boran
 * Date: 17/09/2017
 * Time: 15:13
 */

namespace AppBundle\Controller;


use AppBundle\Datatables\GesamtFachDatatable;
use AppBundle\Entity\GesamtFach;
use AppBundle\Form\addGesamtFacher;
use AppBundle\Form\ShuhleGroupsFormType;
use Sg\DatatablesBundle\Datatable\DatatableInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class GesamtFachController extends Controller
{

    /**
     * @Route("/gesamt", name="gesamt-fach")
     * @Security("is_granted('ROLE_USER')")
     */

    public function GesamtFachAction(Request $request){

        //$em=$this->getDoctrine()->getManager();
        //$eventType=$em->getRepository('AppBundle:EventType')->find(4);
        $user=$this->getUser();
        $Ort=$user->getStandOrt();
        $ortId=$Ort->getId();

        $isAjax = $request->isXmlHttpRequest();

        /** @var DatatableInterface $datatable */

        $GesamtFachForm= $this->get('form.factory')->createNamed(null,addGesamtFacher::class);

        $datatable = $this->get('sg_datatables.factory')->create(GesamtFachDatatable::class);
        $datatable->buildDatatable();

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


        return $this->render('mainpages/Faecher.html.twig',['datatable' => $datatable,'GesamtFachForm'=>$GesamtFachForm->createView()]);
    }


    /**
     * @Route("/saverow",name="save_row")
     */

    public function addRowAction(Request $request){

        if ($request->isXMLHttpRequest()) {

            $data=$request->getContent();
            $gesamtfachName = $_POST['GesamtFach_Name'];
            $GesamtFachObj=new GesamtFach();
            $GesamtFachObj->setGesamtFachName($gesamtfachName);
            $em=$this->getDoctrine()->getManager();
            $em->persist($GesamtFachObj);
            $em->flush();

            return new JsonResponse(array('status' => '1', 'message' => 'Done '));
        }

        return new JsonResponse(array('failed' => 'Something is going wrong'));


    }


}