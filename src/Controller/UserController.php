<?php

namespace App\Controller;

use App\Entity\Application;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    /**
     * @Route("/mon-compte", name="user", methods="GET")
     */
    public function index(): Response
    {
        $id = $this->getUser()->getId();
        $applications = $this
            ->getDoctrine()
            ->getRepository(Application::class)
            ->findBy(['candidateID' => $id]);
        return $this->render('user/index.html.twig', [
            'controller_name' => 'ApplicationController',
            'applications' => $applications,
            'username'=> $this->getUser()->getUsername()
        ]);
    }
}
