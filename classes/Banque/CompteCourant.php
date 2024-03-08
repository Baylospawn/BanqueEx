<?php 
namespace App\Banque;

/**
 * Compte bancaire (hérite de Compte)
 */
class CompteCourant extends Compte
{
    private $decouvert;

    /**
     * Constructeur de compte courant
     *
     * @param string $nom Nom du titulaire 
     * @param float $montant Montant du solde à l'ouverture
     * @param integer $decouvert Decouvert autorisé
     * @return void
     */
    public function __construct(string $nom, float $montant, int $decouvert)
    {
        // On transfère les informations nécessaires au constructeur de Compte
        parent::__construct($nom, $montant);
        $this->decouvert = $decouvert;
    }

    /**
     * Get the value of decouvert
     */ 
    public function getDecouvert():int
    {
        return $this->decouvert;
    }

    /**
     * Set the value of decouvert
     *
     * @return  self
     */ 
    public function setDecouvert(int $montant):self
    {
        if ($montant > 0) {
        $this->decouvert = $montant;
        }
        return $this;
    }
    public function retirer(float $montant)
    {
        if($montant > 0 && $this->solde >= -$this->decouvert) {
            $this->solde -= $montant;
        }else{
            echo "Solde insuffisant";
        }  
    }
}