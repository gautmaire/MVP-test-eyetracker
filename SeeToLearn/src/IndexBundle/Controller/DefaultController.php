<?php

namespace IndexBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('IndexBundle:Default:index.html.twig');
    }

    /**
     * @Route("/tableau", name="tableau")
     */
    public function tableauAction()
    {
        return $this->render('IndexBundle:Default:tableau.html.twig');
    }

    /**
     * @Route("/twitter")
     */
    public function twitterAction()
    {
        return $this->render('IndexBundle:Default:twitter.html.twig');
    }
}
