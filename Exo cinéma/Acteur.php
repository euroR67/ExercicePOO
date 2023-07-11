<?php 

    
    class Acteur extends Personne {
        private array $jouer = []; // Propriété privée pour stocker les rôles joués par l'acteur

        // Constructeur de la classe Acteur
        public function __construct(string $nom, string $prenom, string $sexe, string $naissance) {
            parent::__construct($nom, $prenom, $sexe, $naissance);
        }

        // Méthode pour obtenir les rôles joués par l'acteur
        public function getJouer(){
            return $this->jouer;
        }

        // Méthode pour ajouter un rôle joué (instance de la classe Jouer) à l'acteur
        public function setJouer(Jouer $jouer) {    
            array_push($this->jouer, $jouer);        
        }

        // Méthode magique pour convertir l'objet en chaîne de caractères
        public function __toString(){
            return $this->getNom() ." ". $this->getPrenom();
        }

        // Méthode pour afficher la filmographie de l'acteur
        public function filmographie(){
            echo "L'acteur $this a joué dans les films suivants : ";
            foreach ($this->jouer as $jouer){
                echo $jouer->getFilm().", <br><br>";
            }
        }
    }



?>