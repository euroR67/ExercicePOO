<?php 

    // Définition de la classe Role
    class Role {
<<<<<<< HEAD
        private string $personnage; // Propriété privée pour stocker le nom du personnage
        private array $jouer = []; // Propriété privée pour stocker les instances de la classe Jouer
=======
        private string $personnage;
        private array $jouer = [];
>>>>>>> a95ba46cf5e2e4b57039e5d15a5e0925293706a6

        // Constructeur de la classe Role
        public function __construct(string $personnage) {
            $this->personnage = $personnage;
        }

        // Méthode pour obtenir le nom du personnage
        public function getPersonnage(){
            return $this->personnage;
        }

<<<<<<< HEAD
        // Méthode pour définir le nom du personnage
=======
>>>>>>> a95ba46cf5e2e4b57039e5d15a5e0925293706a6
        public function setPersonnage(string $personnage){
            $this->personnage = $personnage;
        }

<<<<<<< HEAD
        // Méthode pour obtenir les instances de la classe Jouer
        public function getJouers(){
            return $this->jouer;
        }

        // Méthode pour ajouter une instance de la classe Jouer
        public function setJouer(Jouer $jouer){
            array_push($this->jouer,$jouer);
        }

        // Méthode pour afficher les acteurs ayant joué le rôle
=======
        public function getJouers(){
            return $this->jouer;
        }
        public function setJouer(Jouer $jouer){
            array_push($this->jouer,$jouer);
        }
>>>>>>> a95ba46cf5e2e4b57039e5d15a5e0925293706a6
        public function incarnation(){
            echo "les acteurs ayant joué le rôle de $this : "; 
            foreach ($this->jouer as $jouer){
                echo $jouer->getActeur().", ";
            }
        }
<<<<<<< HEAD

        // Méthode magique pour convertir l'objet en chaîne de caractères
=======
>>>>>>> a95ba46cf5e2e4b57039e5d15a5e0925293706a6
        public function __toString(){
            return $this->personnage;
        }
    }
?>
