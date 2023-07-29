<?php

$customer_id = filter_input(INPUT_POST, 'customer_id');
$first_name = filter_input(INPUT_POST, 'first_name');
$last_name = filter_input(INPUT_POST, 'last_name');
$gender = filter_input(INPUT_POST, 'gender');
$date_of_birth = filter_input(INPUT_POST, 'date_of_birth');



	if(!empty($customer_id)) {
	if(!empty($first_name)) {
	if(!empty($last_name)){
	if(!empty($gender)){
	if(!empty($date_of_birth)){
		
		$host = "localhost";
		$dbusername = "root";
		$dbpassword = "";
		$dbname = "resturent_management_system";
		
		
		$cconn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
		
		
		if(mysqli_connect_error()) {
			die('Connect Error ('.mysqli_connect_errno().')'.mysqli_connect_errno());
			
		}
		else{
			$sql = "INSERT INTO customer (customer_id,first_name,last_name,gender,date_of_birth) values ('$customer_id','$first_name','$last_name','$gender','$date_of_birth')";
			if ($cconn->query($sql)) {
				echo "New Record is Inserted Sucessfully";
			}
			else{
				echo "Error: ". $sql . "<br>". $cconn->error;
				
			}
			$cconn->close(); 
			
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
