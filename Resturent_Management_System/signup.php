<?php
session_start();

	include("connection.php");
	include("function.php");

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//someting was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
		
		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{
			//save to database
			
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";
			
			mysqli_query($con, $query);
			
			header("Location: login.php");
			die;
			
		}
		else
		{
			echo "Please enter some valid information";
		}
		
	}
	
	
?>

<!doctype html>
<html>
<head> 
	<title>Signup page</title>
	<link rel="stylesheet" href="styleSheetOne.css">

</head>
<body>


	<table class="headLine03">
		<tr>
			<td><a href="index.php" class="a01">Home</a></td>
		</tr>
	</table>


<style type="text/css">
		#box{
			position: absolute;
				top:50%;
				left:50%;
				transform:translate(-50%,-50%);
				width:400px;
				padding:40px;
				background:rgba(0,0,0,.8);
				box-sizing:border-box;
				box-shadow:0 15px 25px rgba(0,0,0,.5);
				border-radius:10px;
		}
		
		BODY
			{
				margin:0;
				padding:0;
				font-family: sans-serif;
				background:url(wallpaper-preview.jpg);
				background-size:cover;
				
				color:white
			}
		#a02
		{
			text-decoration: none;
			color:white;
			font-family:Calibri;
			font-size:15px;
		}
		</style>

		<div id="box">
		
		
		<form method="POST">
		
		
			<div style="font-size: 20px;margin: 10px;colr:white">Signup</div>
			<input id="text" type="text" name="user_name"><br><br>
			<input id="text" type="password" name="password"><br><br>
			<input id="button" type="submit" value="Signup"><br><br>
			
			<a href="login.php" id="a02">login</a>
	</form>
	


</body>
</html>