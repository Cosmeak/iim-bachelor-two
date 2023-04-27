<?php

namespace App\Service;

use App\Entity\Order;
use App\Entity\OrderProduct;
use App\Repository\OrderProductRepository;
use App\Repository\OrderRepository;
use App\Repository\ProductRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class CartService
{
    protected RequestStack $requestStack;
    protected ProductRepository $productRepository;
    protected OrderRepository $orderRepository;
    protected OrderProductRepository $orderProductRepository;
    protected EntityManagerInterface $manager;

    public function __construct(RequestStack $requestStack, ProductRepository $productRepository, OrderRepository $orderRepository, OrderProductRepository $orderProductRepository, EntityManagerInterface $manager)
    {
        $this->requestStack = $requestStack;
        $this->productRepository = $productRepository;
        $this->orderRepository = $orderRepository;
        $this->orderProductRepository = $orderProductRepository;
        $this->manager = $manager;
    }

    // Get session
    private function getSession(): SessionInterface
    {
        return $this->requestStack->getSession();
    }

    /**
     * Get all data we have in the cart
     * @return array
     */
    public function get(): array
    {
        $cart = $this->getSession()->get('cart', []);
        $cartWithData = [];
        foreach ($cart as $id => $quantity) {
            $cartWithData[] = [
                'product' => $this->productRepository->find($id),
                'quantity' => $quantity,
            ];
        }
        return $cartWithData;
    }

    /**
     * Add Product in cart
     */
    public function add(int $id): void
    {
        $cart = $this->getSession()->get('cart', []);
        if(!empty($cart[$id])) {
            $cart[$id]++;
        }
        else {
            $cart[$id] = 1;
        }
        $this->getSession()->set('cart', $cart);
    }

    /**
     * Remove one Product in cart
     */
    public function remove(int $id): void
    {
        $cart = $this->getSession()->get('cart', []);
        if(!empty($cart[$id])) {
            $cart[$id]--;
        }
        else {
            unset($cart[$id]);
        }
        $this->getSession()->get('cart', $cart);
    }

    /**
     * Delete a product form cart
     */
    public function delete(int $id): void
    {
        $cart = $this->getSession()->get('cart', []);
        if(!empty($cart[$id])) {
            unset($cart[$id]);
        }
        $this->getSession()->get('cart', $cart);
    }

    /**
     * Delete all product from cart
     */
    public function deleteAll(): void
    {
        $this->getSession()->remove('cart');
    }

    /**
     * Get total
     * @param int $id
     * @return float|int
     */
    public function total(): float|int
    {
        $total = 0;
        foreach($this->get() as $item) {
            $totalProduct = $item['product']->getPrice() * $item['quantity'];
            $total += $totalProduct;
        }
        return $total;
    }

    /**
     * Confirm Order
     */
    public function confirmOrder($user): void
    {
        $cart = $this->getSession()->get('cart', []);
        $order = new Order();
        $order->setUser($user);
        $this->manager->persist($order);
        foreach($cart as $item => $quantity) {
            $product = $this->productRepository->find($item);
            $orderProduct = new OrderProduct();
            $orderProduct->setOrderRef($order);
            $orderProduct->setProduct($product);
            $orderProduct->setQuantity($quantity);
            $this->manager->persist($orderProduct);
        }
        $this->manager->flush();
        $this->getSession()->remove('cart');
    }
}