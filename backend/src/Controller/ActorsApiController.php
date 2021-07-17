<?php
namespace App\Controller;
use App\Entity\Actors;
use App\Entity\Movies;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\Annotations as Rest;
use Exception;
use Symfony\Component\Routing\Annotation\Route;


/**
 *
 * @Route("/api", name="api_")
 */
class ActorsApiController extends AbstractFOSRestController
{

    /**
     *
     * @Rest\Get("/actors")
     *
     * @return Response
     */
    public function actorsAction()
    {
        $data = $this->getDoctrine()->getRepository(Actors::class)->findAll();
        return $this->handleView($this->view($data));
    }

    /**
     *
     * @Rest\Get("/actor/{id}")
     *
     * @return Response
     */
    public function actorByIdAction($id)
    {
        $data = $this->getDoctrine()->getRepository(Actors::class)->findBy(['id' => $id]);
        return $this->handleView($this->view($data));
    }


}

