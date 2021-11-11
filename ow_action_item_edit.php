<?php
include_once 'ow_classes.php';
$objConn = new Connection;
$pdoConn = $objConn->openConnection();
session_start();

if(isset($_POST['updateitem'])){
	$objItem = new Item;
	$objItem->setItemID($_SESSION['itemID']);
	$objItem->setItemName($_POST['itemname']);
	$objItem->setItemDesc($_POST['itemdesc']);
	$objItem->setItemPrice($_POST['itemprice']);
	//get image filename
	$target_dir = "uploads/";
	$target_file = $target_dir . basename($_FILES["itemimage"]["name"]);
	$objItem->setItemImg($target_file);

	$objQBuilder = new QueryBuilder;
	$query = $objQBuilder->buildQueryUpdate('tb_items', 
	['ItemName', 'ItemDescription', 'ItemPrice', 'ItemImage'], 
	['ItemID = ?']);
	$result = $objItem->updateItem($pdoConn, $query, 
	[$objItem->getItemName(), $objItem->getItemDesc(), 
	$objItem->getItemPrice(), $objItem->getItemImg(), 
	current($objItem->getItemID())]);

	//do actual upload to img folder
	move_uploaded_file($_FILES["itemimage"]["tmp_name"], $target_file);
	header("Location:ow_item_list.php");
}

?>