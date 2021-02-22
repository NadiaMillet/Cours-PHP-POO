<?php

/* test de notre classe php humain */

// Inclusion de ma classe php
require_once 'Humain.php';
/** Quatre possibiltés d'inclusion d'un fichier
 * 
 * // Erreyr de type warning, mais continue à exécuter le code = si erreur sur l'appel de la class le reste du code sera en erreur vu que la class ne sera pas retrouvée = du mal à savoir quelle erreur pose pb
 * include
 * include_onde
 * 
 * // Erreur de type fatal et stop le code, permet d'identifier l'erreur qui fait tout crasher
 * require
 * require_once
 */
$jean = new Humain(1.85,80);
$jane = new Humain(1.70,60);
$georges = new Humain(1.23,25);

/* Ancienne façon de faire sans la sécurisation private et funcion SETTER et GETTER
$jean->taille = 1.85;
$jane->taille = 1.61;
$georges->taille = 1.23;

$jean->poids = 80;
$jane->poids = 60;
$georges->poids = 23;
*/

/* Appeler nos prop avec sécurisation, remplacer par ligne 17.18.19 grâce à la fonction construct 
$jean->setTaille(1.85);
$jean->setPoids(80);

$jane->setTaille(1.70);
$jane->setPoids(60);

$georges->setTaille(1.23);
$georges->setPoids(25);
*/
var_dump($jean, $jane, $georges );


echo "<p>Jean mesure {$jean->getTaille()}m et pèse {$jean->getPoids()}kg <p>";
echo "<p>Jane mesure {$jane->getTaille()}m et pèse {$jane->getPoids()}kg <p>";
echo "<p>Georges mesure {$georges->getTaille()}m et pèse {$georges->getPoids()}kg<p>";




?>