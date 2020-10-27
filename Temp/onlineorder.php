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
 
 table, th, td {
  border: 1px solid black;
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

     <a href="foodmenu1.php">Food Menu</a>
	  <a href="onlineorder.php">Order Now</a>
     <a href="showorder.php">Your order </a>
	 <a href="reserv.php">Reservation </a>
	 <a href="showreserv.php">Show Reservation </a>
	 <a href="home.php">Log Out </a>
	 
  
</div>


<br><br>
<table width="1500">
  <tr>
    <th>Item Name</th>
    <th>Small</th>
	<th>medium</th>
	<th>Large</th>
  </tr>
  
  <tr>
    <td>Cheddarolla</td>
    <td>255</td>
	<td>385</td>
    <td> 555</td>
  </tr>
  
  <tr>
    <td>Fire Ball </td>
    <td>255</td>
	<td>355</td>
	<td>515</td>
  </tr>
  
  <tr>
    <td>Hawaiian </td>
    <td>255</td>
	<td>355</td>
	<td>515</td>
  </tr>
  
  <tr>
    <td>Layer Cake </td>
    <td>235</td>
	<td>355</td>
	<td>515</td>
  </tr>
  
  <tr>
    <td>Meaty Onion</td>
    <td>255</td>
	<td>355</td>
	<td>505</td>
  </tr>
  <tr>
    <td>Sausage Carnival </td>
    <td>235</td>
	<td>355</td>
	<td>555</td>
  </tr>
  <tr>
    <td>Tender Beef </td>
    <td>235</td>
	<td>355</td>
	<td>605</td>
  </tr>
  <tr>
    <td>RedSun Pepperoni </td>
    <td>235</td>
	<td>355</td>
	<td>495</td>
  </tr>
  
  
  
  
</table>


<p id="p" >Order Now!</p>

<div id="p">

<form action="onlineorder.php" method="POST">

<b><label>Name</label>
<input name="name" type="text"  placeholder="abc" required>
</input>

<b><label>Date</label>
<input name="date" type="text"  placeholder="1/12/2019" required>
</input>

<b><label>Item</label>
<input name="item" type="text"  placeholder="fire ball....." required>
</input>
<b><label>Size</label>
<input name="size" type="text" placeholder="small/medium/large" required>
</input>
<b><label>Quantity</label>
<input name="quantity" type="text" placeholder="1/2/3....." required>
</input>



<!button work>

<input name="order" type="submit" id="button" value="Add to List">
</input>

</form>

<?php

if(isset($_POST['order']))
{
	
      $name = $_POST['name'];
	  $date = $_POST['date'];
	  $item = $_POST['item'];
	  $size = $_POST['size'];
	  $quantity = $_POST['quantity'];
	
	
	
	
				
	$insertion= "insert into list values('$name' ,'$date', '$item' , '$size' , '$quantity' )";
	
	           
				$insertion_run = mysqli_query($con,$insertion);
				
				if($insertion_run ){
					
					echo "
		<script>
		alert('Added to List!');
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

