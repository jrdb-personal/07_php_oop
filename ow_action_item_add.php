<?php
include_once 'ow_classes.php';
$objConn = new Connection;
$pdoConn = $objConn->openConnection();
session_start();

if(isset($_POST['saveitem'])){
	$objItem = new Item;
	$objItem->setItemName($_POST['itemname']);
	$objItem->setItemDesc($_POST['itemdesc']);
	$objItem->setItemPrice($_POST['itemprice']);
	//get image filename
	$target_dir = "uploads/";
	$target_file = $target_dir . basename($_FILES["itemimage"]["name"]);
	$objItem->setItemImg($target_file);
	$objQBuilder = new QueryBuilder;
	$query = $objQBuilder->buildQueryCreate('tb_items', 
	['ItemName', 'ItemDescription', 'ItemPrice', 'ItemImage']);
	$result = $objItem->saveItem($pdoConn, $query, 
	[$objItem->getItemName(), $objItem->getItemDesc(), 
	$objItem->getItemPrice(), $objItem->getItemImg()]);

	//do actual upload to img folder
	move_uploaded_file($_FILES["itemimage"]["tmp_name"], $target_file);
	header("Location:ow_item_list.php");
}

?>