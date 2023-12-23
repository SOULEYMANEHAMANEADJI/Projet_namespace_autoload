<?php
    namespace App\Person;
    interface EmployeInterface {
        public function calculerSalaireAnnuel();
        public function calculerNombreConges();
        public function calculerTaux();
    }
?>