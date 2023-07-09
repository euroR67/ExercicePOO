<?php 


    class Jouer{
        private Acteur $acteur;
        private Role $role;
        private Film $film;


        public function __construct(Acteur $acteur, Role $role, Film $film) {
            $this->acteur = $acteur;
            $this->role = $role;
            $this->film = $film;
        }

        public function getActeur(){
            return $this->acteur;
        }

        public function setActeur($acteur){
            $this->acteur = $acteur;
        }

        public function getRole(){
            return $this->role;
        }

        public function setRole($role){
            $this->role = $role;
        }

        public function getFilm(){
            return $this->film;
        }

        public function setFilm($film){
            $this->film = $film;
        }
    }


?>