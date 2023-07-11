<?php

    class Film {
        private string $titre; // Propriété privée pour stocker le titre du film
        private DateTime $dateFr; // Propriété privée pour stocker la date de sortie du film
        private int $duree; // Propriété privée pour stocker la durée du film en minutes
        private string $synopsis = "Pas obligatoire"; // Propriété privée pour stocker le synopsis du film (valeur par défaut: "Pas obligatoire")
        private Genre $genre; // Propriété privée pour stocker l'instance de la classe Genre associée au film
        private Realisateur $realisateur; // Propriété privée pour stocker l'instance de la classe Realisateur associée au film
        private array $jouer = []; // Propriété privée pour stocker les instances de la classe Jouer associées au film

        // Constructeur de la classe Film
        public function __construct(string $titre, string $dateFr, int $duree, Genre $genre, Realisateur $realisateur) {
            $this->titre = $titre;
            $this->dateFr = new DateTime($dateFr);
            $this->duree = $duree;
            $this->genre = $genre;
            $this->realisateur = $realisateur;
            $genre->setFilms($this);                // Met l'objet crée dans le tableau jouer de film
            $realisateur->setRealisation($this);    // Met l'objet crée dans le tableau jouer de realisateur
        }

        // Méthode pour obtenir l'instance de la classe Realisateur associée au film
        public function getRealisateur(){
            return $this->realisateur;
        }

        // Méthode pour définir l'instance de la classe Realisateur associée au film
        public function setRealisateur(Realisateur $realisateur){
            $this->realisateur = $realisateur;
            $realisateur->setRealisation($this);
        }

        // Méthode pour obtenir le titre du film
        public function getTitre(){
            return $this->titre;
        }

        // Méthode pour définir le titre du film
        public function setTitre($titre){
            $this->titre = $titre;
        }

        // Méthode pour obtenir la date de sortie du film
        public function getDateFr(){
            return $this->dateFr;
        }

        // Méthode pour définir la date de sortie du film
        public function setDateFr(string $dateFr){
            $this->dateFr = new DateTime($dateFr);
        }

        // Méthode pour obtenir la durée du film en minutes
        public function getDuree(){
            return $this->duree;
        }

        // Méthode pour définir la durée du film en minutes
        public function setDuree($duree){
            $this->duree = $duree;
        }

        // Méthode pour ajouter une instance de la classe Jouer associée au film
        public function setJouer(Jouer $jouer) {
            array_push($this->jouer, $jouer);
        }

        // Méthode pour obtenir le synopsis du film
        public function getSynopsis(){
            return $this->synopsis;
        }

        // Méthode pour définir le synopsis du film
        public function setSynopsis(string $synopsis){
            $this->synopsis = $synopsis;
        }

        // Méthode pour obtenir l'instance de la classe Genre associée au film
        public function getGenre(){
            return $this->genre;
        }

        // Méthode pour définir l'instance de la classe Genre associée au film
        public function setGenre(Genre $genre){
            $this->genre = $genre;
            $genre->setFilms($this);
        }

        // Méthode magique pour convertir l'objet en chaîne de caractères
        public function __toString(){
            return $this->titre;
        }

        // Méthode pour afficher le casting du film
        public function casting(){
            echo "Dans le film $this, <br>";
            foreach($this->jouer as $jouer){
            echo $jouer; // Affiche les instances de la classe Jouer associées au film
            }
        }
    }



?>