<?php
include_once 'ow_classes.php';
$objConn = new Connection;
$pdoConn = $objConn->openConnection();
session_start();

$objItem = new Item;
$objItem->setItemID($_GET['del_id']);
$objQBuilder = new QueryBuilder;
$query = $objQBuilder->buildQueryDelete('tb_items', 'ItemID = ?');
$result = $objItem->deleteItem($pdoConn, $query, [$objItem->getItemID()]);

header("Location:ow_item_list.php");


?>






