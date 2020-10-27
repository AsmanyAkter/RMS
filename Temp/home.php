<?php
 include 'config.php';
 
 
?>

<!tutorial>
<html>

<br><br><br>
<center> <form action="home.php" method="POST">


<!button work>

<input name="logout" type="submit" id="button" value="LOG-OUT">
</input>

</form></center>

</center>
<?php
  if(isset($_POST['logout'])){
	  
	  echo"
				<script>
				alert('You are Successfully  Logged out');
				window.location.href='index.php';
				</script>
				";
				
	  
	  
  }else{}
?>




</div>
</body>

</html>