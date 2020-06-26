<?php
/**
 * Created by PhpStorm.
 * User: boran
 * Date: 30/08/2017
 * Time: 09:17
 */

namespace AppBundle\Controller;


use AppBundle\Form\loginForm;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use  AppBundle\Form\forgetPasswordForm;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use AppBundle\Form\ResetPasswordForm;
use AppBundle\Entity\User;
class securityController extends Controller
{

    /**
     * @Route("/login",name="security_login")
     */

    public function loginAction(){
        $authenticationUtils = $this->get('security.authentication_utils');
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();
        $form=$this->createForm(loginForm::class,[
            '_username'=>$lastUsername,
        ]);
        $forgetPasswordForm = $this->get('form.factory')->createNamed(null, forgetPasswordForm::class, null, ["method" => "POST"]);
        return $this->render('security/login.html.twig', array(
            'form' => $form->createView(),
            'forgetPassword' => $forgetPasswordForm->createView(),
            'error' => $error,
        ));
    }
    
    /**
     * @Route("/logout",name="security_logout")
     */
    public function logoutAction(){
        throw new \Exception('this should not be reached ');
    }

    /**
     * @Route("/forget",name="forget_password")
     */

    public function forgetPasswordAction(Request $request)
    {
        if ($request->isXMLHttpRequest()) {

            $data = $request->getContent();
            $email = $_POST["_username"];
            $em = $this->getDoctrine()->getManager();
            $user = $em->getRepository("AppBundle:User")->findOneBy(['email' => $email]);
            if (!$user) {

                return new JsonResponse(array('status' => '0', 'message' => 'HI!! this Email is not found '));
            }

            $passcode = $user->getPasswordKey();
            $message = \Swift_Message::newInstance()
                ->setSubject("Reset Password")
                ->setFrom("boran.alsaleh@gmail.com")
                ->setTo($email)
                ->setBody($this->renderView(
                // app/Resources/views/Emails/registration.html.twig
                    'Emails/ResetPassword.html.twig',
                    array('email' => $email, 'passwordKey' => $passcode)
                ),
                    'text/html');

            $this->get('mailer')->send($message);

            return new JsonResponse(array('status' => '1', 'message' => 'Thanks !! ,we sent you email to reset your password!! )'));


        }

        return new JsonResponse(array('failure' => ' Something is going wrong'), 403);


    }

    /**
     * @Route("/resetpassword/{email}/{passkey}",name="reset_password")
     */

    public function ResetAction($email, $passkey,Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository("AppBundle:User")->findOneBy(['email' => $email]);


        if(!$user){

            throw new Exception("you are not user");
        }

        if($user->getPasswordKey()!=$passkey){

            throw new Exception("This link is not valid");


        }


        $form = $this->get('form.factory')->createNamed(null, ResetPasswordForm::class, null, ["method" => "POST"]);
        $form->handleRequest($request);
        if ($form->isSubmitted()){

            $formdata = $form->getData();

            $plainpassword=$formdata['_password'];
            $user->setPlainPassword($plainpassword);
            $user->setPasswordKey();
            $em->persist($user);
            $em->flush();
            $this->addFlash('successchangedpassword', 'Great !!! your password has been changed .. ');

        }


        return $this->render('security/ResetPasswordForm.html.twig',array('form'=>$form->createView()));




    }


}