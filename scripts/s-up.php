<?php

session_start();

include '../dbh.php';

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$user_name = $_POST['user_name'];
$password = $_POST['pswd'];
$password_2 = $_POST['pswd_2'];
$email = $_POST['email'];
$birth_date = $_POST['bday'];



if(empty($first_name)){
	
	header("Location: ../signup.php?error=empty");
	exit();
}

if(empty($last_name)){
	
	header("Location: ../signup.php?error=empty");
	exit();
}

if(empty($user_name)){
	
	header("Location: ../signup.php?error=empty");
	exit();
}

if(empty($password)){
	
	header("Location: ../signup.php?error=empty");
	exit();
}

if($password != $password_2){
	
	header("Location: ../signup.php?error=password");
	exit();
	
}

if(empty($birth_date)){
	
	header("Location: ../signup.php?error=");
	exit();
	
}else{
	
	$sql = 	"SELECT USER_ID FROM user WHERE USER_ID = '$user_name'";
	$result = mysqli_query($conn,$sql);
	
	$usercheck = mysqli_num_rows($result);
	
	if ($usercheck > 0){
		
		header("Location: ../signup.php?error=user");
		exit();
		
		}
	
	$sql = 	"SELECT EMAIL FROM user WHERE EMAIL = '$email'";
	$result = mysqli_query($conn,$sql);
	
	$usercheck = mysqli_num_rows($result);

	if 	($usercheck > 0){
		
		header("Location: ../signup.php?error=@mail");
		exit();
		
		} else {

		$sql = "INSERT INTO user (FIRST_NAME, LAST_NAME, USER_ID, PSWD, EMAIL, BDAY) 
		 VALUES ('$first_name', '$last_name', '$user_name', '$password', '$email', '$birth_date')";
		 
		$result = mysqli_query($conn,$sql);

		header("Location: ../index.php");
	
	}
}


?>