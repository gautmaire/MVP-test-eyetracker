<?php

namespace TextBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/listeTextes")
     */
    public function listeTextesAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('TextBundle:Text');
        $langue = $request->request->get('langue');
        return $this->render('TextBundle:Default:listeTextes.html.twig',
            array('texts' => $repo->findAll(), 'langue' => $langue)
        );
    }
}