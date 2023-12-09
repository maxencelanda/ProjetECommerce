<?php

namespace App\Entity;

use App\Repository\ComposeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ComposeRepository::class)]
class Compose
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?Product $id_product = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?Ingredient $id_ingredient = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdProduct(): ?Product
    {
        return $this->id_product;
    }

    public function setIdProduct(Product $id_product): static
    {
        $this->id_product = $id_product;

        return $this;
    }

    public function getIdIngredient(): ?Ingredient
    {
        return $this->id_ingredient;
    }

    public function setIdIngredient(Ingredient $id_ingredient): static
    {
        $this->id_ingredient = $id_ingredient;

        return $this;
    }
}
