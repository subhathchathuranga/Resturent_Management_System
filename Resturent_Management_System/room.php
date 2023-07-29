<!doctype html>
<html>
<head>
	<title>Form</title>
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

	<form method="POST" action="room_connectin.php">
	room_id : <input type="number" name="room_id"><br><br>
  room_type : <input type="text" name="room_type"><br><br>
  price : <input type="number" name="price"><br><br>
  status : <input type="text" name="status"><br><br>
  capacity : <input type="number" name="capacity"><br><br>
  <input type="submit">
</form>


</body>
</html>

