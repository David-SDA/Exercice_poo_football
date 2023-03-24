<?php
    class Pays{
        private string $_nomPays;
        private array $_equipesPays = [];

        /* Méthode __construct de la classe */
        public function __construct(string $nomPays){
            $this->_nomPays = $nomPays;
        }

        /* Getter et Setter pour le nom du pays */
        public function getNomPays() : string{
            return $this->_nomPays;
        }
        public function setNomPays(string $nomPays){
            $this->_nomPays = $nomPays;
        }

        /* Getter et Setter pour les équipes de ce pays */
        public function getEquipesPays() : array{
            return $this->_equipesPays;
        }
        public function setEquipesPays(Equipe $equipePays){
            array_push($this->_equipesPays, $equipePays);
        }

        /* Méthode pour obtenir l'affichage des équipes de ce pays */
        public function getAffichageEquipesPays() : string{
            $result = "$this a ces équipes : <br>";
            foreach($this->_equipesPays as $equipe){
                $result .= "- $equipe<br>";
            }
            return $result;
        }

        /* Méthode __toString de la classe */
        public function __toString(){
            return $this->_nomPays;
        }
    }
?>