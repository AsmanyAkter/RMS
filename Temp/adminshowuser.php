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



<p>  All User of PizzaBurg</p>

<table width="600" border="2" align="center">

	<tr>
	<td>Name</td>
	<td>Email</td>
	<td>Password</td>
	</tr>
	<?php
	 $sql="select * from user";
	$result= mysqli_query($con,$sql);
	while($row = mysqli_fetch_array($result)){
		
		
		$name = $row['name'];
		$email = $row['email'];
		$password= $row['password'];	
	?>

	<tr>
	<td><?php echo  $name ;?> </td>
	<td><?php echo  $email;?> </td>
	<td><?php echo  $password;?> </td>
	
	</tr>
<?php 
	}
?>
</table>
</body>
</html>