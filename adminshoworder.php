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
<br><br>

<div class="topnav">
  
  <a href="adminshowuser.php">Total User</a>
  <a href="adminshoworder.php">Total Order</a>
   <a href="adminreserv.php">Total Reservation</a>
   <a href="showsell.php">Total Sell</a>
  <a href="home.php">Logout</a>
  
</div>

<p>Total Order</p>

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
		$date= $row['date'];
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

$sq = "INSERT INTO sell ( date ,name , price)
VALUES ('$date','$name', '$p')";

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


</body>
</html>