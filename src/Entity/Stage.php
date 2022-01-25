<?php

namespace App\Entity;

use App\Repository\StageRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StageRepository::class)]
class Stage
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 10)]
    private $id_stage;

    #[ORM\Column(type: 'string', length: 30)]
    private $titre_sujet_stage;

    #[ORM\Column(type: 'string', length: 60)]
    private $descriptionSuet;

    #[ORM\Column(type: 'date')]
    private $date_debut;

    #[ORM\Column(type: 'date')]
    private $date_fin;

    #[ORM\Column(type: 'string', length: 20)]
    private $etatAvancement;

    

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdStage(): ?string
    {
        return $this->id_stage;
    }

    public function setIdStage(string $id_stage): self
    {
        $this->id_stage = $id_stage;

        return $this;
    }

    public function getTitreSujetStage(): ?string
    {
        return $this->titre_sujet_stage;
    }

    public function setTitreSujetStage(string $titre_sujet_stage): self
    {
        $this->titre_sujet_stage = $titre_sujet_stage;

        return $this;
    }

    public function getDescriptionSuet(): ?string
    {
        return $this->descriptionSuet;
    }

    public function setDescriptionSuet(string $descriptionSuet): self
    {
        $this->descriptionSuet = $descriptionSuet;

        return $this;
    }

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->date_debut;
    }

    public function setDateDebut(\DateTimeInterface $date_debut): self
    {
        $this->date_debut = $date_debut;

        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->date_fin;
    }

    public function setDateFin(\DateTimeInterface $date_fin): self
    {
        $this->date_fin = $date_fin;

        return $this;
    }

    public function getEtatAvancement(): ?string
    {
        return $this->etatAvancement;
    }

    public function setEtatAvancement(string $etatAvancement): self
    {
        $this->etatAvancement = $etatAvancement;

        return $this;
    }

}
