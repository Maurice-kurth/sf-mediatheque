<?php

namespace App\Entity;

use App\Repository\DocumentRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\InheritanceType;
use Doctrine\ORM\Mapping\DiscriminatorColumn;
use Doctrine\ORM\Mapping\DiscriminatorMap;

#[Entity(repositoryClass: DocumentRepository::class)]
#[InheritanceType("JOINED")]
#[DiscriminatorColumn(name:"discr", type:"string")]
#[DiscriminatorMap(["document" => "Document", "documentsfragiles" => "DocumentsFragiles","livres" => "Livres","cd" => "Cd","dvd"=>"Dvd","revues"=>"Revues"])]
class Document
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $nom;

    #[ORM\Column(type: 'string', length: 255)]
    private $type;

    #[ORM\Column(type: 'string', length: 255)]
    private $support;

    #[ORM\Column(type: 'boolean')]
    private $fragile;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $etat;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getSupport(): ?string
    {
        return $this->support;
    }

    public function setSupport(string $support): self
    {
        $this->support = $support;

        return $this;
    }

    public function isFragile(): ?bool
    {
        return $this->fragile;
    }

    public function setFragile(bool $fragile): self
    {
        $this->fragile = $fragile;

        return $this;
    }

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(?string $etat): self
    {
        $this->etat = $etat;

        return $this;
    }
}
