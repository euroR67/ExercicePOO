<?php 

    // création d'une class Jouer pour faire une liaison entre Acteur Role et Film
    class Jouer{
        private Acteur $acteur;
        private Role $role;
        private Film $film;

        // initialiser les propriétés d'une classe lorsqu'un nouvel objet est créé.
        public function __construct(Acteur $acteur, Role $role, Film $film) {
            $this->acteur = $acteur;
            $this->role = $role;
            $this->film = $film;
            $acteur->setJouer($this);   // Met l'objet crée dans le tableau jouer de acteur
            $role->setJouer($this);     // Met l'objet crée dans le tableau jouer de role
            $film->setJouer($this);     // Met l'objet crée dans le tableau jouer de film
        }

        // Méthode getActeur obtient le nom de l'acteur de l'objet
        public function getActeur(){
            return $this->acteur;   // retourne la chaine de caractère de l'objet acteur
        }

        // Méthode setActeur défini le nom de l'acteur de l'objet
        public function setActeur(Acteur $acteur){ // placeholder pour l'acteur a définir
            $this->acteur = $acteur;    // défini la chaine de caractère de l'objet acteur
            $acteur->setJouer($this);   // Met l'objet crée dans le tableau jouer de acteur
        }

        public function getRole(){
            return $this->role;
        }

        public function setRole(Role $role){
            $this->role = $role;
            $role->setJouer($this);     // Met l'objet crée dans le tableau jouer de role
        }

        public function getFilm(){
            return $this->film;
        }

        public function setFilm(Film $film){
            $this->film = $film;
            $film->setJouer($this);     // Met l'objet crée dans le tableau jouer de film
        }

        // La méthode __toString() sert à convertir en chaîne de caractères un objet.
        public function __toString(){
            return "$this->role a été incarné par $this->acteur, <br>";
        }
    }


?>