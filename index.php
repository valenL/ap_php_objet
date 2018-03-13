<?php
/**
 * Created by PhpStorm.
 * User: Valentina
 * Date: 13/03/2018
 * Time: 11:04
 */

include "./classes/Voiture.php";
include "./classes/Log.php";

$voiture1 = new Voiture();

var_dump($voiture1);

$voiture1 -> couleurs = "bleue";

var_dump($voiture1);

  // upload to   and test loclahost


$voiture1 -> masse = 1000;
$voiture1 -> vitesse = 28;

if ($ec = $voiture1 -> calculerEnergieCinetique()) // echo $ec . "Joules";
{

    $ec = $ec . "Joules";

    Log :: logWrite($ec);

}

// heritage:

