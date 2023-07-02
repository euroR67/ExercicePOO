<?php

    class Titulaire {
        private string $nom;
        private string $prenom;
        private DateTime $date;
        private string $ville;
        private array $comptes = [];

        public function __construct(string $nom,string $prenom,string $date,string $ville) {
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->date = new DateTime ("$date");
            $this->ville = $ville;
        }

        public function getNom(){
            return $this-> nom;
        }

        public function setNom(){
            $this-> nom = $nom;
        }

        public function getPrenom(){
            return $this-> prenom;
        }

        public function setPrenom(){
            $this-> prenom = $prenom;
        }

        public function getDate(){
            return $this-> date;
        }

        public function setDate(){
            $this-> date = $date;
        }

        public function getVille(){
            return $this-> ville;
        }

        public function setVille(){
            $this-> ville = $ville;
        }

        public function getLivre() {
            return $this-> comptes;
        }

        public function getCompte() {
            return $this-> comptes;
        }

        public function setCompte(Compte $comptes) {
            array_push($this->comptes,$comptes);
        }

        public function __toString() {
            return "{$this->nom} {$this->prenom}";
        }

        public function getAge() {
            $now = date_create();
            return $this->date->diff($now)->y;
        }
        

        public function afficherTitulaire() {
            echo "<h3>Information du client</h3> <br>Nom et prénom : ".$this ." <br>  Age : " .$this->getAge() . "<br>Date de naissance: " . $this->date->format('d-m-Y')."<br>";
            
            foreach ($this->comptes as $comptes) {
                echo "$comptes<br>";
            }
        }
    }