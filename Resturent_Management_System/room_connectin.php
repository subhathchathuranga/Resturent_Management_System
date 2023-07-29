<?php

$room_id = filter_input(INPUT_POST, 'room_id');
$room_type = filter_input(INPUT_POST, 'room_type');
$price = filter_input(INPUT_POST, 'price');
$status = filter_input(INPUT_POST, 'status');
$capacity = filter_input(INPUT_POST, 'capacity');

	if(!empty($room_id)) {
	if(!empty($room_type)) {
	if(!empty($price)){
	if(!empty($status)){
	if(!empty($capacity)){
		
		$host = "localhost";
		$dbusername = "root";
		$dbpassword = "";
		$dbname = "resturent_management_system";
		
		
		$rconn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
		
		
		if(mysqli_connect_error()) {
			die('Connect Error ('.mysqli_connect_errno().')'.mysqli_connect_errno());
			
		}
		else{
			$sql = "INSERT INTO room (room_id,room_type,price,status,capacity) values ('$room_id','$room_type','$price','$status','$capacity')";
			if ($rconn->query($sql)) {
				echo "New Record is Inserted Sucessfully";
			}
			else{
				echo "Error: ". $sql . "<br>". $rconn->error;
				
			}
			$rconn->close();
			
		}
	}
	else{
		echo "Password should not be empty";
		die();
	}
	
}
else{
	echo "user should not be empty";
		die();
	
}
	
}
else{
	echo "user should not be empty";
		die();
}
}
else{
echo "user should not be empty";
	die();
}
}
else{
echo "user should not be empty";
	die();
}


?>
