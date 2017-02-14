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
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('TextBundle:Text');
        $repo1 = $em->getRepository('MotBundle:MotDico');
        $repo2 = $em->getRepository('UserBundle:User');
        return $this->render('IndexBundle:Default:tableau.html.twig',
            array('textes' => $repo->findAll(), 'mots' => $repo1->findAll(), 'users' => $repo2->findAll())
        );
    }

    /**
     * @Route("/twitter")
     */
    public function twitterAction()
    {
        return $this->render('IndexBundle:Default:twitter.html.twig');
    }

    /**
     * @Route("/mentions")
     */
    public function mentionsAction()
    {
        return $this->render('IndexBundle:Default:mentions.html.twig');
    }

    /**
     * @Route("/question")
     */
    public function questionAction()
    {
        return $this->render('IndexBundle:Default:question.html.twig');
    }

    /**
     * @Route("/sendMail", name="sendMail")
     */
    public function sendMailAction(Request $request)
    {
        return $this->render('IndexBundle:Default:question.html.twig');
    }
}
