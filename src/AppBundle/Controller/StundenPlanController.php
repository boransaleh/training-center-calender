<?php

namespace AppBundle\Controller;

use AppBundle\Entity\SchuleGroup;
use AppBundle\Form\ShuhleGroupsFormType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\AddEventFormType;
use AppBundle\Entity\CompanyEvents;
use AppBundle\Entity\StandOrt;
use AppBundle\Entity\Freitag;
use AppBundle\Entity\FeirtagStandOrt;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;

class StundenPlanController extends Controller
{
    /**
     * @Route("/stundenplan", name="stunden-plan")
     * @Security("is_granted('ROLE_USER')")
     */
    public function indexAction(Request $request)
    {
        $user=$this->getUser();
        $Ort=$user->getStandOrt();
        $id=$Ort->getId();
        $form=$this->createForm(AddEventFormType::class,null,array('id'=>$id));
        $Groupform=$this->createForm(ShuhleGroupsFormType::class,null,array('id'=>$id));
        $Groupform->handleRequest($request);
        if($Groupform->isSubmitted()) {
            $Group = $Groupform->getData();
            $GroupId=$Group['schuleGroup']->getId();
            $GroupName=$Group['schuleGroup']->getGroupName();
            $this->get('session')->start();
            $this->get('session')->set('Group_Id', $GroupId);
            $this->get('session')->save();

            $this->get('session')->start();
            $this->get('session')->set('Group_Name', $GroupName);
            $this->get('session')->save();


        }

        $sessionGroupId=$this->get('session')->get('Group_Id');

        if(!isset($sessionGroupId)){

            return new JsonResponse(array('msg'=>'You should select the Group'));
        }

        return $this->render(':mainpages:StundenPlanController.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,'addeventForm'=>$form->createView(),

        ]);





    }







}
