<?php
    // Création de la class Auteurs
    class Auteurs {
        private $nom;
        private $prenom;
        private array $livre = [];

        // Initialisation des propriétés de class la Auteurs avec "__construct";
        public function __construct($nom,$prenom) {
            $this->nom = $nom;
            $this->prenom = $prenom;
        }

        // pour accéder au propriétés privées $nom de la classe
        public function getNom() {
            return $this-> nom;
        }

        // pour définir la valeur de la propriétés $nom privées
        
        public function getPrenom() {
            return $this-> prenom;
        }

        public function getLivre() {
            return $this-> livre;
        }

        public function setLivre(Livre $livre) {
            array_push($this->livre,$livre);
        }
        // Obtient une représentation textuelle de l'objet Auteurs
        public function __toString() {
            return $this->nom . ' ' .$this->prenom;
        }

        // Pour afficher la biography de l'auteur
        public function afficherBibliographie()
        {
            echo "<h3>Livres de $this :</h3>";
            foreach ($this->livre as $livre) {
                echo "$livre <br>";
            }
        }
    }
?>