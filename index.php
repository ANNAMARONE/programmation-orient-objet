<?php
//Définissez une interface Reparable avec une méthode reparer()
interface IReparable{
    public function reparer();
}
//Définissez une classe Voiture avec quelques propriétés 
class Voiture extends vehicule implements IReparable{
private $marque;
private $modele;
private $kilometrage;
private $annee;
//methode d'affichage des details de la voiture
function __construct($marque,$modele,$kilometrage,$annee){
    $this->marque = $marque;
    $this->modele = $modele;
    $this->kilometrage = $kilometrage;
    $this->annee = $annee;
}
public function afficher(){
    echo "Voici les details de ma  voiture: <br> marque: $this->marque <br>modele : $this->modele <br> vitesse de : $this->kilometrage <br> Annee pub : $this->annee <br>";
}
// Ajoutez une méthode spécifique à la classe Voiture appelée klaxonner() 
public function klaxonner(){
    echo "la voiture de marque $this->marque et de modéle $this->modele klaxonne 'pêêêê' 'pêêêê' 'pêêêê'<br>";
}
// ajoutez des méthodes comme getMarque() 
public function getMarque(){
  return $this->marque;
}
// ajoutez des méthodes comme setMarque() 
Public function setMarque($nouvelleMarque){
if(is_string($nouvelleMarque)){
    $this->marque=$nouvelleMarque;
}
}
//Définissez une interface Reparable avec une méthode reparer()
function reparer(){
    echo"la voiture de marque $this->marque et de modéle $this->modele a été reparer <br>";
}
}
// Créez une classe Vehicule parenté avec une méthode demarrer()
class vehicule   {
    // méthode demarrer() 
function reparer(){}
    public function demarrrer(){
        echo "la vehicule démarre <br>";
    }
}
$voiture = new Voiture('Audi','Q6','250Km/h','2023');
$voiture->setMarque("toyota");

$voiture->afficher();
    
$voiture->klaxonner();
//              l'interface
$voiture->reparer();

// Utilisez l'héritage pour faire en sorte que la classe Moto hérite de la classe Vehicule
class moto extends vehicule{
   public $marque;
   public $modele;
   public $autonomie;
  function __construct($marque,$modele,$autonomie){
    $this->marque = $marque;
    $this->modele = $modele;
    $this->autonomie=$autonomie;
     
  }
  function MotoElectrique(){
    echo "L'autonomie de la $this->marque  $this->modele  est de  $this->autonomie  km.";
}
}
//instanciation de l'objet voiture
$ma_moto = new moto('Energica', 'Ego', 400);
// Affichage de l'autonomie de la moto
$ma_moto->MotoElectrique();

?>