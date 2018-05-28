<?php 

function getAllOrders() {
	
	$db = connexion();
	$select = "SELECT * FROM orders";
	$orders = [];
	$statement = $db->prepare($select);
	$statement->execute();
	$orders = $statement->fetchAll(\PDO::FETCH_ASSOC);
	
	return $orders;
}

function getOrderDetailById($id) {
	
	$db = connexion();
//	$select = "SELECT * FROM orderdetails where orderNumber = {$id}";
	$select = "SELECT * FROM orderdetails AS det join products as pro ON det.productCode = pro.productCode  where orderNumber = {$id}";
	$lines = [];
	$statement = $db->prepare($select);
	$statement->execute();
	$lines = $statement->fetchAll(\PDO::FETCH_ASSOC);
	
	return $lines;
}

function getCustomerById($id) {
	
	$db = connexion();
	$select = "SELECT * FROM customers where customerNumber = {$id}";
	$customer = [];
	$statement = $db->prepare($select);
	$statement->execute();
	$customer = $statement->fetch(\PDO::FETCH_ASSOC);
	
	return $customer;
}

function getproductById($id) {
	
	$db = connexion();
	$select = "SELECT productName FROM products where productNumber = {$id}";
	$productName = [];
	$statement = $db->prepare($select);
	$statement->execute();
	$productName = $statement->fetch(\PDO::FETCH_ASSOC);
	
	return $productName;
}