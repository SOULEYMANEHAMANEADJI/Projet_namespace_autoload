<?php
    namespace App\Person;
    class Employe {
        protected $nomComplet;
        protected $age;
        protected $adresse;
        protected $salaireMensuel;

        public function __construct($nomComplet, $age, $adresse, $salaireMensuel) {
            $this->nomComplet = $nomComplet;
            $this->age = $age;
            $this->adresse = $adresse;
            $this->salaireMensuel = $salaireMensuel;
        }
        public function getSalaireMensuel() {
            return $this->salaireMensuel;
        }
        public function getDetails() {
            return "Nom : {$this->nomComplet}, Âge : {$this->age}, Adresse : {$this->adresse}";
        }
    }
?>