<?php

namespace App\Entity;

use App\Repository\EmpruntRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EmpruntRepository::class)]
class Emprunt
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'date')]
    private $dateEmprunt;

    #[ORM\Column(type: 'date')]
    private $dateLimite;

    #[ORM\Column(type: 'date')]
    private $dateRendu;

    #[ORM\Column(type: 'string', length: 255)]
    private $etatInitial;

    #[ORM\Column(type: 'string', length: 255)]
    private $etatRetour;

    #[ORM\Column(type: 'string', length: 255)]
    private $remarques;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateEmprunt(): ?\DateTimeInterface
    {
        return $this->dateEmprunt;
    }

    public function setDateEmprunt(\DateTimeInterface $dateEmprunt): self
    {
        $this->dateEmprunt = $dateEmprunt;

        return $this;
    }

    public function getDateLimite(): ?\DateTimeInterface
    {
        return $this->dateLimite;
    }

    public function setDateLimite(\DateTimeInterface $dateLimite): self
    {
        $this->dateLimite = $dateLimite;

        return $this;
    }

    public function getDateRendu(): ?\DateTimeInterface
    {
        return $this->dateRendu;
    }

    public function setDateRendu(\DateTimeInterface $dateRendu): self
    {
        $this->dateRendu = $dateRendu;

        return $this;
    }

    public function getEtatInitial(): ?string
    {
        return $this->etatInitial;
    }

    public function setEtatInitial(string $etatInitial): self
    {
        $this->etatInitial = $etatInitial;

        return $this;
    }

    public function getEtatRetour(): ?string
    {
        return $this->etatRetour;
    }

    public function setEtatRetour(string $etatRetour): self
    {
        $this->etatRetour = $etatRetour;

        return $this;
    }

    public function getRemarques(): ?string
    {
        return $this->remarques;
    }

    public function setRemarques(string $remarques): self
    {
        $this->remarques = $remarques;

        return $this;
    }
}
