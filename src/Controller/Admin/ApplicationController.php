<?php

namespace App\Controller\Admin;

use App\Entity\Application;
use App\Form\ApplicationType;
use App\Form\AdminApplicationType;
use App\Repository\ApplicationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\Date;

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
     * @Route("/{id}", name="application_show", methods="GET|POST")
     */
    public function show(Request $request, Application $application): Response
    {
        $form = $this->createForm(AdminApplicationType::class, $application);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('application_show', [
                'id' => $application->getId()
            ]);
        }

        return $this->render('admin/application/show.html.twig', [
            'application' => $application,
            'form' => $form->createView(),
            'currentDate' => new \DateTime()
        ]);
    }

    /**
     * @Route("/refuser/{id}", name="application_refuse", methods="PUT")
     */
    public function refuse(Request $request, Application $application): Response
    {
        if ($this->isCsrfTokenValid('refuse'.$application->getId(), $request->request->get('_token'))) {
            $application->setState(-1);
            $em = $this->getDoctrine()->getManager();
            $em->flush();
        }

        return $this->redirectToRoute('application_index');
    }

    /**
     * @Route("/accepter/{id}", name="application_accept", methods="PUT")
     */
    public function accept(Request $request, Application $application): Response
    {
        if ($this->isCsrfTokenValid('accept'.$application->getId(), $request->request->get('_token'))) {
            $application->setState(-1);
            $application->setAccepted(true);
            $em = $this->getDoctrine()->getManager();
            $em->flush();
        }

        return $this->redirectToRoute('application_index');
    }

    /**
     * @Route("/etape-suivante/{id}", name="application_next", methods="POST")
     */
    public function next(Request $request, Application $application): Response
    {
        if ($this->isCsrfTokenValid('next'.$application->getId(), $request->request->get('_token'))) {
            $application->setRdvDate(new \DateTime($request->get('admin_application')['rdvDate']));
            $application->setRdvPlace($request->get('admin_application')['rdvPlace']);
            $application->setState($application->getState() + 1);
            $em = $this->getDoctrine()->getManager();
            $em->flush();
        }

        return $this->redirectToRoute('application_index');
    }
}