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
 
 </style>
</head>
<body>

<p>Show Order </p>

<table width="600" border="2" align="center">

	<tr>
	<td>Item</td>
	<td>Size</td>
	<td>Quantity</td>
	<td>User Name</td>
	<td>Phone Number</td>
	<td>Address </td>
	<td>Price </td>
	
	</tr>
	
	
	<?php
	$p=255;
	
	$sql="select * from list";
	$result= mysqli_query($con,$sql);
	while($row = mysqli_fetch_array($result)){
		
	
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



<tr>
	<td><?php echo  $item ;?> </td>
	<td><?php echo  $size;?> </td>
	<td><?php echo  $quantity;?> </td>
	<td><?php echo  $name;?> </td>
	<td><?php echo  $p;?> </td>
	
	
	</tr>
<?php 
	}
?>
</table>

<p> do you want to confirm your order ? <a href="location.php">Click here</a> </p>
</body>
</html>