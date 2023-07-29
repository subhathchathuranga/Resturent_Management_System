<!doctype html>
<html>
<head>
	<title>Payment</title>
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

	<form method="POST" action="payment_connect.php">
	payment_id : <input type="number" name="payment_id"><br><br>
  method : <input type="text" name="method"><br><br>
  pay_day : <input type="text" name="pay_day"><br><br>
  pay_amount : <input type="number" name="pay_amount"><br><br>
  <input type="submit">
</form>

	


</body>
</html>

