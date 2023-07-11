<?php 


    class Genre {
        private string $categorie;
        private array $films = [];

        public function __construct(string $categorie) {
            $this->categorie = $categorie;
        }

        public function getCategorie(){
            return $this->categorie;
        }

        public function setCategorie(string $categorie){
            $this->categorie = $categorie;
        }

        public function getFilms(){
            return $this->films;
        }

        public function setFilms(Film $film){
            array_push($this->films, $film);
        }

        public function __toString(){
            return $this->categorie;
        }

        public function contenir(){
            echo "le genre $this est associé a ".count($this->films)." films : "; 
            foreach($this->films as $film){
                echo "$film, <br>";
            }
        }
    }


?>