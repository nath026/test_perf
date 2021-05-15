<?php

namespace App\Controller;

use App\Entity\Roles;
use App\Form\RolesType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/roles")
 */
class RolesController extends AbstractController
{
    /**
     * @Route("/", name="roles_index", methods={"GET"})
     */
    public function index(): Response
    {
        $roles = $this->getDoctrine()
            ->getRepository(Roles::class)
            ->findAll();

        return $this->render('roles/index.html.twig', [
            'roles' => $roles,
        ]);
    }

    /**
     * @Route("/new", name="roles_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $role = new Roles();
        $form = $this->createForm(RolesType::class, $role);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($role);
            $entityManager->flush();

            return $this->redirectToRoute('roles_index');
        }

        return $this->render('roles/new.html.twig', [
            'role' => $role,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{actorId}", name="roles_show", methods={"GET"})
     */
    public function show(Roles $role): Response
    {
        return $this->render('roles/show.html.twig', [
            'role' => $role,
        ]);
    }

    /**
     * @Route("/{actorId}/edit", name="roles_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Roles $role): Response
    {
        $form = $this->createForm(RolesType::class, $role);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('roles_index');
        }

        return $this->render('roles/edit.html.twig', [
            'role' => $role,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{actorId}", name="roles_delete", methods={"POST"})
     */
    public function delete(Request $request, Roles $role): Response
    {
        if ($this->isCsrfTokenValid('delete'.$role->getActorId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($role);
            $entityManager->flush();
        }

        return $this->redirectToRoute('roles_index');
    }
}
