<?php
  include 'config.php';
?>

<!DOCTYPE html>
<html>
<head>

<style>

  p{
 
   color: red;
   text-align:left;
   font-family:Comic Sans MS;
   font-size:200%;
 }
 
 body
{
background-color:#AED6F1 ;
}

body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

 .topnav {
  overflow: hidden;
  background-color:#FADBD8 ;
}

.topnav a {
  float: left;
  color: red;
  text-align: center;
   font-family:Comic Sans MS;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 50 px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
 
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

</style>
</head>

<body>

<div class="topnav">
  

<div class="topnav">

     <a href="foodmenu1.php">Food Menu</a>
	  <a href="onlineorder.php">Order Now</a>
     <a href="showorder.php">Your order </a>
	 <a href="reserv.php">Reservation </a>
	 <a href="showreserv.php">Show Reservation </a>
	 <a href="home.php">Log Out </a>	 
  
</div>
  
</div>


<p id="n" >Confirm Order </p>

<div id="p">

<form action="location.php" method="POST">
<b><label>Date</label>
<input name="date" type="text"  placeholder="1/12/2019" required>
</input>

<b><label>User Name </label>
<input name="name" type="text"  placeholder="abc" required>
</input>
<b><label>Phone Number </label>
<input name="pnum" type="text" placeholder="01700000000" required>
</input>
<b><label>Address</label>
<input name="add" type="text" placeholder="house 10, road 10 , sector 10...." required>
</input>

<!button work>

<input name="location" type="submit" id="button" value="Confirm">
</input>

</form>

<?php

if(isset($_POST['location'])){
     $date=$_POST['date'];
	$name = $_POST['name'];
	$pnum = $_POST['pnum'];
	$add = $_POST['add'];
	
				
	$insertion= "insert into location values('$date','$name','$pnum','$add')";
	
	           
				$insertion_run = mysqli_query($con,$insertion);
				
				if($insertion_run ){
					
					echo "
		<script>
		alert('Confirmed !!');
		window.location.href='onlineorder.php';
		</script>
		";
					
				}else{
					
						echo "
		<script>
		alert('Try Again ! ');
		window.location.href='onlineorder.php';
		</script>
		";
				}
				
}
			
else{
	
	
}
?>

</div>

</body>
</html>

