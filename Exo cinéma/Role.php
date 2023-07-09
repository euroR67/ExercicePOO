<?php 


    class Role {
        private string $personnage;

        public function __construct(string $personnage) {
            $this->personnage = $personnage;
        }

        public function getPersonnage(){
            return $this->personnage;
        }

        public function setPersonnage($personnage){
            $this->personnage = $personnage;
        }
    }


?>