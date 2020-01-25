<?php
  include 'config.php';
?>

<!tutorial>
<html>
<head>
<link rel="stylesheet" href="style.css"></link>

<h2 align="center" class="h">Welcome to PizzaBurg</h2>
</head>
<body id="b">
<center>
<div id="d">
<img src="l.png" class="img"></img>
<center><form action="alogin.php" method="POST">

<b><label>Email</label>
<input name="email" type="email" id="form" placeholder="Enter your email" required>
</input>
<b><label>Password</label>
<input name="pass" type="password" id="form" placeholder="Enter your Password" required>
</input>

<!button work>

<input name="alogin" type="submit" id="button" value="LOGIN">
</input>

</form></center>

</center>



<?php
    if(isset($_POST['alogin'])){
		
		$email= $_POST['email'];
		$pass=$_POST['pass'];
		
		$check = "select*from admin where email='$email' AND password ='$pass'";
		$check_work= mysqli_query($con,$check);
		
		if($check_work){
			if(mysqli_num_rows($check_work) > 0 ){
				
				echo"
				<script>
				alert('You are Successfully  Logged in');
				window.location.href='adminlogin.php';
				</script>
				";
				
			}else{
				
				echo"
				<script>
				alert('Password or Email not Found ');
				window.location.href('aregister.php');
				</script>
				";
			}
			
			
		}else{
			
			
				echo"
				<script>
				alert('Database Error  ');
				window.location.href('aregister.php');
				</script>
				";
		}
		
		
		
	}else{
		
		
	}
?>



</div>
</body>

</html>