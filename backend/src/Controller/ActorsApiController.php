<?php

namespace App\Controller;

use App\Entity\Actors;
use App\Entity\Movies;
use App\Form\ActorsType;
use App\Repository\ActorsRepository;
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
        $data = $this->getDoctrine()->getRepository(Actors::class)->findBy(array(), array('id' => 'ASC'), 200);
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
        $data = $this->getDoctrine()->getRepository(Actors::class)->findOneBy(['id' => $id]);
        return $this->handleView($this->view($data));
    }

    /**
     *
     * @Rest\Delete("/actor/{id}")
     *
     * @return Response
     */
    public function deleteActorByID($id)
    {
        $em = $this->getDoctrine()->getManager();
        $data = $em->getRepository(Actors::class)->findOneBy(['id'=> $id]);
        try{
            if ($data != null){
                $em->remove($data);
                $em->flush();
                return $this->handleView($this->view(['status' => 'Ok'], Response::HTTP_OK));
            }else{
                return $this->handleView($this->view(['status' => 'No Content'], Response::HTTP_NO_CONTENT));
            }
        } catch( Exception $e){
            return $this->handleView($this->view(['error' => $e->getMessage()], Response::HTTP_NOT_ACCEPTABLE));
        }
    }


    /**
     * 
     * @Rest\Post("/actors")
     * 
     * @return Response
     */
    public function createAction(Request $request)
    {
        $actors = new Actors();
        $firstName = $request->query->get('firstName');
        $lastName = $request->query->get('lastName');

        $actors->setFirstName($firstName);
        $actors->setLastName($lastName);
        try {
            sleep(rand(0, 10));
            $em = $this->getDoctrine()->getManager();

            $em->persist($actors);
            $em->flush();
            return $this->handleView($this->view(['status' => 'ok', 'id' => "", $actors->getId()], Response::HTTP_CREATED));
        } catch (Exception $e) {
            return $this->handleView($this->view(['error' => $e->getMessage()], Response::HTTP_ACCEPTED));
        }
    }
}
