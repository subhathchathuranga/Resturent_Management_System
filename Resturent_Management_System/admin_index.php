<?php
session_start();

	include("connection.php");
	include("admin_connection.php");

	$admin_data = admin_login($con);

	
	
?>

<!doctype html>
<html>
<head>
	<title>Resturent Managemet System</title>
	
	<style>
	
		a:hover {
			background-color: yellow;
		}
		
		BODY
			{
				margin:0;
				padding:0;
				font-family: sans-serif;
				background:url(admin.jpg);
				background-size:cover;
				
				color:white
			}
	</style>
	
	
	
	
</head>
<body>

	<a href="admin_logout.php">Logout</a></br>
	
	Hello, <?php echo $admin_data['admin_name'];?>
	
	
	</br>
	
	
	
	
	
	
	
	
	
	

<table>
  <tr>
    <th><a href="food.php">Food</a></br></th>
    <th><a href="room.php">room</a></br></th>
    <th><a href="customer.php">Customer Details Entry</a></br></th>
	<th><a href="customer_details.php">Customer Details</a></br></th>
    <th><a href="employee.php">Emoployee Details Entry</a></br></th>
  </tr>
  <tr>
    <td><a href="employee_details.php">Emoployee Details</a></br></td>
    <td><a href="vegetable_supplier.php">Vegetable Supplier Details Entry</a></br></td>
    <td><a href="vegetable_supplier_details.php">Vegetable Details</a></br></td>
	<td><a href="manager.php">Emoployee Details Entry</a></br></td>
    <td><a href="manager_details.php">Emoployee Details</a></br></td>
  </tr>
</table>




</body>
</html>