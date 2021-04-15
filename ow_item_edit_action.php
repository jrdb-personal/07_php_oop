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

	$objQBuilder = new QueryBuilder;
	$query = $objQBuilder->buildQueryUpdate('tb_items', ['ItemName', 'ItemDescription', 'ItemPrice'], ['ItemID = ?']);


	$result = $objItem->updateItem($pdoConn, $query, [$objItem->getItemName(), $objItem->getItemDesc(), $objItem->getItemPrice(), current($objItem->getItemID())]);

	header("Location:ow_itemlist.php");
	
}

?>