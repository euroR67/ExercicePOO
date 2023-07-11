<?php 


    class Realisateur extends Personne {
        private array $realisation = []; // Propriété privée pour stocker les réalisations du réalisateur

        // Constructeur de la classe Realisateur
        public function __construct(string $nom, string $prenom, string $sexe, string $dateNaissance) {
            parent::__construct($nom, $prenom, $sexe, $dateNaissance);
        }

        // Méthode pour obtenir les réalisations du réalisateur
        public function getRealisation(){
            return $this->realisation;
        }

        // Méthode pour ajouter une réalisation (instance de la classe Film) au réalisateur
        public function setRealisation(Film $film){
            array_push($this->realisation, $film);
        }

        // Méthode magique pour convertir l'objet en chaîne de caractères
        public function __toString(){
            return $this->getNom() ." ". $this->getPrenom();
        }

        // Méthode pour afficher les réalisations du réalisateur
        public function realisation(){
            echo "<br>Le réalisateur $this a réalisé les films suivants: ";
            foreach($this->realisation as $film){
                echo "$film, ";
            }
        }
    }



?>