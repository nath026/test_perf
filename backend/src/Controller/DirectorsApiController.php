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
        $data = $this->getDoctrine()->getRepository(Directors::class)->findBy(array(), array('id' => 'ASC'), 2000);
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
        $data = $this->getDoctrine()->getRepository(Directors::class)->findOneBy(['id' => $id]);
        return $this->handleView($this->view($data));
    }

    /**
     *
     * @Rest\Post("/director/create")
     *
     */
    public function createAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $firstName = $request->query->get('firstName');
        $lastName = $request->query->get('lastName');

        $director = new Directors();
        $director->setFirstName($firstName);
        $director->setLastName($lastName);
        try {
            sleep(rand(0,10));
            $em->persist($director);
            $em->flush();
            return $this->handleView($this->view(['status' => 'ok', 'id' => "", $director->getId()], Response::HTTP_CREATED));
        } catch (Exception $e) {
            return $this->handleView($this->view(['error' => $e->getMessage()], Response::HTTP_ACCEPTED));
        }
    }
    
    /**
     *
     * @Rest\Delete("/director/{id}")
     *
     * @return Response
     */
    public function deleteActorByID($id)
    {
        $em = $this->getDoctrine()->getManager();
        $data = $em->getRepository(Directors::class)->findOneBy(['id'=> $id]);
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
}

