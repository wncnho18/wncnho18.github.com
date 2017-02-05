<?php

session_start();

include '../dbh.php';

$user_name = $_POST['user_name'];
$password = $_POST['pswd'];

$sql = "SELECT * FROM user WHERE USER_ID = '$user_name' AND PSWD = '$password'";
	 
$result = mysqli_query($conn,$sql);

if(!$row = mysqli_fetch_assoc($result)){
	
    ?> <script type="text/javascript"> 
	
        alert("Your username or password is incorrect");
		window.location.href = "../index.php"
        </script>;
	<?php
} else{
	
	$_SESSION['newsession'] = $row['ID'];
	header("Location: ../index.php");
	
  }

?>