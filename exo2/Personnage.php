<?php

/**
 * Classe "Personnage"
 */
class Personnage
{
    private $vie;
    private $attaque;
    private $nom;

    /**
     * Constructeur
     * Hydratation des données
     */
    public function __construct($nom, $vie, $attaque)
    {
        $this->setNom($nom);
        $this->setVie($vie);
        $this->setAttaque($attaque);
    }

    /**
     * Get the value of vie
     */ 
    public function getVie()
    {
        return $this->vie;
    }

    /**
     * Set the value of vie
     *
     * @return  self
     */ 
    public function setVie($vie)
    {
        $this->vie = $vie;
    }

    /**
     * Get the value of attaque
     */ 
    public function getAttaque()
    {
        return $this->attaque;
    }

    /**
     * Set the value of attaque
     *
     * @return  self
     */ 
    public function setAttaque($attaque)
    {
        $this->attaque = $attaque;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * Vérifie si notre personnage est toujours vivant
     */
    public function enVie()
    {
        if ($this->vie <= 0) {
            return "{$this->getNom()} est mort...";
        }

        return "{$this->getNom()} est vivant !";
    }

    /**
     * Effectue une attaque sur un autre personnage.
     * Retire des points d'attaques sur les points de vie de l'autre personnage
     */
    public function faireAttaque($personnage)
    {
        // $personnage->vie = $personnage->getVie() - $this->getAttaque();
        $personnage->vie -= $this->getAttaque();
    }

    /**
     * Rajoute des points de vie ($qte), aux points de vie actuelle
     */
    public function soigner($qte)
    {
        // $vie = $this->getVie() + $qte;
        // $this->setVie($vie);

        $this->vie += $qte;
    }

    /**
     * Retourne toutes les informations du personnage dans une phrase 
     */
    public function affiche()
    {
        return "Mon personnage se nomme {$this->getNom()}, possède {$this->getVie()} points de vie et {$this->getAttaque()} points d'attaque";
    }
}