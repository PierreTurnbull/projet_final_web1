<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\Jobs;

class JobsController extends Controller
{
    /**
     * @Route("/metiers", name="jobs")
     */
    public function index()
    {
        return $this->render('jobs/index.html.twig', [
            'controllerName' => 'JobsController',
            'job1' => 'ANALYSTE EN RENSEIGNEMENT GÉOSPATIAL',
            'job2' => 'CARTOGRAPHE SPATIAL',
            'job3' => 'ARCHITECTE DE DONNÉES RÉFÉRENCÉES',
            'job4' => 'ANALYSTE EN RENSEIGNEMENT GÉOSPATIAL',
            'job5' => 'TIDADIDADOUM',
            'job6' => 'ABIBARATOUM'
        ]);
    }

    /**
     * @Route("/metiers/{id}", name="jobsArticle")
     */
    public function article($id)
    {
        return $this->render('jobs/article.html.twig', [
            'controllerName' => 'JobsController'
        ]);
    }

    /**
     * @Route("/api/job-list", name="jobList")
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public static function getJobList()
    {
        $data = $this
            ->getDoctrine()
            ->getRepository(Jobs::class)
            ->findAll();
        return $this->json($data);
    }

    /**
     * @Route("/api/job-list/{id}", name="jobItem")
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public static function getJob($id)
    {
        $data = $this
            ->getDoctrine()
            ->getRepository(Jobs::class)
            ->find($id);
        return $this->json($data);
    }
}
