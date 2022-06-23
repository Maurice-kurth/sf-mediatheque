<?php

namespace App\Entity;

use App\Repository\AdherentsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AdherentsRepository::class)]
class Adherents extends User
{
    #[ORM\Column(type: 'integer')]
    private $nbEmpruntsActifs;

    #[ORM\Column(type: 'integer')]
    private $nbEmpruntsMax;

 
    public function getNbEmpruntsActifs(): ?int
    {
        return $this->nbEmpruntsActifs;
    }

    public function setNbEmpruntsActifs(int $nbEmpruntsActifs): self
    {
        $this->nbEmpruntsActifs = $nbEmpruntsActifs;

        return $this;
    }

    public function getNbEmpruntsMax(): ?int
    {
        return $this->nbEmpruntsMax;
    }

    public function setNbEmpruntsMax(int $nbEmpruntsMax): self
    {
        $this->nbEmpruntsMax = $nbEmpruntsMax;

        return $this;
    }
}
