<?php

namespace App\Controller;

use App\Repository\RecipeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AppController extends AbstractController
{
    #[Route('/', name: 'app')]
    public function index(RecipeRepository $recipeRepository): Response
    {
        return $this->render('app/index.html.twig', [
            'controller_name' => 'AppController',
            'recipes' => $recipeRepository->findAll(),
        ]);
    }
}
