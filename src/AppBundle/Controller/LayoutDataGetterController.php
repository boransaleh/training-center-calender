<?php
/**
 * Created by PhpStorm.
 * User: boran
 * Date: 29/10/2017
 * Time: 10:35
 */

namespace AppBundle\Controller;


use AppBundle\Form\SelectGroupforBerichtenForm;
use AppBundle\Form\ShuhleGroupsFormType;
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
class LayoutDataGetterController extends Controller
{

    /**
     * @Route("/dozentcount", name="dozent_count")
     */

    public function getDozentCountAction(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $user=$this->getUser();
        $Ort=$user->getStandOrt();
        $DozentNumber = $em->getRepository("AppBundle:Dozent")->getCountDozent($Ort);
        return new Response($DozentNumber);
    }

    /**
     * @Route("/dozentcount", name="dozent_count")
     */

    public function getGroupCountAction(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $user=$this->getUser();
        $Ort=$user->getStandOrt();
        $currentdate = date("Y-m-d");
        $GroupNumber = $em->getRepository('AppBundle:SchuleGroup')->GetGroupsCount($Ort, $currentdate);
        return new Response($GroupNumber);

    }

    /**
     * @Route("/erstellenform",name="erstellen_form")
     * @Security("is_granted('ROLE_USER')")
     */
    public function ErstellenGroupCalendarFormAction(Request $request)
    {
        $user=$this->getUser();
        $Ort=$user->getStandOrt();
        $ortId=$Ort->getId();
        $Groupform=$this->createForm(ShuhleGroupsFormType::class,null,array('id'=>$ortId));
        return $this->render('Form/ErstellenGroupCalendarForm.html.twig',['SGroupForm'=>$Groupform->createView()]);

    }

    /**
     * @Route("/groupberichtenform",name="groupberichten_form")
     * @Security("is_granted('ROLE_USER')")
     */
    public function GroupBerichtenFormRenderAction(Request $request)
    {
        $user=$this->getUser();
        $Ort=$user->getStandOrt();
        $ortId=$Ort->getId();
        $Groupform=$this->createForm(SelectGroupforBerichtenForm::class,null,array('id'=>$ortId));
        return $this->render(':Form:GroupBerichtenForm.html.twig',['GroupBerichten'=>$Groupform->createView()]);

    }




}