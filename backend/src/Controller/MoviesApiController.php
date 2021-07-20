<?php
namespace App\Controller;
use App\Entity\Movies;
use App\Entity\Directors;
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
        $data = $this->getDoctrine()->getRepository(Movies::class)->findBy(array(), array('id' => 'ASC'), 2000);
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
        
        //return $this->redirectToRoute('back_book_index');
    }

    /**
     *
     * @Rest\Get("/slow/movie/{id}")
     *
     * @return Response
     */
    public function movieByIdAction_Slow($id)
    {
        sleep(20);
        $data = $this->getDoctrine()->getRepository(Movies::class)->findBy(['id' => $id]);
        return $this->handleView($this->view($data));
    }

    /**
     *
     * @Rest\Post("/movie")
     *
     * @return Response
     */
    public function createMovie(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        // var_dump($request);
        $name = $request->query->get('name');
        $year = $request->query->get('year');
        $rank = $request->query->get('rank');
        $directorId = $request->query->get('directorId');
        // $data = json_decode($request->getContent(), true);
        $director = $em->getRepository(Directors::class)->findOneBy(['id'=> $directorId]);
        $movie = new Movies();
        $movie->setName($name);
        $movie->setYear($year);
        $movie->setRank($rank);
        $movie->addDirector($director);
        try {
            $em->persist($movie);
            $em->flush();
            return $this->handleView($this->view(['status' => 'Created'], Response::HTTP_CREATED));
        } catch (Exception $e) {
            return $this->handleView($this->view(['error' => $e->getMessage()], Response::HTTP_ACCEPTED));
        }
    }
    
}

