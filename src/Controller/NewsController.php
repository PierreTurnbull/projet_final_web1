<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\News;

class NewsController extends Controller
{
    /**
     * @Route("/actualites", name="news")
     */
    public function index()
    {
        $articleList = $this->getDoctrine()
            ->getRepository(News::class)
            ->findAll();
        return $this->render('news/index.html.twig', [
            'controllerName' => 'NewsController',
            'articleList' => $articleList
        ]);
    }

    /**
     * @Route("/actualites/{id}", name="newsArticle")
     */
    public function article($id)
    {
        $article = $this->getDoctrine()
            ->getRepository(News::class)
            ->find($id);
        return $this->render('news/article.html.twig', [
            'controllerName' => 'NewsController',
            'article' => $article
        ]);
    }
}