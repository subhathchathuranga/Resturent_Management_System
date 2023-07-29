<!doctype html>
<html>
<head>
	<title>Employee</title>
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

	<form method="POST" action="employee_connect.php">
	employee_id : <input type="number" name="employee_id"><br><br>
  first_name : <input type="text" name="first_name"><br><br>
  last_name : <input type="text" name="last_name"><br><br>
  gender : <input type="text" name="gender"><br><br>
  salary : <input type="text" name="salary"><br><br>
  date_of_birth : <input type="text" name="date_of_birth"><br><br>
  <input type="submit">
</form>



</body>
</html>

