<?php
/**
 * Created by PhpStorm.
 * User: boran
 * Date: 03/11/2017
 * Time: 10:42
 */

namespace AppBundle\Controller;


use AppBundle\Datatables\SchuleGroupDatatable;
use AppBundle\Entity\SchuleGroup;
use AppBundle\Form\AddGroupForm;
use Faker\Provider\ka_GE\DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
 * @Security("is_granted('ROLE_USER')")
 */

class GruppeController extends Controller
{

    /**
     * @Route("/groupmanage", name="group_show")
     */
    public function GroupManagementAction(Request $request){

        $user=$this->getUser();
        $Ort=$user->getStandOrt();
        $ortId=$Ort->getId();
        $addGroupForm = $this->get('form.factory')->createNamed(null, AddGroupForm::class);
        $datatable = $this->get('sg_datatables.factory')->create(SchuleGroupDatatable::class);
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
            $qb->andWhere('StandOrt.id = :Ortid');
            $qb->setParameter('Ortid', $ortId);
            return $responseService->getResponse(true, true);
        }

        return $this->render(':mainpages:GroupManagementView.html.twig',['datatable' => $datatable,'GroupForm'=>$addGroupForm->createView()]);

    }

    /**
     * @Route("/savegroup",name="save_group")
     */

    public function addGroupAction(Request $request){

        if ($request->isXMLHttpRequest()) {

            $data=$request->getContent();
            $em=$this->getDoctrine()->getManager();
            $Group_Name = $_POST['Group_Name'];
            $Eintritt_Date = new  \DateTime($_POST['Eintritt_Date']);
            $Austritt_Date = new  \DateTime($_POST['Austritt_Date']);
            $referNumber=rand(100000,61254856);
            $Group_Name=$Group_Name.'//#'.$referNumber;
            $Ort=$this->getUser()->getStandOrt();
            $group=new SchuleGroup();
            $group->setGroupName($Group_Name);
            $group->setEintrittDate($Eintritt_Date);
            $group->setAustrittDate($Austritt_Date);
            $group->setStandOrt($Ort);
            $em->persist($group);
            $em->flush();

            return new JsonResponse(array('status' => '1', 'message' => 'Done '));
        }

        return new JsonResponse(array('failed' => 'Something is going wrong'));


    }


    public function getDateAction (\DateTime $Date ,$type){


        if($type=='start'){

            return  $Date=$Date->format('Y-m-d 01:00:00');

        }
        return  $startDate=$Date->format('Y-m-d 10:00:00');

    }


}