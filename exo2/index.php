<?php

require_once 'Personnage.php';

$arthur = new Personnage('Arthur', 100, 20);
$merlin = new Personnage('Merlin', 100, 35);

// Affiche ces informations
echo "<p>{$arthur->affiche()}</p>";
echo "<p>{$merlin->affiche()}</p>";

// Ajoute des points de vie à notre personnage
// $arthur->soigner(20);
// echo "<p>Points de vie : {$arthur->getVie()}</p>";

// Vérifie si notre personnage est toujours vivant
// echo $arthur->enVie();

// Attaques
$arthur->faireAttaque($merlin);
$merlin->faireAttaque($arthur);

// Affiche ces informations
echo "<p>{$arthur->affiche()}</p>";
echo "<p>{$merlin->affiche()}</p>";

$merlin->faireAttaque($arthur);
$arthur->soigner(15);
$merlin->faireAttaque($arthur);

echo $arthur->enVie();
echo $merlin->enVie();