<?php

namespace App\Entity;

use PhpParser\Node\Expr\Cast\String_;

class PropertySearch
{
    private $nom;

    public function getNom():String
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }
}