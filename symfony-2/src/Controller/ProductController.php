<?php

namespace App\Controller;

use App\Entity\Product;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/product')]
class ProductController extends AbstractController
{
    #[Route('/', name: 'product_index')]
    public function index(ProductRepository $productRepository): Response
    {
        return $this->render('product/index.html.twig', [
            'products' => $productRepository->findAll(),
        ]);
    }

    #[Route('/{id}', name: 'product_show')]
    public function show(Product $product, ProductRepository $productRepository): Response
    {
        return $this->render('product/show.html.twig', [
            'product' => $product,
            'similarProducts' => $productRepository->findBy(['category' => $product->getCategory()], [], 4)
        ]);
    }
}
