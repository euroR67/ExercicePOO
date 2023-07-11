<?php 


    class Genre {
        private string $categorie; // Propriété privée pour stocker la catégorie du genre
        private array $films = []; // Propriété privée pour stocker les instances de la classe Film

        // Constructeur de la classe Genre
        public function __construct(string $categorie) {
            $this->categorie = $categorie;
        }

        // Méthode pour obtenir la catégorie du genre
        public function getCategorie(){
            return $this->categorie;
        }

        // Méthode pour définir la catégorie du genre
        public function setCategorie(string $categorie){
            $this->categorie = $categorie;
        }

        // Méthode pour obtenir les instances de la classe Film associées au genre
        public function getFilms(){
            return $this->films;
        }

        // Méthode pour ajouter une instance de la classe Film au genre
        public function setFilms(Film $film){
            array_push($this->films, $film);
        }

        // Méthode magique pour convertir l'objet en chaîne de caractères
        public function __toString(){
            return $this->categorie;
        }

        // Méthode pour afficher les films associés au genre
        public function contenir(){
            echo "Le genre $this est associé à ".count($this->films)." films : "; 
            foreach($this->films as $film){
                echo "$film, <br>";
            }
        }
    }



?>