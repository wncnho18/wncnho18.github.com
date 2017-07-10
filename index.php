<?php

	include 'header.php'
	
?>
	<?php
			
	if(isset($_SESSION['newsession'])){
	
		echo "<div class='transbox'>
				    <p> Sign in successful!j</p>
				   </div>"; 
		
		}else{
		
			echo "<div class='transbox'>
				    <p> You are not signed in. Sign in or create an account</p>
				   </div>";
			
			}
	?>
		

</body>

<footer>
</footer>
</html>
