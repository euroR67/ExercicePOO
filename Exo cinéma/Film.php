<?php

    class Film {
        private string $titre;
        private DateTime $dateFr;
        private int $duree;
        private string $synopsis = "Pas obligatoire";
        private Genre $genre;
        private Realisateur $realisateur;
        private array $jouer = [];


        public function __construct(string $titre, string $dateFr, int $duree, Genre $genre, Realisateur $realisateur) {
            $this->titre = $titre;
            $this->dateFr = new DateTime($dateFr);
            $this->duree = $duree;
            $this->genre = $genre;
            $this->realisateur = $realisateur;
            $genre->setFilms($this); 
            $realisateur->setRealisation($this);
        }

        public function getRealisateur(){
            return $this->realisateur;
        }

        public function setRealisateur(Realisateur $realisateur){
            $this->realisateur = $realisateur;
            $realisateur->setRealisation($this);
        }

        public function getTitre(){
            return $this->titre;
        }

        public function setTitre($titre){
            $this->titre = $titre;
        }

        public function getDateFr(){
            return $this->dateFr;
        }

        public function setDateFr(string $dateFr){
            $this->dateFr = new DateTime($dateFr);
        }

        public function getDuree(){
            return $this->duree;
        }

        public function setDuree($duree){
            $this->duree = $duree;
        }

        public function setJouer(Jouer $jouer) {
            array_push($this->jouer,$jouer);
        }

        public function getSynopsis(){
            return $this->synopsis;
        }
        public function setSynopsis(string $synopsis){
            $this->synopsis=$synopsis;
        }

        public function getGenre(){
            return $this->genre;
        }
        public function setGenre(Genre $genre){
            $this->genre=$genre;
            $genre->setFilms($this);
        }

        public function __toString(){ 
            return $this->titre;
        }
        public function casting(){
            echo "dans le film $this, <br>";
            foreach($this->jouer as $jouer){
               echo $jouer;
            }
        }
    }


?>