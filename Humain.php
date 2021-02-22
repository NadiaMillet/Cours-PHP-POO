<?php

class Humain
{

    /*Toujours déclarer les propriété en privé pour la sécurisation = encapsuler les données*/
    private $taille;
    private $poids;

    /** CONSTRUCTEUR 
     * Appelé automatiquement à l'instanciation de la class. Permet une hydratation plus simple dans index.php > $jean = new Humain (1.85>$taille, 80>$poids)
    */
    public function __construct($taille, $poids)
    {   
        $this->setTaille($taille);
        $this->setPoids($poids);
    }

    /** SETTER
     * Permet d'affecter une valeur à notre propriété $taille
     */
    public function setTaille($value) /** Convention de commencer par le setter et de l'évrire "setNomVariable" */
    {
        if(is_numeric($value))
        {
            //$taille = $value; // se trouvant dans un bloc de code et est en local dans la fonction, $taille ligne 14 ne sera pas $taille ligne 6. Pour reprendre $taille ligne 6 on ajoute la variable $this-> comme ci dessous
            $this->taille = $value; 
        }
    }
    /** GETTER
     * Retourne la valeur de notre prpo $taille
     */
    public function getTaille()
    {
        return $this->taille;
    }

    public function setPoids($value)
    {
        if(is_numeric($value))
        {
            $this->poids = $value; 
        }
    }
    public function getPoids()
    {
        return $this->poids;
    }
}


?>