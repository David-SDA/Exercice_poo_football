<?php
    class Joueur{
        private string $_prenom;
        private string $_nom;
        private DateTime $_dateNaissance;
        private Pays $_nationalite;
        private array $_contracts = [];

        /* Méthode __construct de la classe */
        public function __construct(string $prenom, string $nom, string $dateNaissance, Pays $nationalite){
            $this->_prenom = $prenom;
            $this->_nom = $nom;
            $this->_dateNaissance = new DateTime($dateNaissance);
            $this->_nationalite = $nationalite;
        }

        /* Getter et Setter pour le prenom du joueur */
        public function getPrenom() : string{
            return $this->_prenom;
        }
        public function setPrenom(string $prenom){
            $this->_prenom = $prenom;
        }

        /* Getter et Setter pour le nom du joueur */
        public function getNom() : string{
            return $this->_nom;
        }
        public function setNom(string $nom){
            $this->_nom = $nom;
        }

        /* Getter et Setter pour la date de naissance du joueur */
        public function getDateNaissance() : DateTime{
            return $this->_dateNaissance;
        }
        public function setDateNaissance(string $dateNaissance){
            $this->_dateNaissance = new DateTime($dateNaissance);
        }

        /* Getter et Setter pour la date de naissance du joueur */
        public function getNationalite() : Pays{
            return $this->_nationalite;
        }
        public function setNationalite(Pays $nationalite){
            $this->_nationalite = $nationalite;
        }

        /* Getter et Setter pour les contrats du joueur */
        public function getContracts() : array{
            return $this->_contracts;
        }
        public function setContracts(Contract $contract){
            array_push($this->_contracts, $contract);
        }

        /* Méthode pour calculer l'âge d'un joueur */
        public function getAgeJoueur(){
            $aujourdhui=new DateTime();
            $diff=$aujourdhui->diff($this->_dateNaissance);
            return $diff->format("%Y");
        }

        /* Méthode pour obtenir l'affichage des détails de base du joueur */
        public function getAffichageDetailsJoueur() : string{
            return "$this ($this->_nationalite - " . $this->getAgeJoueur() . " ans)<br>";
        }

        /* Méthode __toString de la classe */
        public function __toString(){
            return $this->_prenom . " " . $this->_nom;
        }
    }
?>