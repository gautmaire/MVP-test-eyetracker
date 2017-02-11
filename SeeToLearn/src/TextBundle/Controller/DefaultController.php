<?php

namespace TextBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/textes")
     */
    public function texteAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('TextBundle:Text');
        $langue = $request->request->get('langue');
        return $this->render('TextBundle:Default:textes.html.twig',
            array('texts' => $repo->findAll(), 'langue' => $langue)
        );
    }
}