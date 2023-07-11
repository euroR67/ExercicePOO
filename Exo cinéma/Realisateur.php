<?php 


    class Realisateur extends Personne {
        private string $realiser;

        public function __construct(string $realiser) {
            $this->realiser = $realiser;
        }

        public function getRealiser(){
            return $this->realiser;
        }

        public function setRealiser($realiser){
            $this->realiser = $realiser;
        }
    }



?>