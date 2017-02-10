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
     * @Route("/lecture/{id}", name="lecture")
     */
    public function lectureAction($id)
    {
        $em = $this->get('doctrine')->getManager();
        $repo = $em->getRepository('TextBundle:Text');
        return $this->render('UserBundle:Default:lecture.html.twig',
            array('texte' => $repo->find($id))
        );
    }

    /**
     * @Route("/update")
     */
    public function updateAction(Request $request)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        if (!$user) {
            throw $this->createNotFoundException('Unable to find User entity.');
        }
        $form = $this->createForm(RegistrationType::class, $user);
        if ($request->getMethod() === 'POST')
        {
            $form->handleRequest($request);
            if ($form->isValid()) {
                $em->persist($user);
                $em->flush();
                return $this->redirect($this->generateUrl('tableau'));
            }
            $em->refresh($user);
        }
        return $this->render('UserBundle:Default:profile.html.twig', array(
            'user' => $user,
            'form' => $form->createView(),
        ));
    }
}
