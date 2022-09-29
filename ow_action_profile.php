<?php
include_once 'ow_classes.php';
$objConn = new Connection;
$pdoConn = $objConn->openConnection();
session_start();


	if(isset($_POST['updateprofile'])){
		$objProfile = new Profile;
		$objProfile->setUserID($_SESSION['UserID']);
		$objProfile->setProfileFirstName($_POST['firstname']);
		$objProfile->setProfileLastName($_POST['lastname']);
		$objProfile->setProfileBirthdate($_POST['birthdate']);
		$objProfile->setProfileGender($_POST['gender']);

		//get image filename
		$target_dir = "uploads/";
		$target_file = $target_dir . basename($_FILES["userimage"]["name"]);
		$objProfile->setProfileImage($target_file);

		//check if there is an existing profile
		$objQBuilder = new QueryBuilder;
		$query = $objQBuilder->buildQueryRead('tb_profiles', 
		['ProfileID', 'UserID', 'ProfileFirstName', 'ProfileLastName', 'ProfileBirthdate', 'ProfileGender', 'ProfileImage'], ['UserID = ?']);
		$result = $objProfile->getCurrentProfile($pdoConn, $query, [$_SESSION['UserID']]);

		if($result){
			//if existing profile, update
			$query = $objQBuilder->buildQueryUpdate('tb_profiles', ['ProfileFirstName', 'ProfileLastName', 'ProfileBirthdate', 'ProfileGender', 'ProfileImage'], ['UserID = ?']);
			$result = $objProfile->upsertProfile($pdoConn, $query, 
			[
			$objProfile->getProfileFirstName(),
			$objProfile->getProfileLastName(), 
			$objProfile->getProfileBirthdate(), 
			$objProfile->getProfileGender(), 
			$objProfile->getProfileImage(), 
			$objProfile->getUserID(),
			]
		);
		}
		else {
			//if no profile found create new
			$query = $objQBuilder->buildQueryCreate('tb_profiles', ['UserID', 'ProfileFirstName', 'ProfileLastName', 'ProfileBirthdate', 'ProfileGender', 'ProfileImage']);
			$result = $objProfile->upsertProfile($pdoConn, $query, 
			[
			$objProfile->getUserID(),
			$objProfile->getProfileFirstName(),
			$objProfile->getProfileLastName(), 
			$objProfile->getProfileBirthdate(), 
			$objProfile->getProfileGender(), 
			$objProfile->getProfileImage(), 
			]
		);
		}
		//do actual upload to img folder
		move_uploaded_file($_FILES["userimage"]["tmp_name"], $target_file);

		header("Location:ow_page_home.php");
	}

	else{
		header("Location:ow_page_profile.php");
	}

?>