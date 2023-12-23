<?php
    namespace App\Person;
    class Ouvrier extends Employe implements EmployeInterface {
        public function __construct($nomComplet, $age, $adresse, $salaireMensuel) {
            parent::__construct($nomComplet, $age, $adresse, $salaireMensuel);
        }
        public function calculerSalaireAnnuel() {
            // 
            return $this->salaireMensuel * 12;
        }
    
        public function calculerTaux() {
            // 
            return 5;
        }
    
        public function calculerNombreConges() {
            //
            return 10;
        }
        public function getDetails() {
            return parent::getDetails() . ", Type : Ouvrier, Salaire Annuel : {$this->calculerSalaireAnnuel()}, Taux : {$this->calculerTaux()}%, Congés : {$this->calculerNombreConges()} jours";
        }
    }
?>