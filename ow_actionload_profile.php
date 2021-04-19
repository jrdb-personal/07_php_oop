<?php
include_once 'ow_classes.php';
$objConn = new Connection;
$pdoConn = $objConn->openConnection();
session_start();


$objUser = new User;
$objUser->setUserID($_SESSION['UserID']);

$objQBuilder = new QueryBuilder;
$query = $objQBuilder->buildQueryRead('tb_users', ['UserID', 'UserEmail', 'UserPassword', 'UserFirstName', 'UserLastName', 'UserBirthdate', 'UserGender', 'UserImage'], ['UserID = ?']);
$result = $objUser->getCurrentUser($pdoConn, $query, [$objUser->getUserID()]);

?>






