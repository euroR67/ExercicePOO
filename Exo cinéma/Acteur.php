<?php 


    class Acteur extends Personne {
        private string $jouer;

        public function __construct(string $jouer) {
            $this->jouer = $jouer;
        }

        public function getJouer(){
            return $this->jouer;
        }

        public function setJouer($jouer){
            $this->jouer = $jouer;
        }
    }


?>