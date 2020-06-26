<?php
/**
 * Created by PhpStorm.
 * User: boran
 * Date: 12/09/2017
 * Time: 14:10
 */

namespace AppBundle\Controller;


use AppBundle\Entity\SchuleGroup;
use AppBundle\Form\druckenQueryForm;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Form\ShuhleGroupsFormType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class CalendarTableReport extends Controller
{


    /**
     * @Route("/SearchCalendar", name="search-calendar")
     * @Security("is_granted('ROLE_USER')")
     */
    
    public function getReportAction(Request $request){
        
        $user=$this->getUser();
        $Ort=$user->getStandOrt();
        $ortId=$Ort->getId();
        $Searchform = $this->createForm(druckenQueryForm::class,null,array('id'=>$ortId));
        return $this->render('mainpages/SearchReport.html.twig',['SearchForm'=>$Searchform->createView()]);

    }

    /**
     * @Route("/drawtable", name="draw-table")
     * @Security("is_granted('ROLE_USER')")
     */
    
    public function DrawTabelAction(Request $request){
        $user=$this->getUser();
        $Ort=$user->getStandOrt();
        $ortId=$Ort->getId();
        $em=$this->getDoctrine()->getManager();
        $Searchform = $this->createForm(druckenQueryForm::class,null,array('id'=>$ortId));
        $Searchform->handleRequest($request);
        if($Searchform->isSubmitted()) {
            $Query = $Searchform->getData();
            $SchuleGroup = $Query['SchuleGroup'];
            $Dozent = $Query['Dozent'];
            $fromShortDate = $Query['fromDate']->format('Y-m-d');// get the date which the user will start to search from it 
            $toShortDate = $Query['toDate']->format('Y-m-d');// get the date which the user will finish to search to this date

            $DozentName='';
            $SchuleGroupName='';
            if ($Dozent==null && $SchuleGroup!=null){
                
                $events=$em->getRepository('AppBundle:CompanyEvents')->getEventsbyGroup($SchuleGroup,$fromShortDate,$toShortDate);
                $SchuleGroupName=$Query['SchuleGroup']->getGroupName();

            }
            elseif ($Dozent!=null && $SchuleGroup==null){
                $events=$em->getRepository('AppBundle:CompanyEvents')->getEventsbyDozent($fromShortDate,$toShortDate,$Dozent);
                $DozentName=$Dozent->getDozentName();
        

                
            }
            elseif($Dozent!=null && $SchuleGroup!=null) {

                $SchuleGroupName=$Query['SchuleGroup']->getGroupName();
                $DozentName=$Dozent->getDozentName();
                $events=$em->getRepository('AppBundle:CompanyEvents')->getEventsbydozentandgroup($SchuleGroup,$fromShortDate,$toShortDate ,$Dozent);
            }

            elseif ($Dozent==null && $SchuleGroup==null){

                $events=$em->getRepository('AppBundle:CompanyEvents')->getEventsbydate($fromShortDate,$toShortDate,$Ort  );
                
            }

            $this->get('session')->start();
            $this->get('session')->set('Dozent',$DozentName);
            $this->get('session')->set('events',$events);
            $this->get('session')->set('fromdate',$fromShortDate);
            $this->get('session')->set('enddate',$toShortDate);
            $this->get('session')->set('groupname',$SchuleGroupName);
            $this->get('session')->save();


            return $this->render('mainpages/DrawTableView.html.twig',['events'=>$events,'fromdate'=>$fromShortDate ,'enddate'=>$toShortDate,'groupname'=>$SchuleGroupName,'dozentname'=>$DozentName]);
        }

        return new JsonResponse(['msg'=>'Something Wrong']);
        
        
        
    }






}