<?php

namespace App\Controller;

use App\Entity\MoviesGenres;
use App\Form\MoviesGenresType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/movies/genres")
 */
class MoviesGenresController extends AbstractController
{
    /**
     * @Route("/", name="movies_genres_index", methods={"GET"})
     */
    public function index(): Response
    {
        $moviesGenres = $this->getDoctrine()
            ->getRepository(MoviesGenres::class)
            ->findAll();

        return $this->render('movies_genres/index.html.twig', [
            'movies_genres' => $moviesGenres,
        ]);
    }

    /**
     * @Route("/new", name="movies_genres_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $moviesGenre = new MoviesGenres();
        $form = $this->createForm(MoviesGenresType::class, $moviesGenre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($moviesGenre);
            $entityManager->flush();

            return $this->redirectToRoute('movies_genres_index');
        }

        return $this->render('movies_genres/new.html.twig', [
            'movies_genre' => $moviesGenre,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{genre}", name="movies_genres_show", methods={"GET"})
     */
    public function show(MoviesGenres $moviesGenre): Response
    {
        return $this->render('movies_genres/show.html.twig', [
            'movies_genre' => $moviesGenre,
        ]);
    }

    /**
     * @Route("/{genre}/edit", name="movies_genres_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, MoviesGenres $moviesGenre): Response
    {
        $form = $this->createForm(MoviesGenresType::class, $moviesGenre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('movies_genres_index');
        }

        return $this->render('movies_genres/edit.html.twig', [
            'movies_genre' => $moviesGenre,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{genre}", name="movies_genres_delete", methods={"POST"})
     */
    public function delete(Request $request, MoviesGenres $moviesGenre): Response
    {
        if ($this->isCsrfTokenValid('delete'.$moviesGenre->getGenre(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($moviesGenre);
            $entityManager->flush();
        }

        return $this->redirectToRoute('movies_genres_index');
    }
}
