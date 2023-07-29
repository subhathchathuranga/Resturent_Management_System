<?php

$contact_id = filter_input(INPUT_POST, 'contact_id');
$employee_id = filter_input(INPUT_POST, 'employee_id');
$phone_number = filter_input(INPUT_POST, 'phone_number');
$email = filter_input(INPUT_POST, 'email');





	if(!empty($contact_id)) {
	if(!empty($employee_id)) {
	if(!empty($phone_number)) {
	if(!empty($email)){
		
		$host = "localhost";
		$dbusername = "root";
		$dbpassword = "";
		$dbname = "resturent_management_system";
		
		
		$ecconn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
		
		
		if(mysqli_connect_error()) {
			die('Connect Error ('.mysqli_connect_errno().')'.mysqli_connect_errno());
			
		}
		else{
			$sql = "INSERT INTO employee_contact (contact_id,employee_id,phone_number,email) values ('$contact_id','$employee_id','$phone_number','$email')";
			if ($ecconn->query($sql)) {
				echo "New Record is Inserted Sucessfully";
			}
			else{
				echo "Error: ". $sql . "<br>". $ecconn->error;
				
			}
			$ecconn->close(); 
			
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




?>
