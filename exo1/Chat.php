<?php

class Chat
{
    private $prenom;
    private $age;
    private $couleur;
    private $sexe;
    private $race;


public function __construct($prenom, $age, $couleur, $sexe, $race)
    {   
        $this->setPrenom($prenom);
        $this->setAge($age);
        $this->setCouleur($couleur);
        $this->setSexe($sexe);
        $this->setRace($race);
    }
// Prenom
    public function setPrenom($value) 
    {
        if(is_string($value))
        {
            $this->prenom = $value; 
        }
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

// Age
    public function setAge($value)
    {
        if(is_int($value))
        {
            $this->age = $value; 
        }else{
            echo "nbr entier";
        }
    }
    public function getAge()
    {
        return $this->age;
    }

// Couleur
    public function setCouleur($value) 
    {
        if(is_string($value))
        {
            $this->couleur = $value; 
        }
    }

    public function getCouleur()
    {
        return $this->couleur;
    }

//Sexe
    public function setSexe($value) 
    {
        if(is_string($value))
        {
            $this->sexe = $value; 
        }
    }

    public function getSexe()
    {
        return $this->sexe;
    }

//Race
    public function setRace($value) 
    {
        if(is_string($value))
        {
            $this->race = $value; 
        }
    }

    public function getRace()
    {
        return $this->race;
    }

    /**
     * Retourne les valeurs des chats sous forme de tableau
     */
    public function getInfos()
    {
        $table = 
        "<table>
            <tr>
                <th>Prénom</th>
                <th>Age</th>
                <th>Couleur</th>
                <th>Sexe</th>
                <th>Race</th>
            </tr>
            <tr>
                <td>{$this->getPrenom()}</td>
                <td>{$this->getAge()}</td>
                <td>{$this->getCouleur()}</td>
                <td>{$this->getSexe()}</td>
                <td>{$this->getRace()}</td>
            </tr>
        </table>";

        return $table;
    }

}

?>