<?php

namespace App\Controller;

use App\Entity\Directors;
use App\Form\DirectorsType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/directors")
 */
class DirectorsController extends AbstractController
{
    /**
     * @Route("/", name="directors_index", methods={"GET"})
     */
    public function index(): Response
    {
        $directors = $this->getDoctrine()
            ->getRepository(Directors::class)
            ->findAll();

        return $this->render('directors/index.html.twig', [
            'directors' => $directors,
        ]);
    }

    /**
     * @Route("/new", name="directors_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $director = new Directors();
        $form = $this->createForm(DirectorsType::class, $director);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($director);
            $entityManager->flush();

            return $this->redirectToRoute('directors_index');
        }

        return $this->render('directors/new.html.twig', [
            'director' => $director,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="directors_show", methods={"GET"})
     */
    public function show(Directors $director): Response
    {
        return $this->render('directors/show.html.twig', [
            'director' => $director,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="directors_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Directors $director): Response
    {
        $form = $this->createForm(DirectorsType::class, $director);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('directors_index');
        }

        return $this->render('directors/edit.html.twig', [
            'director' => $director,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="directors_delete", methods={"POST"})
     */
    public function delete(Request $request, Directors $director): Response
    {
        if ($this->isCsrfTokenValid('delete'.$director->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($director);
            $entityManager->flush();
        }

        return $this->redirectToRoute('directors_index');
    }
}
