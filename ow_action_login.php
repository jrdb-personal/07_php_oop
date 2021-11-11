<?php
include_once 'ow_classes.php';
$objConn = new Connection;
$pdoConn = $objConn->openConnection();
session_start();

if(isset($_POST['login'])){
	$objUser = new User;
	$objUser->setUserEmail($_POST['email']);
	$objUser->setUserPassword($_POST['password']);

	$objQBuilder = new QueryBuilder;
	$query = $objQBuilder->buildQueryRead('tb_users', 
	['UserID', 'UserEmail', 'UserPassword'], ['UserEmail = ?', 
	'AND UserPassword = ?']);

	$result = $objUser->signInProcess($pdoConn, $query, 
	[$objUser->getUserEmail(), $objUser->getUserPassword()]);

	if($result){
		$_SESSION['UserEmail'] = $result['UserEmail'];
		$_SESSION['UserID'] = $result['UserID'];
		header("Location:ow_page_home.php");
	}
	else{
		header("Location :index.php");
	}
}
else {
	header("location :index.php");
}


?>