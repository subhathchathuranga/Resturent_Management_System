<?php


$food_name = filter_input(INPUT_POST, 'food_name');
$price = filter_input(INPUT_POST, 'price');

	if(!empty($food_name)) {
	if(!empty($price)) {
		$host = "localhost";
		$dbusername = "root";
		$dbpassword = "";
		$dbname = "resturent_management_system";
		
		
		$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
		
		
		if(mysqli_connect_error()) {
			die('Connect Error ('.mysqli_connect_errno().')'.mysqli_connect_errno());
			
		}
		else{
			$sql = "INSERT INTO food (food_name,price) values ('$food_name','$price')";
			if ($conn->query($sql)) {
				echo "New Record is Inserted Sucessfully";
			}
			else{
				echo "Error: ". $sql . "<br>". $conn->error;
				
			}
			$conn->close();
			
		}
	}
	else{
		echo "Password should not be empty";
		die();
	}
	
}
else{
	echo "Username should not be empty";
		die();
	
}


?>
