<?php
class Vehicule {
    function demarrer(){
        return 'je me demarre ';
    }
}
//la class Voiture hérite celle de Vehicule
class Voiture extends Vehicule{
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
    return "Voici les details de ma  voiture: <br> marque: $this->marque <br>modele : $this->modele <br> vitesse de : $this->kilometrage <br> Annee pub : $this->annee <br> ";
}
function klaxonner(){
    return 'je klaxonne';
}
}

//instanciation de l'objet voiture
$voiture = new Voiture('Audi','Q6','250Km/h','2023');
echo $voiture->afficher();
echo $voiture->demarrer();
echo $voiture->klaxonner();