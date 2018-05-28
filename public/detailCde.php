<?php
include '../services/bootstrap.php';

$idCde = $_GET['idCde'];
$idCli = $_GET['idCli'];
$linesOrder = getOrderDetailById($idCde);

/*
function getOrderDetailById($id) {
	
	$db = connexion();
	$select = "SELECT * FROM orderdetails AS det join products as pro ON det.productCode = pro.productCode  where orderNumber = {$id}";
	$order = [];
	$statement = $db->prepare($select);
	$statement->execute();
	$order = $statement->fetch(\PDO::FETCH_ASSOC);
	
	return $order;
}




*/

include '../views/detailCde.phtml.php';