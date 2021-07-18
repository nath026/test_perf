<?php
namespace App\Controller;
use App\Entity\Actors;
use App\Entity\Directors;
use App\Entity\Movies;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use FOS\RestBundle\Controller\Annotations as Rest;
use Exception;
use Symfony\Component\Routing\Annotation\Route;


/**
 *
 * @Route("/api", name="api_")
 */
class DirectorsApiController extends AbstractFOSRestController
{

    /**
     *
     * @Rest\Get("/directors")
     *
     * @return Response
     */
    public function directorsAction()
    {
        $data = $this->getDoctrine()->getRepository(Directors::class)->findAll();
        return $this->handleView($this->view($data));
    }

    /**
     *
     * @Rest\Get("/director/{id}")
     *
     * @return Response
     */
    public function directorByIdAction($id)
    {
        $data = $this->getDoctrine()->getRepository(Directors::class)->findBy(['id' => $id]);
        return $this->handleView($this->view($data));
    }

    /**
     *
     * @Rest\Post("/director")
     *
     * @return Response
     */
    public function createAction(Request $request)
    {
        $director = new Directors();

        try {
            $em = $this->getDoctrine()->getManager();

            $em->persist($director);
            $em->flush();
            return $this->handleView($this->view(['status' => 'ok', 'id' => "", $director->getId()], Response::HTTP_CREATED));
        } catch ( Exception $e) {
            return $this->handleView($this->view(['error' => $e->getMessage()], Response::HTTP_ACCEPTED));

        }

    }


     * @Rest\Delete("/director/{id}")
     *
     * @return Response
     */
    public function deleteActorByID($id)
    {
        $em = $this->getDoctrine()->getManager();
        $data = $em->getRepository(Directors::class)->findOneBy(['id'=> $id]);
        if ($data != null){
            $em->remove($data);
            $em->flush();
            return new JsonResponse("Director was deleted");
        } else {
            return new JsonResponse("Director doesn't exist");
        }
    }

}

