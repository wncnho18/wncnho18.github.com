
<?php

	include 'header.php'
	
?>
    <?php
	
	if(isset($_GET['error']) && $_GET['error'] == "empty"){
		
		?><script type="text/javascript"> 
	
        alert("fill out all fields");
		window.location.href = "signup.php"
		
         </script>;
		 <?php
		 
		 } else if(isset($_GET['error']) && $_GET['error'] == "user") {
			 
			 ?><script type="text/javascript"> 
			 
			 alert("User already exists");
			 window.location.href = "signup.php"
			 
			 </script>;
			 
			 <?php 
			 
			} else if(isset($_GET['error']) && $_GET['error'] == "password") {
			 
			 ?><script type="text/javascript"> 
			 
			 alert("Passwords dont match!");
			 window.location.href = "signup.php"
			 
			</script>;
			
			<?php
				
			} else if(isset($_GET['error']) && $_GET['error'] == "@mail") {
			 
			 ?><script type="text/javascript"> 
			 
			 alert("Email already registered!");
			 window.location.href = "signup.php"
			 
			</script>;
			
			<?php
				
			}
	
	?>
	
	
<?php
		
		if(!isset($_SESSION['newsession'])){
	
		echo "<div class='transbox'>";
			
			echo "Please, feel free to create an acount!".'<br>';
		
			echo "<form action='scripts/s-up.php' method='POST'>
			
			First name:<br>
			<input type='text' name='first_name'>
			<br>
			
			Last name:<br>
			<input type='text' name='last_name'>
			<br>
			
			Username:<br>
			<input type='text' name= 'user_name'>
			<br>
			
			Password:<br>
			<input type= 'password' name='pswd'>
			<br>
			
			Repeat password:<br>
			<input type= 'password' name='pswd_2'>
			<br>
			
			Email:<br>
			<input type= 'email' name = 'email' required>
			<br>
			
			Birthday:<br>
			<input type='date' name='bday'>

			<br>
			<button type='submit'>SIGN UP</button>

			</form>";
			
			echo "</div>";
		
		}
?>

</body>

<footer>
</footer>
>>>>>>> origin/master
</html>
