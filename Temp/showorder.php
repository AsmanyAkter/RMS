<?php
  
  include 'config.php';
?>

<html>
<head>
<style>

 p{
 
   color: red;
   text-align:center;
   font-family:Comic Sans MS;
   font-size:200%;
 }
 
 
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

<p>Show Order </p>

<table width="600" border="2" align="center">

	<tr>
	<td>User Name</td>
	<td>Item</td>
	<td>Size</td>
	<td>Quantity</td>
	<td>Price </td>
	</tr>
	
	
	<?php
	$p=255;
	$sm=1;
	
	$sql="select * from list";
	$result= mysqli_query($con,$sql);
	while($row = mysqli_fetch_array($result)){
		
	    $name= $row['name'];
		$item = $row['item'];
		$size = $row['size'];
		$quantity= $row['quantity'];
		
		
    if( $size == "small" or $size== "Small")
     {
	  $p=255;
     }
	 
	 else if( $size == "medium" or $size== "Medium")
     {
	  $p=355;
     
	 }
	  else if( $size == "Large" or $size== "large")
     {
	  $p=455;
     }
	 

     $p= $p * (int)$quantity;
	 
				
?>

<?php

$sq = "INSERT INTO sell (name , price)
VALUES ('$name', '$p')";

 mysqli_query($con,$sq);
?>


<tr>
    <td><?php echo  $name;?> </td>
	<td><?php echo  $item ;?> </td>
	<td><?php echo  $size;?> </td>
	<td><?php echo  $quantity;?> </td>
	
	<td><?php echo  $p;?> </td>
	
	
</tr>



<?php 
	}
?>
</table>

<p> do you want to confirm your order ? <a href="location.php">Click here</a> </p>
</body>
</html>