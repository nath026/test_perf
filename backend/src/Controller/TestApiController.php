<?php
namespace App\Controller;
use App\Entity\Movies;
use App\Entity\Actors;

use FOS\RestBundle\Controller\AbstractFOSRestController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\Annotations as Rest;
use Exception;
use Symfony\Component\Routing\Annotation\Route;


/**
 *
 * @Route("/api", name="api_")
 */
class TestApiController extends AbstractFOSRestController
{

    /**
     *
     * @Rest\Get("/movies")
     *
     * @return Response
     */
    public function moviesAction()
    {
        set_time_limit(0);
        $users = $this->getDoctrine()->getRepository(Movies::class)->findAll();

        return $this->handleView($this->view($users));
    }

}

