<?php
/**
 * Created by PhpStorm.
 * User: boran
 * Date: 05/11/2017
 * Time: 08:45
 */

namespace AppBundle\Controller;


use AppBundle\Entity\SchuleGroup;
use AppBundle\Form\SelectGroupforBerichtenForm;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class GroupReportController extends Controller
{

    /**
     * @Route("/groupreport", name="group-report")
     * @Security("is_granted('ROLE_USER')")
     */

    public function showGroupReport(Request $request)
    {

        $user = $this->getUser();
        $Ort = $user->getStandOrt();
        $ortId = $Ort->getId();
        $em = $this->getDoctrine()->getManager();
        $Searchform = $this->createForm(SelectGroupforBerichtenForm::class, null, array('id' => $ortId));
        $Searchform->handleRequest($request);
        $eventTypeUnterricht=$em->getRepository('AppBundle:EventType')->find(4);
        $eventTypeUrlaub=$em->getRepository('AppBundle:EventType')->find(2);
        $eventTypePraktikum=$em->getRepository('AppBundle:EventType')->find(1);

        if ($Searchform->isSubmitted()) {
            $Query = $Searchform->getData();
            $SchuleGroup = $Query['schuleGroup'];
            $events=$em->getRepository('AppBundle:CompanyEvents')->getEventsbyGroupandEinzehlfach($SchuleGroup,$eventTypeUnterricht);
            $Urlaubevents=$em->getRepository('AppBundle:CompanyEvents')->getUrlaubOfgroup($SchuleGroup,$eventTypeUrlaub);
            $Praktikumevents=$em->getRepository('AppBundle:CompanyEvents')->getPraktikumOfgroup($SchuleGroup,$eventTypePraktikum);
            return $this->render(':mainpages:GruppeBerichtenView.html.twig',['events'=>$events,'groupname'=>$Query['schuleGroup']->getGroupName(),'groupid'=>$Query['schuleGroup']->getId(),'Praktikum'=>$Praktikumevents[0][1]/8,'Urlaub'=>$Urlaubevents[0][1]/8]);

        }

    }
}