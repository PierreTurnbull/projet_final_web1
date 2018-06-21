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
        $articleList = $this->getDoctrine()
            ->getRepository(Jobs::class)
            ->findAll();
        return $this->render('jobs/index.html.twig', [
            'controllerName' => 'JobsController',
            'articleList' => $articleList
        ]);
    }

    /**
     * @Route("/metiers/{id}", name="jobsArticle")
     */
    public function article($id)
    {
        $article = $this->getDoctrine()
            ->getRepository(Jobs::class)
            ->find($id);
        return $this->render('jobs/article.html.twig', [
            'controllerName' => 'JobsController',
            'article' => $article
        ]);
    }
}
