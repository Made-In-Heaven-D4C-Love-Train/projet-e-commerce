<?php
session_start();
require_once  'include/_panier.php';
require_once ('modele/MangaDal.class.php');
require_once 'include/_config.inc.php';
include "include/_reference.lib.php";
if(isset($_SESSION["panier"])){

var_dump($_SESSION["panier"]);

for($j=0;$j<count($_SESSION['panier']['idManga']); $j++){

  $id_M =  $_SESSION['panier']['idManga'][$j];
$id_V = $_SESSION['panier']['idVolume'][$j];
$id_Q = $_SESSION['panier']['qte'][$j];
MangaDal::setStock($_SESSION['panier']['idManga'][$j],$_SESSION['panier']['idVolume'][$j],MangaDal::getStock($_SESSION['panier']['idManga'][$j],$_SESSION['panier']['idVolume'][$j])+$_SESSION['panier']['qte'][$j]);
}



supprimerPanier();
$_SESSION["cart_time"] = null;
}
?>
