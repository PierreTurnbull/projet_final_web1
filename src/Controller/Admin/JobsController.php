<?php

namespace App\Controller\Admin;

use App\Entity\Jobs;
use App\Form\JobsType;
use App\Repository\JobsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin/metiers")
 */
class JobsController extends Controller
{
    /**
     * @Route("/", name="jobs_index", methods="GET")
     */
    public function index(JobsRepository $jobsRepository): Response
    {
        return $this->render('admin/jobs/index.html.twig', [
            'jobs' => $jobsRepository->findAll()
        ]);
    }

    /**
     * @Route("/nouveau", name="jobs_new", methods="GET|POST")
     */
    public function new(Request $request): Response
    {
        $job = new Jobs();
        $form = $this->createForm(JobsType::class, $job);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($job);
            $em->flush();

            return $this->redirectToRoute('jobs_index');
        }

        return $this->render('admin/jobs/new.html.twig', [
            'job' => $job,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="jobs_show", methods="GET")
     */
    public function show(Jobs $job): Response
    {
        return $this->render('admin/jobs/show.html.twig', ['job' => $job]);
    }

    /**
     * @Route("/{id}/modifier", name="jobs_edit", methods="GET|POST")
     */
    public function edit(Request $request, Jobs $job): Response
    {
        $form = $this->createForm(JobsType::class, $job);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('jobs_edit', ['id' => $job->getId()]);
        }

        return $this->render('admin/jobs/edit.html.twig', [
            'job' => $job,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="jobs_delete", methods="DELETE")
     */
    public function delete(Request $request, Jobs $job): Response
    {
        if ($this->isCsrfTokenValid('delete'.$job->getId(), $request->request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($job);
            $em->flush();
        }

        return $this->redirectToRoute('jobs_index');
    }
}
