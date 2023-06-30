<?php 

    class Livre {
        private $livres;
        private $annee;
        private $nombreDePage;
        private $prix;

        public function __construct($livres,$annee,$nombreDePage,$prix){
            $this->livres = $livres;
            $this->annee = $annee;
            $this->nombreDePage = $nombreDePage;
            $this->prix = $prix;
        }

        public function getLivres() {
            return $this->livres;
        }

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

        public function infoLivre() {
            echo "{$this->livres} ({$this->annee}) : {$this->nombreDePage} pages / {$this->prix}€ <br>";
        }
    }

    $ca = new Livre("Ca", 1986 , 1138, 20);
    $simetierre = new Livre("simetierre", 1983 , 374, 15);
    $leFleau = new Livre("leFleau", 1978 , 823, 14);
    $Shining = new Livre("Shining", 1977 , 447, 16);

