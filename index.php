<?php

use App\Autoloader;
use App\Person\Cadre;
use App\Person\Ouvrier;

require_once "classes/Autoloader.php";
Autoloader::register();
// Instancier deux objets
$cadre = new Cadre("Luqman ADJI", 21, "Dakar", 60000);
$ouvrier = new Ouvrier("Ilyass HAMANE", 17, "Dakar", 1000);
//
echo ": ------ Cadre ------- :<br><br>";
echo "Détails pour Cadre :\n{$cadre->getDetails()}<br><br>";
echo ": ------ Ouvrier ------- :<br><br>";
echo "Détails pour Cadre :\n{$ouvrier->getDetails()}<br><br>";
echo ": ------ Fin du projet ------- :<br><br>";


