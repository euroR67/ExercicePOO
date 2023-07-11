<?php 


    class Realisateur extends Personne {
        private array $realisation = [];

        public function __construct(string $nom,string $prenom,string $sexe, string $dateNaissance) {
            parent::__construct($nom,$prenom,$sexe, $dateNaissance);
        }

        public function getRealisation(){
            return $this->realisation;
        }

        public function setRealisation(Film $film){
            array_push($this->realisation, $film);
        }

        public function __toString(){
            return $this->getNom() ." ". $this->getPrenom() ;
        }
        public function realisation(){
            echo "<br>Le réalisateur $this a réaliser les films suivants: ";
            foreach($this->realisation as $film){
                echo "$film, ";
            }
        }
    }


?>