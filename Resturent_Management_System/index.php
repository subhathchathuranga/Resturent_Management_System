<?php
session_start();

	include("connection.php");
	include("function.php");

	$user_data = check_login($con);

	
	
?>


<!doctype html>
<html>
	<head>
		<title>Resturent Managemet System</title>
		<link rel="stylesheet" href="styleSheetOne.css"
	<head/>
	<body >
		<div class="row01">
		<div>
				<table>
					<tr>
						<td><img src ="istockphoto-981368726-612x612.jpg" class= "img01"></td>
					</tr>
				</table>
			</div>
			<div class="column01">
				<center><table class="headLine">
					<tr>
						<td><a href ="edit_02.html" class="a01">Home</a></td>
						<td><a href =""class="a01">About Us</a></td>
						<td><a href =""class="a01">Menu</a></td>
						<td><a href =""class="a01">Events</a></td>
						<td><a href =""class="a01">Contact</a></td>
						<td><a href="admin_login.php"class="a01">Admin</a></td>
					</tr>
				</table></center>
			</div>
			<div class="column02">
				<table class="headLine02">
					<tr>
						<td><a href ="loginPage.php" class="a01">JOIN NOW</a></td>
					</tr>
				</table>
			</div>
		</div>
		
		<table class="col">
			<tr>
				<td>
					<h1 class="text">
						RESTAURANT
					</h1>
					<br>
					<p class="text">
						FHGKUUERHGAKEGEGMAEAIHGAEOJELJTLIHETG<BR>JEGOEKGPETGERO;GJRLHERGERG
					</p>
				</td>
			</TR>
			<TR>
				<td class="text">
					<div class= "dropup">
						<button class="dropbtn">VIEW OUR GALLERY</button>
						<div class="dropup-content">
							<img src ="caption.jpg"width="150px"height="150px" class ="img02">
							<img src ="copeland-s-restaurants-office.jpg"width="150px"height="150px" class ="img02">
							<img src ="littlebeettable-healthy-restaurants-nyc.jpg"width="150px"height="150px" class ="img02">
							<img src ="29aef8ed3dc0e13a8fb8c721f0f6df27.jpg"width="150px"height="150px" class ="img02">
						</div>
					</div>
					
				</td>
			</tr>
		</table>
	
	</body>