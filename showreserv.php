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

     <a href="foodmenu1.php">Food Menu</a>
	  <a href="onlineorder.php">Order Now</a>
     <a href="showorder.php">Your order </a>
	 <a href="reserv.php">Reservation </a>
	  <a href="showreserv.php">Show Reservation </a>
	 
	 <a href="home.php">Log Out </a>
	 
  
</div>

<p>Show Reservation </p>

<table width="1000" border="2" align="center">

	<tr>
	<td>Date</td>
	<td>User Email</td>
	<td>Starting Time</td>
	<td>Ending Time</td>
	<td>Number of People </td>
	<td>Item,Size,Quantity </td>
	<td>Recommendation</td>
	
	</tr>

	<?php
	
	$sql="select * from reservation";
	$result= mysqli_query($con,$sql);
	while($row = mysqli_fetch_array($result)){
		
		$date = $row['date'];
		$mail = $row['mail'];
		$stime= $row['stime'];
		$etime= $row['etime'];
		$people= $row['people'];
		$item= $row['item'];
		$recom= $row['recom'];		

				
?>



<tr>
	<td><?php echo  $date ;?> </td>
	<td><?php echo  $mail;?> </td>
	<td><?php echo  $stime;?> </td>
	<td><?php echo  $etime;?> </td>
	<td><?php echo  $people;?> </td>
	<td><?php echo  $item;?> </td>
	<td><?php echo  $recom;?> </td>
	
	</tr>
<?php 
	}
?>
</table>
</body>
</html>