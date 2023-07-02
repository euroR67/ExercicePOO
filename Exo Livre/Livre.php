<?php 

    class Livre {
        private $livres;
        private $annee;
        private $nombreDePage;
        private $prix;
        private Auteurs $auteur;

        // Initialisation des propriétés de class la Livre avec "__construct";
        public function __construct($livres,$annee,$nombreDePage,$prix,Auteurs $auteur){
            $this->livres = $livres;
            $this->annee = $annee;
            $this->nombreDePage = $nombreDePage;
            $this->prix = $prix;
            $this->auteur = $auteur;
            $auteur->setLivre($this);
        }

        // pour accéder au propriétés privées $livres de la classe
        public function getLivres() {
            return $this->livres;
        }

        public function getAnnee() {
            return $this->annee;
        }
        
        public function getNombreDePage() {
            return $this->getNombreDePage;
        }

        public function getPrix() {
            return $this->annee;
        }

        public function getAuteur() {
            return $this->auteur;
        }

        // Obtient une représentation textuelle de l'objet Livre
        public function __toString() {
            return "{$this->livres} ({$this->annee}) : {$this->nombreDePage} pages / {$this->prix}€";
        }

        // Affichage des informations de livres
        public function infoLivre() {
            echo "$this <br>";
        }
    }