<?php

namespace App\Entity;

use App\Repository\EventRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EventRepository::class)]
class Event
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $name = null;

    #[ORM\Column]
    private ?int $date = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?EventCategory $categoryId = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?Guest $guestId = null;

    #[ORM\Column(length: 10, nullable: true)]
    private ?string $key = null;

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

    public function getDate(): ?int
    {
        return $this->date;
    }

    public function setDate(int $date): static
    {
        $this->date = $date;

        return $this;
    }

    public function getCategoryId(): ?EventCategory
    {
        return $this->categoryId;
    }

    public function setCategoryId(EventCategory $categoryId): static
    {
        $this->categoryId = $categoryId;

        return $this;
    }

    public function getGuestId(): ?Guest
    {
        return $this->guestId;
    }

    public function setGuestId(Guest $guestId): static
    {
        $this->guestId = $guestId;

        return $this;
    }

    public function getKey(): ?string
    {
        return $this->key;
    }

    public function setKey(?string $key): static
    {
        $this->key = $key;

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
