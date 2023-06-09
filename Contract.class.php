<?php
    class Contract{
        private Joueur $_joueur;
        private Equipe $_equipe;
        private string $_dateDebutSaison;

        /* Méthode __construct de la classe */
        public function __construct(Joueur $joueur, Equipe $equipe, string $dateDebutSaison){
            $this->_joueur = $joueur;
            $this->_equipe = $equipe;
            $this->_dateDebutSaison = $dateDebutSaison;
            $this->_joueur->setContracts($this);
            $this->_equipe->setContracts($this);
        }

        /* Getter et Setter pour le joueur de ce contract */
        public function getJoueur() : Joueur{
            return $this->_joueur;
        }
        public function setJoueur(Joueur $joueur){
            $this->_joueur = $joueur;
        }

        /* Getter et Setter pour l'équipe de ce contract */
        public function getEquipe() : Equipe{
            return $this->_equipe;
        }
        public function setEquipe(Equipe $equipe){
            $this->_equipe = $equipe;
        }

        /* Getter et Setter pour l'année du début de saison de ce contract */
        public function getDateDebutSaison() : string{
            return $this->_dateDebutSaison;
        }
        public function setDateDebutSaison(string $dateDebutSaison){
            $this->_dateDebutSaison = $dateDebutSaison;
        }

        /* Méthode __toString de la classe */
        public function __toString(){
            return $this->_joueur . ", " . $this->_equipe . ", " . $this->_dateDebutSaison;
        }
    }
?>