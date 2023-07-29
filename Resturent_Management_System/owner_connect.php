<?php

$owner_id = filter_input(INPUT_POST, 'owner_id');
$owner_name = filter_input(INPUT_POST, 'owner_name');
$address = filter_input(INPUT_POST, 'address');
$date_of_birth = filter_input(INPUT_POST, 'date_of_birth');

				


	if(!empty($owner_id)) {
	if(!empty($owner_name)) {
	if(!empty($address)){
	if(!empty($date_of_birth)){
		
		$host = "localhost";
		$dbusername = "root";
		$dbpassword = "";
		$dbname = "resturent_management_system";
		
		
		$oconn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
		
		
		if(mysqli_connect_error()) {
			die('Connect Error ('.mysqli_connect_errno().')'.mysqli_connect_errno());
			
		}
		else{
			$sql = "INSERT INTO owner (owner_id,owner_name,address,date_of_birth) values ('$owner_id','$owner_name','$address','$date_of_birth')";
			if ($oconn->query($sql)) {
				echo "New Record is Inserted Sucessfully";
				header("Location: owner.php");
				die;
			}
			else{
				echo "Error: ". $sql . "<br>". $oconn->error;
				
			}
			$oconn->close(); 
			
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
