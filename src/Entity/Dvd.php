<?php

namespace App\Entity;

use App\Repository\DvdRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DvdRepository::class)]
class Dvd extends Document
{
    #[ORM\Column(type: 'string', length: 255)]
    private $realisateur;

    #[ORM\Column(type: 'date')]
    private $dateSortie;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $languesAudio;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $languesSousTitres;

    

    public function getRealisateur(): ?string
    {
        return $this->realisateur;
    }

    public function setRealisateur(string $realisateur): self
    {
        $this->realisateur = $realisateur;

        return $this;
    }

    public function getDateSortie(): ?\DateTimeInterface
    {
        return $this->dateSortie;
    }

    public function setDateSortie(\DateTimeInterface $dateSortie): self
    {
        $this->dateSortie = $dateSortie;

        return $this;
    }

    public function getLanguesAudio(): ?string
    {
        return $this->languesAudio;
    }

    public function setLanguesAudio(?string $languesAudio): self
    {
        $this->languesAudio = $languesAudio;

        return $this;
    }

    public function getLanguesSousTitres(): ?string
    {
        return $this->languesSousTitres;
    }

    public function setLanguesSousTitres(?string $languesSousTitres): self
    {
        $this->languesSousTitres = $languesSousTitres;

        return $this;
    }
}
