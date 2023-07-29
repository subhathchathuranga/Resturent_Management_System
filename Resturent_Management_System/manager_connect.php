<?php

$manager_id = filter_input(INPUT_POST, 'manager_id');
$hotel_id = filter_input(INPUT_POST, 'hotel_id');
$first_name = filter_input(INPUT_POST, 'first_name');
$last_name = filter_input(INPUT_POST, 'last_name');
$gender = filter_input(INPUT_POST, 'gender');
$phone_number = filter_input(INPUT_POST, 'phone_number');
$email = filter_input(INPUT_POST, 'email');
$salary = filter_input(INPUT_POST, 'salary');
$date_of_birth = filter_input(INPUT_POST, 'date_of_birth');




	if(!empty($manager_id)) {
	if(!empty($hotel_id)) {
	if(!empty($first_name)){
	if(!empty($last_name)){
	if(!empty($gender)){
	if(!empty($phone_number)){
	if(!empty($email)){
	if(!empty($salary)){
	if(!empty($date_of_birth)){
		
		$host = "localhost";
		$dbusername = "root";
		$dbpassword = "";
		$dbname = "resturent_management_system";
		
		
		$mconn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
		
		
		if(mysqli_connect_error()) {
			die('Connect Error ('.mysqli_connect_errno().')'.mysqli_connect_errno());
			
		}
		else{
			$sql = "INSERT INTO manager (manager_id,hotel_id,first_name,last_name,gender,phone_number,email,salary,date_of_birth) values ('$manager_id','$hotel_id','$first_name','$last_name','$gender','$phone_number','$email','$salary','$date_of_birth')";
			if ($mconn->query($sql)) {
				echo "New Record is Inserted Sucessfully";
			}
			else{
				echo "Error: ". $sql . "<br>". $mconn->error;
				
			}
			$mconn->close(); 
			
		}
	}
	else{
		echo "Password should not be empty";
		die();
	}
	
}
else{
	echo "user should not be empty1";
		die();
	
}
	
}
else{
	echo "user should not be empty2";
		die();
}
}
else{
echo "user should not be empty3";
	die();
}
}
else{
echo "user should not be empty4";
	die();
}
}
else{
echo "user should not be empty5";
	die();
}
}
else{
echo "user should not be empty3";
	die();
}
}
else{
echo "user should not be empty4";
	die();
}
}
else{
echo "user should not be empty5";
	die();
}


?>
