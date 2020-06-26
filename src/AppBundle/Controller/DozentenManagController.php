<?php
/**
 * Created by PhpStorm.
 * User: boran
 * Date: 25/09/2017
 * Time: 14:20
 */

namespace AppBundle\Controller;

use AppBundle\Datatables\DozentDatatable;
use AppBundle\Entity\Dozent;
use AppBundle\Form\AddDozentForm;
use AppBundle\Form\druckenQueryForm;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use AppBundle\Form\ShuhleGroupsFormType;

class DozentenManagController extends Controller
{

    /**
     * @Route("/dozent", name="dozent_show")
     * @Security("is_granted('ROLE_USER')")
     */

    public function DozentAction(Request $request){

        $user=$this->getUser();
        $Ort=$user->getStandOrt();
        $ortId=$Ort->getId();

        $isAjax = $request->isXmlHttpRequest();
        $addDozentForm= $this->get('form.factory')->createNamed(null,AddDozentForm::class);
        $datatable = $this->get('sg_datatables.factory')->create(DozentDatatable::class);
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
            $qb->andWhere('Dozent_StandOrt.id = :Ortid');
            $qb->setParameter('Ortid', $ortId);
            return $responseService->getResponse(true, true);
        }

        return $this->render('mainpages/dozentenView.html.twig',['datatable' => $datatable,'dozentForm'=>$addDozentForm->createView()]);

    }

    /**
     * @Route("/saverowdozent",name="save_row_dozent")
     */

    public function addRowAction(Request $request){

        if ($request->isXMLHttpRequest()) {

            $data=$request->getContent();
            $em=$this->getDoctrine()->getManager();
            $DozentName = $_POST['Dozent_Name'];
            $DozentEmail = $_POST['Dozent_Email'];
            $Ort=$this->getUser()->getStandOrt();
            $Dozent=new Dozent();
            $Dozent->setDozentEmail($DozentEmail);
            $Dozent->setGultig(true);
            $Dozent->setDozentName($DozentName);
            $Dozent->setDozentStandOrt($Ort);
            $em->persist($Dozent);
            $em->flush();

            return new JsonResponse(array('status' => '1', 'message' => 'Done '));
        }

        return new JsonResponse(array('failed' => 'Something is going wrong'));


    }





}