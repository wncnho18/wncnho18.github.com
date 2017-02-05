<?php

	session_start();

?>

<!DOCTYPE HTML>
<html>
<head>

<title> test v1 01-25-17 </title>
<link rel="stylesheet" type="text/css" href="css/style.css"> 
</head>

<body>

<header> 

	<nav>
	
		<ul>
		
			<li><a href = "index.php"> HOME <a/></li>
			
			<?php
			
				if(isset($_SESSION['newsession'])){
	
					echo "<form action = 'scripts/s-out.php'>
					<button> SIGN OUT</button>
				   </form>";
				}else{	
			
				echo "<form action = 'scripts/s-in.php' method = 'POST'>
						<input type='text' name= 'user_name' placeholder= 'username'>
						
						<input type= 'password' name='pswd' placeholder='password'>
					
						<button type='submit'>SIGN IN</button>
						
						</form>";
						
				echo "<li><a href = 'signup.php'> SIGN UP <a/></li>";
				
			      }
				  
		
			?>
			
		</ul>
	
	</nav>
	

</header>