<?php

namespace App\Entity;

use App\Repository\RevuesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RevuesRepository::class)]
class Revues extends Document
{
    #[ORM\Column(type: 'date')]
    private $dateParution;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $rythme;

   

    public function getDateParution(): ?\DateTimeInterface
    {
        return $this->dateParution;
    }

    public function setDateParution(\DateTimeInterface $dateParution): self
    {
        $this->dateParution = $dateParution;

        return $this;
    }

    public function getRythme(): ?string
    {
        return $this->rythme;
    }

    public function setRythme(?string $rythme): self
    {
        $this->rythme = $rythme;

        return $this;
    }
}
