<?php

$employee_id = filter_input(INPUT_POST, 'employee_id');
$first_name = filter_input(INPUT_POST, 'first_name');
$last_name = filter_input(INPUT_POST, 'last_name');
$gender = filter_input(INPUT_POST, 'gender');
$salary = filter_input(INPUT_POST, 'salary');
$date_of_birth = filter_input(INPUT_POST, 'date_of_birth');



	if(!empty($employee_id)) {
	if(!empty($first_name)) {
	if(!empty($last_name)){
	if(!empty($gender)){
	if(!empty($salary)){
	if(!empty($date_of_birth)){
		
		$host = "localhost";
		$dbusername = "root";
		$dbpassword = "";
		$dbname = "resturent_management_system";
		
		
		$econn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
		
		
		if(mysqli_connect_error()) {
			die('Connect Error ('.mysqli_connect_errno().')'.mysqli_connect_errno());
			
		}
		else{
			$sql = "INSERT INTO employee (employee_id,first_name,last_name,gender,salary,date_of_birth) values ('$employee_id','$first_name','$last_name','$gender','$salary','$date_of_birth')";
			if ($econn->query($sql)) {
				echo "New Record is Inserted Sucessfully";
			}
			else{
				echo "Error: ". $sql . "<br>". $econn->error;
				
			}
			$econn->close(); 
			
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


?>
