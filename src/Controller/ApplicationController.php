<?php

namespace App\Controller;

use App\Entity\Application;
use App\Form\ApplicationType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ApplicationController extends Controller
{
    /**
     * @Route("/engagez-vous", name="application", methods="GET|POST")
     */
    public function new(Request $request): Response
    {
        $application = new Application();
        $form = $this->createForm(ApplicationType::class, $application);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($application);
            $em->flush();

            return $this->redirectToRoute('home');
        }

        return $this->render('application/index.html.twig', [
            'application' => $application,
            'form' => $form->createView(),
        ]);
    }

}
