<?php

    
class Personne {
    private string $nom; // Propriété privée pour stocker le nom de la personne
    private string $prenom; // Propriété privée pour stocker le prénom de la personne
    private string $sexe; // Propriété privée pour stocker le sexe de la personne
    private DateTime $dateNaissance; // Propriété privée pour stocker la date de naissance de la personne

    // Constructeur de la classe Personne
    public function __construct(string $nom, string $prenom, string $sexe, string $dateNaissance) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->sexe = $sexe;
        $this->dateNaissance = new DateTime($dateNaissance);
    }

    // Méthode pour obtenir le nom de la personne
    public function getNom(){
        return $this->nom; 
    }

    // Méthode pour définir le nom de la personne
    public function setNom(string $nom){ 
        $this->nom = $nom;  
    }

    // Méthode pour obtenir le prénom de la personne
    public function getPrenom(){
        return $this->prenom;
    }

    // Méthode pour définir le prénom de la personne
    public function setPrenom(string $prenom){ 
        $this->prenom = $prenom;
    }

    // Méthode pour obtenir le sexe de la personne
    public function getSexe(){
        return $this->sexe;
    }

    // Méthode pour définir le sexe de la personne
    public function setSexe(string $sexe){
        $this->sexe = $sexe;
    }

    // Méthode pour obtenir la date de naissance de la personne
    public function getDateNaissance(){
        return $this->dateNaissance;
    }

    // Méthode pour définir la date de naissance de la personne
    public function setDateNaissance(string $dateNaissance){
        $this->dateNaissance = new DateTime($dateNaissance);
    }
}



?>