<?php

namespace App\Controller;

use App\Entity\ProductCategory;
use App\Repository\ProductCategoryRepository;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/category')]
class ProductCategoryController extends AbstractController
{
    #[Route('/', name: 'category_index')]
    public function index(ProductCategoryRepository $categoryRepository): Response
    {
        return $this->render('product_category/index.html.twig', [
            'categories' => $categoryRepository->findAll(),
        ]);
    }

    #[Route('/{id}', name: 'category_show')]
    public function show(ProductCategory $category, Request $request, ProductRepository $productRepository): Response
    {

        if ($request->get('sortBy') && $request->get('sortBy') != 'Default') {
            $products = $productRepository->findBy(['category' => $category], ['price' => $request->get('sortBy')]);
        }
        else {
            $products = $category->getProducts()
;        }
        return $this->render('product_category/show.html.twig', [
            'category' => $category,
            'products' => $products,
            'sortBy' => $request->get('sortBy'),
        ]);
    }
}
