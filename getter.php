<?php
class Vehicule {
    function demarrer(){
        return 'je me demarre ';
    }
}
//la class Voiture hérite celle de Vehicule
class Voiture extends Vehicule{
private $marque;
private $modele;
private $kilometrage;
private $annee;
//get et set 
function getMarque(){
    return $this->marque;
}
function setMarque($marque){
    $this->marque = $marque;
}

function getModele(){
    return $this->modele;
}
function setModele($modele){
    $this->modele = $modele;
}

function getKilometrage(){
    return $this->kilometrage;
}
function setKilometrage($kilometrage){
    $this->kilometrage = $kilometrage;
}

function getAnnee(){
    return $this->annee;
}
function setAnnee($annee){
    $this->annee = $annee;
}
//methode d'affichage des details de la voiture
function afficher(){
    return "Voici les details de ma  voiture: <br> marque: $this->marque <br>modele : $this->modele <br> vitesse de : $this->kilometrage <br> Annee pub : $this->annee <br> ";
}

function klaxonner(){
    return 'je klaxonne';
}
}

//instanciation de l'objet voiture
$voiture = new Voiture();
$voiture->setMarque('Mercedess');

$voiture->setModele('Q6');

$voiture->setKilometrage('250km/h');

$voiture->setAnnee('2023');


echo $voiture->afficher();
echo $voiture->demarrer();
echo $voiture->klaxonner();