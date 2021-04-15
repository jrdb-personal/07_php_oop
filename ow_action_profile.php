<?php
include_once 'ow_classes.php';
$objConn = new Connection;
$pdoConn = $objConn->openConnection();
session_start();


	if(isset($_POST['updateprofile'])){
		$objUser = new User;
		$objUser->setUserEmail($_POST['email']);
		$objUser->setUserPassword($_POST['password']);
		$objUser->setProfileFirstName($_POST['firstname']);
		$objUser->setProfileLastName($_POST['lastname']);
		$objUser->setProfileBirthdate($_POST['birthdate']);
		$objUser->setProfileGender($_POST['gender']);
		$objUser->setUserID($_SESSION['UserID']);

		$objQBuilder = new QueryBuilder;
		$query = $objQBuilder->buildQueryUpdate('tb_users', ['UserFirstName', 'UserLastName', 'UserBirthdate', 'UserGender'], ['UserID = ?']);

		$result = $objUser->updateCurrentProfile($pdoConn, $query, [$objUser->getProfileFirstName(),$objUser->getProfileLastName(), $objUser->getProfileBirthdate(), $objUser->getProfileGender(), $objUser->getUserID()]);

		header("Location:ow_page_home.php");
	}

	else{

	}

?>