<?php

namespace App\Controller;

use App\Entity\ProductCategory;
use App\Repository\ProductCategoryRepository;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/category')]
class ProductCategoryController extends AbstractController
{
    #[Route('/', name: 'category_index')]
    public function index(ProductCategoryRepository $categoryRepository, ProductRepository $productRepository): Response
    {
        return $this->render('product_category/index.html.twig', [
            'categories' => $categoryRepository->findAll(),
            'lastProducts' => $productRepository->findBy([], ['createdAt' => 'DESC'], 12)
        ]);
    }

    #[Route('/{id}', name: 'category_show')]
    public function show(ProductCategory $category, ProductRepository $productRepository): Response
    {
        return $this->render('product_category/show.html.twig', [
            'category' => $category,
            'products' => $productRepository->findBy(['category' => $category])
        ]);
    }
}
