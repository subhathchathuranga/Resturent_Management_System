<?php

$contact_id = filter_input(INPUT_POST, 'contact_id');
$phone_number = filter_input(INPUT_POST, 'phone_number');
$email = filter_input(INPUT_POST, 'email');



			


	if(!empty($contact_id)) {
	if(!empty($phone_number)) {
	if(!empty($email)){
		
		$host = "localhost";
		$dbusername = "root";
		$dbpassword = "";
		$dbname = "resturent_management_system";
		
		
		$ccconn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
		
		
		if(mysqli_connect_error()) {
			die('Connect Error ('.mysqli_connect_errno().')'.mysqli_connect_errno());
			
		}
		else{
			$sql = "INSERT INTO customer_contact (contact_id,phone_number,email) values ('$contact_id','$phone_number','$email')";
			if ($ccconn->query($sql)) {
				echo "New Record is Inserted Sucessfully";
			}
			else{
				echo "Error: ". $sql . "<br>". $ccconn->error;
				
			}
			$ccconn->close(); 
			
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




?>
