<!-- CODE EQUIPES -->

<?php

class Equipe{ // Déclarer la CLASS "Equipes" - pour lister les équipes
   // Déclarer les ATTRIBUTS de la "class"
   private string $_paysEquipe;
   private string $_nomEquipe;
   private array $_joueurs;


// __construct pour INIATILIASER "chaque" attributs pour "chaque" équipe
public function __construct($paysEquipe, $nomEquipe){
    $this -> _paysEquipe = $paysEquipe;
    $this -> _nomEquipe = $nomEquipe;
    $this -> _joueurs = array(); // INITIALISER le tableau des joueurs
    $joueur -> ajouterJoueur($this); // Pour ajouter un joueur à une équipe
}

//GETTERS
public function getPayEquipe(){
    return $this -> _paysEquipe;
}
public function getNomEquipe(){
    return $this -> _nomEquipe;
}
public function getJoueurs(){
    return $this -> _joueurs;
}

//  Méthode pour AJOUTER un joueur à une équipe
public function ajouterJoueur(){ // AJouter dans un tableau vide "()"
    // $this -> _joueurs[] = $joueur;
}

//Méthode pour AFFICHER équipe(s) du joueur
public function afficherJoueurs(){
    echo "Equipe(s) de " . $this -> _nomEquipe . " Joueurs : ";
    foreach ($this -> _joueurs as $joueur)
    echo "- " . $joueur -> getPrenom() . " " . $joueur -> getNom() . " (" . $joueur -> getPaysOrigine() . ")";
}
}



