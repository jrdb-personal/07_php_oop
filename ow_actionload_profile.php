<?php
include_once 'ow_classes.php';
$objConn = new Connection;
$pdoConn = $objConn->openConnection();
session_start();


$objUser = new User;
$objUser->setUserID($_SESSION['UserID']);

$objQBuilder = new QueryBuilder;
$query = $objQBuilder->buildQueryRead('tb_profiles', 
['ProfileID', 'UserID', 'ProfileFirstName', 'ProfileLastName', 'ProfileBirthdate', 'ProfileGender', 'ProfileImage'], ['UserID = ?']);
$result = $objUser->getCurrentUser($pdoConn, $query, [$objUser->getUserID()]);

?>






