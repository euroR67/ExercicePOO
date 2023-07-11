<?php

    class Personne {
        private string $nom;
        private string $prenom;
        private string $sexe;
        private DateTime $dateNaissance;


        public function __construct(string $nom, string $prenom, string $sexe, string $dateNaissance) {
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->sexe = $sexe;
            $this->dateNaissance = new DateTime($dateNaissance);
        }

        public function getNom(){
            return $this->nom;
        }

        public function setNom(string $nom){
            $this->nom = $nom;
        }

        public function getPrenom(){
            return $this->prenom;
        }

        public function setPrenom(string $prenom){
            $this->prenom = $prenom;
        }

        public function getSexe(){
            return $this->sexe;
        }

        public function setSexe(string $sexe){
            $this->sexe = $sexe;
        }

        public function getDateNaissance(){
            return $this->dateNaissance;
        }

        public function setDateNaissance(string $dateNaissance){
            $this->dateNaissance = new DateTime($dateNaissance);
        }
    }


?>