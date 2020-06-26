<?php

/**
 * Created by PhpStorm.
 * User: boran
 * Date: 30/08/2017
 * Time: 09:49
 */

namespace AppBundle\Security;

use AppBundle\Entity\StandOrt;
use AppBundle\Form\loginForm;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoder;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
Use Symfony\Component\Security\Guard\Authenticator\AbstractFormLoginAuthenticator;

class loginFormAuthenticator extends AbstractFormLoginAuthenticator
{

    private $formfactory;
    private $em;
    private $route;
    private $passwordEncoder;
    public function __construct(FormFactoryInterface $formfactory , EntityManagerInterface $em ,RouterInterface $route ,UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->formfactory= $formfactory;
        $this->em=$em;
        $this->route=$route;
        $this->passwordEncoder=$passwordEncoder;

    }


    public function getCredentials(Request $request)
    {

        $isLoginSubmit=$request->getPathInfo()=='/login' && $request->isMethod('POST');

        if(!$isLoginSubmit){
            return;
        }

        $form=$this->formfactory->create(loginForm::class);
        $form->handleRequest($request);
        $data=$form->getData();
        return $data;
    }

    public function getUser($credentials, UserProviderInterface $userProvider)
    {
        $username=$credentials['_username'];
        $ort=$credentials['StandOrt'];

        $standortObj=$this->em->getRepository('AppBundle:StandOrt')->findOneBy(array('id'=>$ort));
        return $this->em->getRepository('AppBundle:User')->findOneBy(array('email' => $username, 'StandOrt' =>$standortObj));
        
    }

    public function checkCredentials($credentials, UserInterface $user)
    {
        $password=$credentials['_password'];
        if($this->passwordEncoder->isPasswordValid($user,$password)){
            return true;
        }
        return false;
    }

    public function getLoginUrl()
    {
        return $this->route->generate('security_login');
    }

    public function getDefaultSuccessRedirectUrl(){

        return $this->route->generate('dashboard');

    }



}