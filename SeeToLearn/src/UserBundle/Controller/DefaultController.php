<?php

namespace UserBundle\Controller;

use FOS\UserBundle\Form\Type\RegistrationFormType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use UserBundle\Form\RegistrationType;
use UserBundle\Form\UserType;
use UserBundle\Entity\User;

class DefaultController extends Controller
{
    /**
     * @Route("/Test")
     */
    public function indexAction()
    {
        return $this->render('UserBundle:Default:index.html.twig');
    }
}
