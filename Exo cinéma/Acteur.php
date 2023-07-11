<?php 


    class Acteur extends Personne {
        private array $jouer = [];

        public function __construct(string $nom,string $prenom,string $sexe, string $naissance) {
            parent::__construct($nom,$prenom,$sexe ,$naissance);
        }

        public function getJouer(){
            return $this->jouer;
        }

        public function setJouer(Jouer $jouer) {
            array_push($this->jouer,$jouer);
        }

        public function __toString(){
            return $this->getNom() ." ". $this->getPrenom() ;
        }

        public function filmographie(){
            echo "l'acteur $this a jouer dans les films : ";
            foreach ($this->jouer as $jouer){
                echo $jouer->getFilm().", <br><br>";
            }
        }
    }


?>