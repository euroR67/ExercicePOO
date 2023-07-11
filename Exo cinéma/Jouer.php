<?php 


    class Jouer{
        private Acteur $acteur;
        private Role $role;
        private Film $film;


        public function __construct(Acteur $acteur, Role $role, Film $film) {
            $this->acteur = $acteur;
            $this->role = $role;
            $this->film = $film;
            $acteur->setJouer($this);
            $role->setJouer($this);
            $film->setJouer($this);
        }

        public function getActeur(){
            return $this->acteur;
        }

        public function setActeur($acteur){
            $this->acteur = $acteur;
            $acteur->setJouer($this);
        }

        public function getRole(){
            return $this->role;
        }

        public function setRole($role){
            $this->role = $role;
            $role->setJouer($this);
        }

        public function getFilm(){
            return $this->film;
        }

        public function setFilm($film){
            $this->film = $film;
            $film->setJouer($this);
        }

        public function __toString(){
            return "$this->role a été incarné par $this->acteur, <br>";
        }
    }


?>