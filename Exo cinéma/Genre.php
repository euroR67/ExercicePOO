<?php 


    class Genre {
        private string $categorie;

        public function __construct(string $categorie) {
            $this->categorie = $categorie;
        }

        public function getCategorie(){
            return $this->categorie;
        }

        public function setCategorie($categorie){
            $this->categorie = $categorie;
        }
    }


?>