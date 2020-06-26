<?php
/**
 * Created by PhpStorm.
 * User: boran
 * Date: 18/09/2017
 * Time: 20:42
 */

namespace AppBundle\Controller;


use AppBundle\Datatables\EinzelFachDatatable;
use AppBundle\Entity\EinzelFach;
use AppBundle\Form\addEinzehlfachForm;
use AppBundle\Form\ShuhleGroupsFormType;
use Sg\DatatablesBundle\Datatable\DatatableInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class EinzehfachController extends Controller
{


    /**
     * @Route("/einzehl", name="einzehl-fach")
     * @Security("is_granted('ROLE_USER')")
     */
    
    public function einzehlAction(Request $request){

        $user=$this->getUser();
        $Ort=$user->getStandOrt();
        $ortId=$Ort->getId();

        $isAjax = $request->isXmlHttpRequest();
        $EinzehlFachForm= $this->get('form.factory')->createNamed(null,addEinzehlfachForm::class);
        $datatable = $this->get('sg_datatables.factory')->create(EinzelFachDatatable::class);
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
        
        return $this->render('mainpages/EinzehlFachView.html.twig',['datatable' => $datatable,'EinzehlFachForm'=>$EinzehlFachForm->createView()]);
    
        
    }

    /**
     * @Route("/saveroweinzehl",name="save_row_einzehl")
     */

    public function addRowAction(Request $request){

        if ($request->isXMLHttpRequest()) {

            $data=$request->getContent();
            $gesamtfachid = $_POST['GesamtFach'];
            $em=$this->getDoctrine()->getManager();
            $gesamtfach=$em->getRepository("AppBundle:GesamtFach")->find($gesamtfachid);

            $einzehlfach = $_POST['EinzelFach_Name'];
            $EinzehlFachObj=new EinzelFach();
            $EinzehlFachObj->setGesamtFach($gesamtfach);
            $EinzehlFachObj->setEinzelFachName($einzehlfach);
            $em->persist($EinzehlFachObj);
            $em->flush();

            return new JsonResponse(array('status' => '1', 'message' => 'Done '));
        }

        return new JsonResponse(array('failed' => 'Something is going wrong'));


    }

}