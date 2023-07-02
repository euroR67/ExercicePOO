<?php 

    class Livre {
        private $livres;
        private $annee;
        private $nombreDePage;
        private $prix;

        // Initialisation des propriétés de class la Livre avec "__construct";
        public function __construct($livres,$annee,$nombreDePage,$prix){
            $this->livres = $livres;
            $this->annee = $annee;
            $this->nombreDePage = $nombreDePage;
            $this->prix = $prix;
        }

        // pour accéder au propriétés privées $livres de la classe
        public function getLivres() {
            return $this->livres;
        }

        // pour définir la valeur de la propriétés $livres privées
        public function setLivres() {
            $this->livres = $livres;
        }

        
        public function getAnnee() {
            return $this->annee;
        }
        
        public function setAnnee() {
            $this->annee = $annee;
        }
        
        public function getNombreDePage() {
            return $this->getNombreDePage;
        }

        public function setNombreDePage() {
            $this->getNombreDePage = $nombreDePage;
        }

        public function getPrix() {
            return $this->annee;
        }

        public function setPrix() {
            $this->prix = $prix;
        }

        // Obtient une représentation textuelle de l'objet Livre
        public function toString() {
            return "{$this->livres} ({$this->annee}) : {$this->nombreDePage} pages / {$this->prix}€";
        }

        // Affichage des informations de livres
        public function infoLivre() {
            echo "{$this->toString()} <br>";
        }
    }