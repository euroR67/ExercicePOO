<?php

    class Auteurs {
        private $nom;
        private $prenom;
        private $nombreLivres;
        private $dateDeNaissance;
        private $lieuDeNaissance;

        public function __construct($nom,$prenom,$nombreLivres,$dateDeNaissance,$lieuDeNaissance) {
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->nombreLivres = $nombreLivres;
            $this->dateDeNaissance = $dateDeNaissance;
            $this->lieuDeNaissance = $lieuDeNaissance;
        }

        public function getNom() {
            return $this-> nom;
        }

        public function setNom() {
            $this-> nom = $nom;
        }

        public function getPrenom() {
            return $this-> prenom;
        }

        public function setPrenom() {
            $this-> prenom = $prenom;
        }

        public function getNombreLivres() {
            return $this-> nombreLivres;
        }

        public function setNombreLivres() {
            $this-> nombreLivres = $nombreLivres;
        }

        public function getDateDeNaissance() {
            return $this-> dateDeNaissance;
        }

        public function setDateDeNaissance() {
            $this-> dateDeNaissance = $dateDeNaissance;
        }

        public function getLieuDeNaissance() {
            return $this-> lieuDeNaissance;
        }

        public function setLieuDeNaissance() {
            $this-> lieuDeNaissance = $lieuDeNaissance;
        }

        public function biographyAuteur() {
            echo "A propos de {$this->nom} {$this->prenom} :<br>
            née le {$this->dateDeNaissance} à {$this->lieuDeNaissance}<br>
            Nombre de livres réaliser : {$this->nombreLivres}";
        }
    }
?>