<?php
/**
 * Created by PhpStorm.
 * User: boran
 * Date: 29/10/2017
 * Time: 09:57
 */

namespace AppBundle\Controller;


use AppBundle\Datatables\CompanyEventsDatatable;
use AppBundle\Form\ShuhleGroupsFormType;
use AppBundle\Form\druckenQueryForm;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class BerichtenController extends Controller
{
    /**
     * @Route("/berichten", name="berichten_show")
     * @Security("is_granted('ROLE_USER')")
     */


    public function BerichtenExportAction(Request $request){

        $user=$this->getUser();
        $Ort=$user->getStandOrt();
        $ortId=$Ort->getId();
        $isAjax = $request->isXmlHttpRequest();
        $datatable = $this->get('sg_datatables.factory')->create(CompanyEventsDatatable::class);
        $datatable->buildDatatable();
        $toShortDate=$this->get('session')->get('toShortDateBerichten');
        $fromdate=$this->get('session')->get('fromShortDateBerichten');


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



            $qb->andWhere('eventtype.id = :id AND StandOrt.id = :Ortid');
            $qb->andWhere('companyevents.EventDate  <= :toDate ');
            $qb->andWhere('companyevents.EventDate >= :fromDate');
            $qb->setParameter('id', 4);
            $qb->setParameter('Ortid', $ortId);
            $qb->setParameter('toDate', $toShortDate);
            $qb->setParameter('fromDate', $fromdate);


            //dump($datatableQueryBuilder->getQb()->getDQL()); die();

            return $responseService->getResponse(true, true);
        }

        return $this->render(':mainpages:BerichtenView.html.twig',['datatable' => $datatable,'fromdate'=>$fromdate,'todate'=>$toShortDate]);

    }

    /**
     * @Route("/fromtoform",name="fromto_form")
     * @Security("is_granted('ROLE_USER')")
     */
    public function getfromToDateFormAction(Request $request)
    {
        $user=$this->getUser();
        $Ort=$user->getStandOrt();
        $ortId=$Ort->getId();
        $BerichtenfromtoForm=$this->createForm(druckenQueryForm::class,null,array('id'=>$ortId));
        $BerichtenfromtoForm->handleRequest($request);
        if ($BerichtenfromtoForm->isSubmitted() && $request->isMethod('POST')) {

            $Query = $BerichtenfromtoForm->getData();
            $fromShortDate = $Query['fromDate']->format('Y-m-d');// get the date which the user will start to search from it
            $toShortDate = $Query['toDate']->format('Y-m-d');
            $this->get('session')->start();
            $this->get('session')->set('fromShortDateBerichten',$fromShortDate);
            $this->get('session')->set('toShortDateBerichten',$toShortDate);
            $this->get('session')->save();
            return $this->redirectToRoute('berichten_show');

        }




        return $this->render('Form/Berichten.html.twig',['SearchForm'=>$BerichtenfromtoForm->createView()]);


    }


}