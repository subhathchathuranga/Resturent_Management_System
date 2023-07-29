<!doctype html>
<html>
<head>
	<title>Manager</title>
	<style type="text/css">
		form{
			padding-top: 120px;
			text-align:center;
			font-size: 30px;
		}
		input{
			width:250px;
			height:40px;
			font-size:30px;
		}
		</style>



</head>
<body>

	<form method="POST" action="manager_connect.php">
	manager_id : <input type="number" name="manager_id"><br><br>
	hotel_id : <input type="number" name="hotel_id"><br><br>
  first_name : <input type="text" name="first_name"><br><br>
  last_name : <input type="text" name="last_name"><br><br>
  gender : <input type="text" name="gender"><br><br>
  phone_number : <input type="text" name="phone_number"><br><br>
  email : <input type="text" name="email"><br><br>
  salary : <input type="number" name="salary"><br><br>
  date_of_birth : <input type="text" name="date_of_birth"><br><br>
  <input type="submit">
</form>

	


</body>
</html>

