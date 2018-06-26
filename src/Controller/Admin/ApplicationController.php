<?php

namespace App\Controller\Admin;

use App\Entity\Application;
use App\Form\ApplicationType;
use App\Repository\ApplicationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin/candidatures")
 */
class ApplicationController extends Controller
{
    /**
     * @Route("/", name="application_index", methods="GET")
     */
    public function index(ApplicationRepository $applicationRepository): Response
    {
        return $this->render('admin/application/index.html.twig', ['applications' => $applicationRepository->findAll()]);
    }

    /**
     * @Route("/{id}", name="application_show", methods="GET")
     */
    public function show(Application $application): Response
    {
        return $this->render('admin/application/show.html.twig', ['application' => $application]);
    }
}