<?php
session_start();

	include("connection.php");
	include("function.php");

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//someting was posted
		$admin_name = $_POST['admin_name'];
		$admin_password = $_POST['admin_password'];
		
		if(!empty($admin_name) && !empty($admin_password) && !is_numeric($admin_name))
		{
			//read from database
			
			
			$query = "select * from admin where admin_name = '$admin_name' limit 1";
			
			$result = mysqli_query($con, $query);
			
			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{
					$admin_data = mysqli_fetch_assoc($result);
					
					if($admin_data['admin_password']=== $admin_password)
					{
						$_SESSION['admin_id'] = $admin_data['admin_id'];
						header("Location: admin_index.php");
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
	<title>login page</title>
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
		
		
			<div style="font-size: 20px;margin: 10px;colr:white">login</div>
			<input id="text" type="text" name="admin_name"><br><br>
			<input id="text" type="password" name="admin_password"><br><br>
			<input id="button" type="submit" value="login"><br><br>
			
			<a href="admin_signup.php" id="a02">signup</a>
	</form>
	


</body>
</html>