<?php
include_once 'ow_classes.php';
$objConn = new Connection;
$pdoConn = $objConn->openConnection();
session_start();

$objItem = new Item;
$objQBuilder = new QueryBuilder;
$query = $objQBuilder->buildQueryReadAll('tb_items', ['ItemID', 'ItemName', 'ItemDescription', 'ItemPrice', 'ItemImage']);
$result = $objItem->viewAll($pdoConn, $query);




?>






