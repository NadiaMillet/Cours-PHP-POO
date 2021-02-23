<?php

//($prenom, $age, $couleur, $sexe, $race)
require_once 'Chat.php';
$jean = new Chat("Maki", 2.5, "Blanc", "Mâle", "Angora");
$titou = new Chat("Titou", 4, "Blanc et gris", "Mâle", "Inconnue");


var_dump($jean, $titou);

echo $titou->getInfos();


?>


