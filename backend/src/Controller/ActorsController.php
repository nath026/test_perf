<?php

namespace App\Controller;

use App\Entity\Actors;
use App\Form\ActorsType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/actors")
 */
class ActorsController extends AbstractController
{
    /**
     * @Route("/", name="actors_index", methods={"GET"})
     */
    public function index(): Response
    {
        $actors = $this->getDoctrine()
            ->getRepository(Actors::class)
            ->findAll();

        return $this->render('actors/index.html.twig', [
            'actors' => $actors,
        ]);
    }

    /**
     * @Route("/new", name="actors_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $actor = new Actors();
        $form = $this->createForm(ActorsType::class, $actor);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($actor);
            $entityManager->flush();

            return $this->redirectToRoute('actors_index');
        }

        return $this->render('actors/new.html.twig', [
            'actor' => $actor,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="actors_show", methods={"GET"})
     */
    public function show(Actors $actor): Response
    {
        return $this->render('actors/show.html.twig', [
            'actor' => $actor,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="actors_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Actors $actor): Response
    {
        $form = $this->createForm(ActorsType::class, $actor);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('actors_index');
        }

        return $this->render('actors/edit.html.twig', [
            'actor' => $actor,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="actors_delete", methods={"POST"})
     */
    public function delete(Request $request, Actors $actor): Response
    {
        if ($this->isCsrfTokenValid('delete'.$actor->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($actor);
            $entityManager->flush();
        }

        return $this->redirectToRoute('actors_index');
    }
}
