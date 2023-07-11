<?php 

    // Définition de la classe Role
    class Role {
        private string $personnage; // Propriété privée pour stocker le nom du personnage
        private array $jouer = []; // Propriété privée pour stocker les instances de la classe Jouer

        // Constructeur de la classe Role
        public function __construct(string $personnage) {
            $this->personnage = $personnage;
        }

        // Méthode pour obtenir le nom du personnage
        public function getPersonnage(){
            return $this->personnage;
        }

        // Méthode pour définir le nom du personnage
        public function setPersonnage(string $personnage){
            $this->personnage = $personnage;
        }

        // Méthode pour obtenir les instances de la classe Jouer
        public function getJouers(){
            return $this->jouer;
        }

        // Méthode pour ajouter une instance de la classe Jouer
        public function setJouer(Jouer $jouer){
            array_push($this->jouer,$jouer);
        }

        // Méthode pour afficher les acteurs ayant joué le rôle
        public function incarnation(){
            echo "les acteurs ayant joué le rôle de $this : "; 
            foreach ($this->jouer as $jouer){
                echo $jouer->getActeur().", ";
            }
        }

        // Méthode magique pour convertir l'objet en chaîne de caractères
        public function __toString(){
            return $this->personnage;
        }
    }
?>
