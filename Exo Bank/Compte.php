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

        public function setDevise($devise){
            $this-> devise = $devise;
        }

        public function __toString() {
            return $this->libelle;
        }

        public function getSoldeInitial() {
            return $this->$soldeInitial;
        }

        public function virement(Compte $compte, float $somme) {
            if ($somme <= $this->soldeInitial) {
                $this->soldeInitial -= $somme;
                $compte->soldeInitial += $somme;
                echo "Virement de {$somme} € effectué depuis le compte {$this->libelle} vers le compte {$compte->getLibelle()}<br>";
            } else {
                echo "Le solde du compte {$this->libelle} est insuffisant pour effectuer ce virement.<br>";
            }
        }
        

        public function crediter($solde) {
            $this->soldeInitial += $solde;
            echo "Le solde de votre {$this->libelle} est crédité de {$solde} €<br>";
        }

        public function debiter($solde) {
            if ($this->soldeInitial >= $solde) {
                $this->soldeInitial -= $solde;
                echo "Le solde de votre {$this->libelle} est débité de {$solde}<br>";
            } else {
                echo "Solde insuffisant pour effectuer le débit sur {$this->libelle}<br>";
            }
        }        
    }