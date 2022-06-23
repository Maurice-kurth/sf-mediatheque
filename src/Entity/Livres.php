<?php

namespace App\Entity;

use App\Repository\LivresRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LivresRepository::class)]
class Livres extends Document
{
    #[ORM\Column(type: 'string', length: 255)]
    private $isbn;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $editeur;

    #[ORM\ManyToOne(targetEntity: Artistes::class, inversedBy: 'livres')]
    #[ORM\JoinColumn(nullable: false)]
    private $auteur;


    public function getIsbn(): ?string
    {
        return $this->isbn;
    }

    public function setIsbn(string $isbn): self
    {
        $this->isbn = $isbn;

        return $this;
    }

    public function getEditeur(): ?string
    {
        return $this->editeur;
    }

    public function setEditeur(?string $editeur): self
    {
        $this->editeur = $editeur;

        return $this;
    }

    public function getAuteur(): ?Artistes
    {
        return $this->auteur;
    }

    public function setAuteur(?Artistes $auteur): self
    {
        $this->auteur = $auteur;

        return $this;
    }
}
