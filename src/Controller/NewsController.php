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
            'controller_name' => 'NewsController',
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
        if (!$article) {
            $article = "no product found";
        }
        return $this->render('news/article.html.twig', [
            'controller_name' => 'NewsController',
            'articleTitle' => $article->getTitle(),
            'articleContent' => $article->getContent(),
            'articleCategory' => $article->getCategory(),
            'articleCreationDate' => $article->getCreationDate()
        ]);
    }
}