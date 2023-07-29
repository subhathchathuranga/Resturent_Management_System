<!doctype html>
<html>
<head> 
	<title>Owner details page</title>
	<style type="text/css">
	.name{
		font-family:"Arial Black",Gadget,sans-serif;
		font-size:14px;
		color:#0c9;
	}
	
	.details {
		font-family:"Arial Black",Gadget,sans-serif;
		font-size:12px;
		color:#999;
	}
	</style>

</head>
<body>
	<?php
	require_once('connection.php');
	
	
	$q= "select * from owner";
	
	$r = @mysqli_query($con,$q);
	
	$num = mysqli_num_rows($r);
	
	if($num > 0){
		
		while($row = mysqli_fetch_array($r)){
			
			echo "<p>";
			echo "<span class = 'name'>";
			echo $row['owner_name']."<br>";
			echo "</span>";
			echo "<span class = 'details'>";
			echo $row['owner_id']."<br>";
			echo $row['address']."<br>";
			echo $row['date_of_birth']."<br>";

			echo "</p>";
		}
	}
	else{
		echo "No records";
	}
	
	
	
	?>


	<a href="index.php">Home</a></br>
</body>
</html>