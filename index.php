<?php
include 'class/voiture.php';


//instanciation de l'objet voiture
$voiture = new Voiture('Audi','Q6','250Km/h','2023');
$voiture->setMarque('Mercedess');
$voiture->setModele('Q6');
$voiture->setKilometrage('250km/h');
$voiture->setAnnee('2023');

echo $voiture->afficher();
echo $voiture->demarrer();
echo '<br>';
echo $voiture->klaxonner();
echo $voiture->reparer();