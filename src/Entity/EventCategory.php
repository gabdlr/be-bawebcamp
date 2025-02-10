<?php

namespace App\Entity;

use App\Repository\EventCategoryRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EventCategoryRepository::class)]
class EventCategory
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $name = null;

    #[ORM\Column(length: 25)]
    private ?string $icon = null;

    #[ORM\Column(nullable: true)]
    private ?int $lastEdited = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getIcon(): ?string
    {
        return $this->icon;
    }

    public function setIcon(string $icon): static
    {
        $this->icon = $icon;

        return $this;
    }

    public function getLastEdited(): ?int
    {
        return $this->lastEdited;
    }

    public function setLastEdited(?int $lastEdited): static
    {
        $this->lastEdited = $lastEdited;

        return $this;
    }
}
