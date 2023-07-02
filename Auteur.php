<?php
    // Création de la class Auteurs
    class Auteurs {
        private $nom;
        private $prenom;

        // Initialisation des propriétés de class la Auteurs avec "__construct";
        public function __construct($nom,$prenom) {
            $this->nom = $nom;
            $this->prenom = $prenom;
        }

        // pour accéder au propriétés privées $nom de la classe
        public function getNom() {
            return $this-> nom;
        }

        // pour définir la valeur de la propriétés $nom privées
        public function setNom() {
            $this-> nom = $nom;
        }

        public function getPrenom() {
            return $this-> prenom;
        }

        public function setPrenom() {
            $this-> prenom = $prenom;
        }

        // Obtient une représentation textuelle de l'objet Auteurs
        public function toString() {
            return "{$this->nom} {$this->prenom}";
        }

        // Pour afficher la biography de l'auteur
        public function biographyAuteur() {
            echo "<h3>Livres de {$this->toString()} :</h3>";
        }        
    }
?>