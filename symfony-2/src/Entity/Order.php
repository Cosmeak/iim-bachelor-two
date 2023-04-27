<?php

namespace App\Entity;

use App\Repository\OrderRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;


#[ORM\Entity(repositoryClass: OrderRepository::class)]
#[ORM\Table(name: '`order`')]

class Order
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'orders')]
    #[ORM\JoinColumn(nullable: false)]
    private $user;

    #[Gedmo\Timestampable(on: 'create')]
    #[ORM\Column(type: 'datetime')]
    private $createdAt;

    #[Gedmo\Timestampable(on: 'update')]
    #[ORM\Column(type: 'datetime')]
    private $updatedAt;

    #[ORM\OneToMany(mappedBy: 'orderRef', targetEntity: OrderProduct::class, cascade: ['remove', 'persist'], orphanRemoval: true)]
    private $products;

    public function __construct()
    {
        $this->products = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * @return Collection<int, OrderProduct>
     */
    public function getProducts(): Collection
    {
        return $this->products;
    }

    public function addProduct(OrderProduct $product): self
    {
        // For each product given check if it's the order and if it's update quantity for this product
        foreach ($this->getProducts() as $existingProduct) {
            if ($existingProduct->equals($product)) {
                $existingProduct->setQuantity($existingProduct->getQuantity() + $product->getQuantity());
            }
            return $this;
        }

        if (!$this->products->contains($product)) {
            $this->products[] = $product;
            $product->setOrderRef($this);
        }

        return $this;
    }

    public function removeProduct(OrderProduct $product): self
    {
        if ($this->products->removeElement($product)) {
            // set the owning side to null (unless already changed)
            if ($product->getOrderRef() === $this) {
                $product->setOrderRef(null);
            }
        }

        return $this;
    }

    /**
     * Calculate the order total price
     *
     * @return float|int
     */
    public function getTotal(): float|int
    {
        $total = 0;
        foreach($this->getProducts() as $product){
            $total += $product->getTotal();
        }
        return $total;
    }
}
