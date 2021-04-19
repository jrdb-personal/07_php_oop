<?php
include_once 'ow_classes.php';
$objConn = new Connection;
$pdoConn = $objConn->openConnection();
session_start();

$objItem = new Item;
$objQBuilder = new QueryBuilder;
$query = $objQBuilder->buildQueryRead('tb_items', ['ItemID', 'ItemName', 'ItemDescription', 'ItemPrice', 'ItemImage'], ['ItemID = ?']);
$_SESSION['itemID'] = [$_GET['edt_id']];
$result = $objItem->viewRecord($pdoConn, $query, [$_GET['edt_id']]);




?>






