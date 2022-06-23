<?php

namespace App\Entity;

use App\Repository\DocumentsFragilesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DocumentsFragilesRepository::class)]
class DocumentsFragiles extends Document
{
    #[ORM\Column(type: 'boolean')]
    private $empruntable;

    #[ORM\Column(type: 'boolean')]
    private $consultable;

    #[ORM\Column(type: 'boolean')]
    private $protege;

   

    public function isEmpruntable(): ?bool
    {
        return $this->empruntable;
    }

    public function setEmpruntable(bool $empruntable): self
    {
        $this->empruntable = $empruntable;

        return $this;
    }

    public function isConsultable(): ?bool
    {
        return $this->consultable;
    }

    public function setConsultable(bool $consultable): self
    {
        $this->consultable = $consultable;

        return $this;
    }

    public function isProtege(): ?bool
    {
        return $this->protege;
    }

    public function setProtege(bool $protege): self
    {
        $this->protege = $protege;

        return $this;
    }
}
