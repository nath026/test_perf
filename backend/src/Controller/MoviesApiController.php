<?php
namespace App\Controller;
use App\Entity\Movies;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\Annotations as Rest;
use Exception;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;


/**
 *
 * @Route("/api", name="api_")
 */
class MoviesApiController extends AbstractFOSRestController
{

    /**
     *
     * @Rest\Get("/movies")
     *
     * @return Response
     */
    public function moviesAction()
    {
        $data = $this->getDoctrine()->getRepository(Movies::class)->findAll();
        return $this->handleView($this->view($data));
    }

    /**
     *
     * @Rest\Get("/movie/{id}")
     *
     * @return Response
     */
    public function movieByIdAction($id)
    {
        $data = $this->getDoctrine()->getRepository(Movies::class)->findBy(['id' => $id]);
        return $this->handleView($this->view($data));
    }

    /**
     *
     * @Rest\Delete("/movie/{id}")
     *
     * @return Response
     */
    public function deleteMovieByID($id)
    {
        $em = $this->getDoctrine()->getManager();
        $data = $em->getRepository(Movies::class)->findOneBy(['id'=> $id]);
        if ($data != null){
            $em->remove($data);
            $em->flush();
            return new JsonResponse("Movie was deleted");
        }else{
            return new JsonResponse("Movie doesn't exist");
        }
        //return $this->redirectToRoute('back_book_index');
    }


    
}

