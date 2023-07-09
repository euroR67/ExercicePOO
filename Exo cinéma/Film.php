<?php

    class Film {
        private string $titre;
        private DateTime $dateFr;
        private int $duree;
        private string $synopsis = "Pas obligatoire";
        private Genre $genre;
        private Realisateur $realisateur;


        public function __construct(string $titre, string $dateFr, int $duree, Genre $genre, Realisateur $realisateur) {
            $this->titre = $titre;
            $this->dateFr = new DateTime($dateFr);
            $this->duree = $duree;
            $this->genre = $genre;
            $this->realisateur = $realisateur;
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
    }


?>