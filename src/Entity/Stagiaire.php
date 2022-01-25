<?php

namespace App\Entity;

use App\Repository\StagiaireRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StagiaireRepository::class)]
class Stagiaire
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 10)]
    private $id_stagiaire;

    #[ORM\Column(type: 'string', length: 10)]
    private $cin;

    #[ORM\Column(type: 'string', length: 20)]
    private $nom;

    #[ORM\Column(type: 'string', length: 20)]
    private $prenom;

    #[ORM\Column(type: 'string', length: 10)]
    private $sexe;

    #[ORM\Column(type: 'string', length: 30)]
    private $date_naiss;

    #[ORM\Column(type: 'string', length: 30)]
    private $email;

    #[ORM\Column(type: 'string', length: 20)]
    private $telephone;

    #[ORM\Column(type: 'string', length: 30)]
    private $qualite;

    #[ORM\OneToMany(mappedBy: 'cin', targetEntity: Absence::class)]
    private $absences;

    #[ORM\ManyToOne(targetEntity: Encadrant::class, inversedBy: 'stagiaires')]
    private $cin_enc;

    public function __construct()
    {
        $this->absences = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdStagiaire(): ?string
    {
        return $this->id_stagiaire;
    }

    public function setIdStagiaire(string $id_stagiaire): self
    {
        $this->id_stagiaire = $id_stagiaire;

        return $this;
    }

    public function getCin(): ?string
    {
        return $this->cin;
    }

    public function setCin(string $cin): self
    {
        $this->cin = $cin;

        return $this;
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

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getSexe(): ?string
    {
        return $this->sexe;
    }

    public function setSexe(string $sexe): self
    {
        $this->sexe = $sexe;

        return $this;
    }

    public function getDateNaiss(): ?string
    {
        return $this->date_naiss;
    }

    public function setDateNaiss(string $date_naiss): self
    {
        $this->date_naiss = $date_naiss;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getQualite(): ?string
    {
        return $this->qualite;
    }

    public function setQualite(string $qualite): self
    {
        $this->qualite = $qualite;

        return $this;
    }

}
