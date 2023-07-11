<?php 


    class Role {
        private string $personnage;
        private array $jouer = [];

        public function __construct(string $personnage) {
            $this->personnage = $personnage;
        }

        public function getPersonnage(){
            return $this->personnage;
        }

        public function setPersonnage(string $personnage){
            $this->personnage = $personnage;
        }

        public function getJouers(){
            return $this->jouer;
        }
        public function setJouer(Jouer $jouer){
            array_push($this->jouer,$jouer);
        }
        public function incarnation(){
            echo "les acteurs ayant joué le rôle de $this : "; 
            foreach ($this->jouer as $jouer){
                echo $jouer->getActeur().", ";
            }
        }
        public function __toString(){
            return $this->personnage;
        }
    }


?>