<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RecruitmentController extends Controller
{
    /**
     * @Route("/processus-de-recrutement", name="recruitment")
     */
    public function index()
    {
        return $this->render('recruitment/index.html.twig', [
            'controllerName' => 'RecruitmentController',
        ]);
    }
}
