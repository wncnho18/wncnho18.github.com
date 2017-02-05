<?php  

session_start();

session_destroy();

	 echo '<script type="text/javascript">'; 
	 echo 'alert("you have been logged out");'; 
	 echo 'window.location.href = "../index.php";';
	 echo '</script>';


?>