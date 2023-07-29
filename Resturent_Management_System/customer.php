<!doctype html>
<html>
<head>
	<title>Customer</title>
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

	<form method="POST" action="customer_connect.php">
	customer_id : <input type="number" name="customer_id"><br><br>
  first_name : <input type="text" name="first_name"><br><br>
  last_name : <input type="text" name="last_name"><br><br>
  gender : <input type="text" name="gender"><br><br>
  date_of_birth : <input type="text" name="date_of_birth"><br><br>
  <input type="submit">
</form>



</body>
</html>

