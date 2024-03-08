<?php
namespace App\Banque;
/**
 * Objet Compte bancaire
 */
abstract class Compte {
    //Propriétés
    /**
     * Titulaire du compte
     * @var string
     */
    private string $titulaire;

    /**
     * Solde du compte
     * @var float
     */
    protected float $solde;
    
    //Constantes (En maj) et underscore)

/**
 * Constructeur du compte bancaire
 *
 * @param string $nom Nom du titulaire 
 * @param float $montant Montant du solde à l'ouverture
 */
    public function __construct(string $nom, float $montant = 100) //Normalement les noms ne diffèrent pas
    { //Précision de la valeur si cela n'est pas spécifié
        //On attribue le nom à la propriété titulaire de l'instance crée
        $this->titulaire = $nom;

        //Attriburion du montant à solde
        $this->solde = $montant;
    }
/**
 * Méthode magique pour la conversion en chaîne de caractères
 *
 * @return string
 */
    public function __toString(){
        return "Vous visualisez le compte de $this->titulaire, le solde est de $this->solde euros";
    }
    
    //Accesseurs (Getter et Setter)
    /**
     * Getter de Titulaire - Retourne la valeur du titulaire du compte
     *
     * @return string
     */
    public function getTitulaire(): string
    { 
        return $this->titulaire;
    }

    public function setTitulaire(string $nom): self //Possible avec void mais self c'est pour le statique
    {
        if($nom != "") {
        $this->titulaire = $nom;
        }
        return $this;
    }

    /**
     * Retourne le solde du compte
     *
     * @return float Solde du compte
     */
    public function getSolde():float
    {
        return $this->solde;
    }

    /**
     * Modifie le solde du compte
     *
     * @param float $montant Montant du solde
     * @return self 
     */
    public function setSolde(float $montant): self 
    {
        if($montant >= 0) {
            $this->solde = $montant;
    }
    return $this;
    }


    /**
     * Déposer de l'argent sur le compte
     *
     * @param float $montant Montant déposé
     * @return void
     */
    public function deposer($montant)
    {
        //Vérification si montant est positif (Protection contre les dépôts négatifs)
        if($montant > 0){
            $this->solde += $montant;
    }
    }
    /**
     * Retourne une chaine de caractères affichant le solde
     *
     * @return string
     */
    public function voirSolde()
        {
            return "Le solde du compte est de $this->solde euros";
        }

        /**
         * Retire un montant du solde du compte
         *
         * @param float $montant Montant à retirer
         * @return void
         */
    public function retirer(float $montant)
        {
        //Vérification du montant et du solde
        if($montant > 0 && $this->solde >= $montant) {
            $this->solde -= $montant;
        }else{
            echo "Montant invalide ou solde insuffisant";
        }  
    }
}