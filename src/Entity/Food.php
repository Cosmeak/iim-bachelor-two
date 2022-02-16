<?php

namespace App\Entity;

use App\Repository\FoodRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FoodRepository::class)]
class Food
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $label;

    #[ORM\Column(type: 'string', length: 255)]
    private $img;

    #[ORM\ManyToMany(targetEntity: Allergy::class, mappedBy: 'food')]
    private $allergies;

    public function __construct()
    {
        $this->allergies = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(string $label): self
    {
        $this->label = $label;

        return $this;
    }

    public function getImg(): ?string
    {
        return $this->img;
    }

    public function setImg(?string $img): self
    {
        $this->img = $img;

        return $this;
    }

    /**
     * @return Collection|Allergy[]
     */
    public function getAllergies(): Collection
    {
        return $this->allergies;
    }

    public function addAllergy(Allergy $allergy): self
    {
        if (!$this->allergies->contains($allergy)) {
            $this->allergies[] = $allergy;
            $allergy->addFood($this);
        }

        return $this;
    }

    public function removeAllergy(Allergy $allergy): self
    {
        if ($this->allergies->removeElement($allergy)) {
            $allergy->removeFood($this);
        }

        return $this;
    }

    public function __toString(): string
    {
        return $this->getLabel();
    }
}
