<?php 


    class Genre {
<<<<<<< HEAD
        private string $categorie; // Propriété privée pour stocker la catégorie du genre
        private array $films = []; // Propriété privée pour stocker les instances de la classe Film
=======
        private string $categorie;
        private array $films = [];
>>>>>>> a95ba46cf5e2e4b57039e5d15a5e0925293706a6

        // Constructeur de la classe Genre
        public function __construct(string $categorie) {
            $this->categorie = $categorie;
        }

        // Méthode pour obtenir la catégorie du genre
        public function getCategorie(){
            return $this->categorie;
        }

<<<<<<< HEAD
        // Méthode pour définir la catégorie du genre
=======
>>>>>>> a95ba46cf5e2e4b57039e5d15a5e0925293706a6
        public function setCategorie(string $categorie){
            $this->categorie = $categorie;
        }

<<<<<<< HEAD
        // Méthode pour obtenir les instances de la classe Film associées au genre
=======
>>>>>>> a95ba46cf5e2e4b57039e5d15a5e0925293706a6
        public function getFilms(){
            return $this->films;
        }

<<<<<<< HEAD
        // Méthode pour ajouter une instance de la classe Film au genre
=======
>>>>>>> a95ba46cf5e2e4b57039e5d15a5e0925293706a6
        public function setFilms(Film $film){
            array_push($this->films, $film);
        }

<<<<<<< HEAD
        // Méthode magique pour convertir l'objet en chaîne de caractères
=======
>>>>>>> a95ba46cf5e2e4b57039e5d15a5e0925293706a6
        public function __toString(){
            return $this->categorie;
        }

<<<<<<< HEAD
        // Méthode pour afficher les films associés au genre
        public function contenir(){
            echo "Le genre $this est associé à ".count($this->films)." films : "; 
=======
        public function contenir(){
            echo "le genre $this est associé a ".count($this->films)." films : "; 
>>>>>>> a95ba46cf5e2e4b57039e5d15a5e0925293706a6
            foreach($this->films as $film){
                echo "$film, <br>";
            }
        }
    }



?>