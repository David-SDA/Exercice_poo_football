<?php
    class Equipe{
        private string $_nom;
        private Pays $_pays;
        private string $_dateCreation;
        private array $_contracts = [];

        /* Méthode __construct de la classe */
        public function __construct(string $nom, Pays $pays, string $dateCreation){
            $this->_nom = $nom;
            $this->_pays = $pays;
            $this->_dateCreation = $dateCreation;
            $this->_pays->setEquipesPays($this);
        }

        /* Getter et Setter pour le nom de l'équipe */
        public function getNom() : string{
            return $this->_nom;
        }
        public function setNom(string $nom){
            $this->_nom = $nom;
        }

        /* Getter et Setter pour le pays de l'équipe */
        public function getPays() : Pays{
            return $this->_pays;
        }
        public function setPays(Pays $pays){
            $this->_pays = $pays;
        }

        /* Getter et Setter pour la date de création de l'équipe */
        public function getDateCreation() : string{
            return $this->_dateCreation;
        }
        public function setDateCreation(string $dateCreation){
            $this->_dateCreation = $dateCreation;
        }

        /* Getter et Setter pour les contrats de l'équipe */
        public function getContracts() : array{
            return $this->_contracts;
        }
        public function setContracts(Contract $contract){
            array_push($this->_contracts, $contract);
        }

        /* Méthode __toString de la classe */
        public function __toString(){
            return $this->_nom;
        }
    }
?>