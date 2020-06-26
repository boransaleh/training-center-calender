<?php
/**
 * Created by PhpStorm.
 * User: boran
 * Date: 03/11/2017
 * Time: 08:05
 */

namespace AppBundle\Controller;


use AppBundle\Datatables\StandOrtDatatable;
use AppBundle\Entity\StandOrt;
use AppBundle\Form\addStandOrtForm;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
 * @Security("is_granted('ROLE_ADMIN')")
 */

class StandOrtController extends Controller
{

    /**
     * @Route("/standort", name="standort-manage")
     */

    public function standortAction(Request $request){

        $StandOrtForm= $this->get('form.factory')->createNamed(null,addStandOrtForm::class);
        $datatable = $this->get('sg_datatables.factory')->create(StandOrtDatatable::class);
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
        return $this->render(':mainpages:StandOrtView.html.twig',['datatable' => $datatable,'standortForm'=>$StandOrtForm->createView()]);



    }


    /**
     * @Route("/savestandort",name="save_standort")
     */

    public function addRowAction(Request $request){

        if ($request->isXMLHttpRequest()) {

            $data=$request->getContent();
            $standOrtName = $_POST['StandOrt_Name'];
            $standOrt=new StandOrt();
            $standOrt->setStandOrtName($standOrtName);
            $em=$this->getDoctrine()->getManager();
            $em->persist($standOrt);
            $em->flush();

            return new JsonResponse(array('status' => '1', 'message' => 'Done '));
        }

        return new JsonResponse(array('failed' => 'Something is going wrong'));


    }


}