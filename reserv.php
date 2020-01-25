<?php
  include 'config.php';
?>

<!DOCTYPE html>
<html>
<head>

<style>

  p{
 
   color: red;
   text-align:center;
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

<br><br>

<div class="topnav">

     <a href="foodmenu1.php">Food Menu</a>
	  <a href="onlineorder.php">Order Now</a>
     <a href="showorder.php">Your order </a>
	 <a href="reserv.php">Reservation </a>
	 <a href="showreserv.php">Show Reservation </a>
	 <a href="home.php">Log Out </a>
	 
  
</div>


<p id="n" > Pre-Booking !!</p>

<div id="p">

<form action="reserv.php" method="POST">

<b><label>Date</label>
<input name="date" type="text"  placeholder="31/11/2019" required>
</input>
<b><label>User Email</label>
<input name="mail" type="text" placeholder="abc@gmail.com" required>
</input>
<b><label>Starting Time </label>
<input name="stime" type="text" placeholder="3 pm" required>
</input>

<b><label>Ending Time</label>
<input name="etime" type="text"  placeholder="6 pm " required>
</input>

<b><label>Number of People </label>
<input name="people" type="text"  placeholder="6 " required>
</input>

<b><label>Item , Size and Quantity </label>
<input name="item" type="text"  placeholder="Fire ball , small ,  3 " required>
</input>


<b><label>Any Special Recommendation </label>
<input name="recom" type="text"  placeholder="optional...." >
</input>




<!button work>

<input name="reservation" type="submit" id="button" value="Reservation">
</input>

</form>

<?php

if(isset($_POST['reservation'])){

	$date = $_POST['date'];
	$mail = $_POST['mail'];
	$stime = $_POST['stime'];
	$etime= $_POST['etime'];
	$people = $_POST['people'];
	$item = $_POST['item'];
	$recom = $_POST['recom'];
		
				
	$insertion= "insert into reservation values('$date','$mail','$stime','$etime' , '$people', '$item', '$recom')";
	
	           
				$insertion_run = mysqli_query($con,$insertion);
				
				if($insertion_run ){
					
					echo "
		<script>
		alert('Reservation completed !');
		window.location.href='reserv.php';
		</script>
		";
					
				}else{
					
						echo "
		<script>
		alert('Try Again ! ');
		window.location.href='reserv.php';
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
