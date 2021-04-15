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
	//$target_dir = "img/";
	//$target_file = $target_dir . basename($_FILES["file"]["name"]);


	//$objItem->setItemImg($target_file);


	$objQBuilder = new QueryBuilder;
	$query = $objQBuilder->buildQueryCreate('tb_items', ['ItemName', 'ItemDescription', 'ItemPrice', ]);


	$result = $objItem->saveItem($pdoConn, $query, [$objItem->getItemName(), $objItem->getItemDesc(), $objItem->getItemPrice()]);

	//do actual upload to img folder
	//move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)


	if($result){
		header("Location:ow_itemlist.php");
	}

	else {
		//header("Location:ow_item_add.php");
	}
}

?>