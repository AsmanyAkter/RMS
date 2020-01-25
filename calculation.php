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
  
  <a href="adminshowuser.php">Total User</a>
  <a href="adminshoworder.php">Total Order</a>
   <a href="adminreserv.php">Total Reservation</a>
   <a href="showsell.php">Total Sell</a>
  <a href="home.php">Logout</a>
  
</div>

	
	<?php
	$p=255;
	$sm=1;
	
	$sql="select * from list";
	$result= mysqli_query($con,$sql);
	while($row = mysqli_fetch_array($result)) {
		
	
		$item = $row['item'];
		$size = $row['size'];
		$quantity= $row['quantity'];
		$name= $row['name'];
		
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
 
 $sq1 = "SELECT * FROM location INNER JOIN list ON location.name=list.name  WHERE location.name=$name";
 mysqli_query($con , $sq1);


?>



<?php 
	}
?>
</table>
</body>
</html>