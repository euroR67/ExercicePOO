<?php 

    class Compte {
        private string $libelle;
        private float $soldeInitial = 0;
        private string $devise;
        private Titulaire $titulaire;

        public function __construct($libelle,$soldeInitial,$devise,Titulaire $titulaire) {
            $this->libelle = $libelle;
            $this->soldeInitial = $soldeInitial;
            $this->devise = $devise;
            $this->titulaire = $titulaire;
            $titulaire->setCompte($this);
        }

        public function getLibelle(){
            return $this-> libelle;
        }

        public function setLibelle(){
            $this-> libelle = $libelle;
        }

        public function getSolde(){
            return $this-> soldeInitial;
        }

        public function setSolde(){
            $this-> soldeInitial = $soldeInitial;
        }

        public function getDevise(){
            return $this-> devise;
        }

        public function setDevise(){
            $this-> devise = $devise;
        }

        public function __toString() {
            return $this->libelle;
        }

        public function getSoldeInitial() {
            return $this->$soldeInitial;
        }

        public function virement(Compte $compte,float $sommes) {
            $this->soldeInitial -= $sommes;
            $compte->soldeInitial += $sommes;
        }

        public function crediter($solde) {
            $this->$soldeInitial += $solde;
            echo "Le solde de votre {$this->libelle} est crédité de {$this->$solde}<br>";
        }

        public function debiter($solde) {
            $this->$soldeInitial -= $solde;
            echo "Le solde de votre {$this->libelle} est débité de {$this->$solde}<br>";
        }

        public function infoCompte() {
            echo "$this <br>";
        }
    }
