<?php

namespace IndexBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/index")
     */
    public function indexAction()
    {
        return $this->render('IndexBundle:Default:index.html.twig');
    }

    /**
     * @Route("/lecture")
     */
    public function lectureAction()
    {
        return $this->render('IndexBundle:Default:lecture.html.twig');
    }

    /**
     * @Route("/tableau")
     */
    public function tableauAction()
    {
        return $this->render('IndexBundle:Default:tableau.html.twig');
    }
}
