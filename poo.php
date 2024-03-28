<?php
class Voiture extends vehicule{
public $marque;
public $modele;
public $kilometrage;
public $annee;
//methode d'affichage des details de la voiture
function __construct($marque,$modele,$kilometrage,$annee){
    $this->marque = $marque;
    $this->modele = $modele;
    $this->kilometrage = $kilometrage;
    $this->annee = $annee;
}
function afficher(){
    echo "Voici les details de ma  voiture: <br> marque: $this->marque <br>modele : $this->modele <br> vitesse de : $this->kilometrage <br> Annee pub : $this->annee <br>";
}
function klaxonner(){
    echo "la voiture de marque $this->marque et de modéle $this->modele klaxonne 'pêêêê' 'pêêêê' 'pêêêê'";
}
}
class vehicule {
    public function demarrrer(){
        echo "la vehicule démarre <br>";
    }
}
//instanciation de l'objet voiture

$voiture = new Voiture('Audi','Q6','250Km/h','2023');

$voiture->afficher();
$voiture->demarrrer();
$voiture->klaxonner();
?>