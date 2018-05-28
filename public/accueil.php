<?php
include '../services/bootstrap.php';

$listeCde = getAllOrders();

if ( !$listeCde ) {

 	print_r('pas de commande...ça craint !'); 

}

include '../views/accueil.phtml.php';