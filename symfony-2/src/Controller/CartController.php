<?php

namespace App\Controller;

use App\Service\CartService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/cart')]
class CartController extends AbstractController
{
    #[Route('/', name: 'app_cart')]
    public function index(CartService $cartService): Response
    {
        return $this->render('cart/index.html.twig', [ 'cart' => $cartService->get(), 'total' => $cartService->total() ]);
    }

    #[Route('/add/{id}', name: 'app_cart_add')]
    public function add(CartService $cartService, $id): Response
    {
        $cartService->add($id);
        return $this->redirectToRoute('app_cart');
    }

    #[Route('/remove/{id}', name: 'app_cart_remove')]
    public function remove(CartService $cartService, $id): Response
    {
        $cartService->remove($id);
        return $this->redirectToRoute('app_cart');
    }

    #[Route('/delete/{id}', name: 'app_cart_delete')]
    public function delete(CartService $cartService, $id): Response
    {
        $cartService->delete($id);
        return $this->redirectToRoute('app_cart');
    }

    #[Route('/delete/all', name: 'app_cart_deleteAll')]
    public function deleteAll(CartService $cartService): Response
    {
        $cartService->deleteAll();
        return $this->redirectToRoute('app_cart');
    }

    #[Route('/confirmOrder', name: 'app_cart_confirmOrder')]
    public function comfirmOrder(CartService $cartService): Response
    {
        $cartService->confirmOrder($this->getUser());
        return $this->redirectToRoute('home');
    }
}