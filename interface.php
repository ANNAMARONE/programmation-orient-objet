<?php
//création de l'interface Reparable
interface Reparable {
    function reparer();
}


class Voiture implements Reparable {
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
        return "Voici les details de ma  voiture: <br> marque: $this->marque <br>modele : $this->modele <br> vitesse de : $this->kilometrage <br> Annee pub : $this->annee";
    }

    function reparer(){
     return 'I am the interface function';
    }
    }
    //instanciation de l'objet voiture
$voiture = new Voiture('Audi','Q6','250Km/h','2023');
echo $voiture->afficher();
echo '<br>';
echo $voiture->reparer();
