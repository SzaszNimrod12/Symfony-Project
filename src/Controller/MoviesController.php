<?php

namespace App\Controller;

use App\Entity\Movie;
use App\Repository\MovieRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MoviesController extends AbstractController
{
    private $em;
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    #[Route('/movies', name: 'movies')]
    public function index(): Response
    {
        $repository = $this->em->getRepository(Movie::class);

        #$movies = $repository->findAll();
        #$movies = $repository->find(5);
        #$movies = $repository->findBy([], ['id' => 'DESC']);
        #$movies = $repository->findOneBy(['id' => 5, 'title' => 'The Dark Knight'], ['id' => 'DESC']);
        #$movies = $repository->count(['id' => 5]);
        $movies = $repository->getClassName();

        #dd($movies);

        return $this->render('index.html.twig');
    }
}
