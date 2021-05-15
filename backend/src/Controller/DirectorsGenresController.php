<?php

namespace App\Controller;

use App\Entity\DirectorsGenres;
use App\Form\DirectorsGenresType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/directors/genres")
 */
class DirectorsGenresController extends AbstractController
{
    /**
     * @Route("/", name="directors_genres_index", methods={"GET"})
     */
    public function index(): Response
    {
        $directorsGenres = $this->getDoctrine()
            ->getRepository(DirectorsGenres::class)
            ->findAll();

        return $this->render('directors_genres/index.html.twig', [
            'directors_genres' => $directorsGenres,
        ]);
    }

    /**
     * @Route("/new", name="directors_genres_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $directorsGenre = new DirectorsGenres();
        $form = $this->createForm(DirectorsGenresType::class, $directorsGenre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($directorsGenre);
            $entityManager->flush();

            return $this->redirectToRoute('directors_genres_index');
        }

        return $this->render('directors_genres/new.html.twig', [
            'directors_genre' => $directorsGenre,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{genre}", name="directors_genres_show", methods={"GET"})
     */
    public function show(DirectorsGenres $directorsGenre): Response
    {
        return $this->render('directors_genres/show.html.twig', [
            'directors_genre' => $directorsGenre,
        ]);
    }

    /**
     * @Route("/{genre}/edit", name="directors_genres_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, DirectorsGenres $directorsGenre): Response
    {
        $form = $this->createForm(DirectorsGenresType::class, $directorsGenre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('directors_genres_index');
        }

        return $this->render('directors_genres/edit.html.twig', [
            'directors_genre' => $directorsGenre,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{genre}", name="directors_genres_delete", methods={"POST"})
     */
    public function delete(Request $request, DirectorsGenres $directorsGenre): Response
    {
        if ($this->isCsrfTokenValid('delete'.$directorsGenre->getGenre(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($directorsGenre);
            $entityManager->flush();
        }

        return $this->redirectToRoute('directors_genres_index');
    }
}
