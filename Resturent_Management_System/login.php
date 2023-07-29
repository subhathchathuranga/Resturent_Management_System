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
			//read from database
			
			$query = "select * from users where user_name = '$user_name' limit 1";
			
			$result = mysqli_query($con,$query);
			
			if($result)
			{
				if($result && mysqli_num_rows($result)>0)
				{
					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{
						$_SESSION['user_id'] = $user_data['user_id']; 
						header("Location: index.php");
						die;
					}
				}
			}
			
			echo "Please enter some valid information";
			
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
	<title>Login page</title>
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
				background:url(restaurant-slider.jpg);
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
		
		
			<div style="font-size: 20px;margin: 10px;colr:white">Login</div>
			<input id="text" type="text" name="user_name"><br><br>
			<input id="text" type="password" name="password"><br><br>
			<input id="button" type="submit" value="Login"><br><br>
			
			<a href="signup.php" id="a02">Signup</a>
	</form>
	


</body>
</html>