<?php

$hotel_id = filter_input(INPUT_POST, 'hotel_id');
$manager_id = filter_input(INPUT_POST, 'manager_id');
$resturent_name = filter_input(INPUT_POST, 'resturent_name');
$email = filter_input(INPUT_POST, 'email');
$address = filter_input(INPUT_POST, 'address');
$annual_incone = filter_input(INPUT_POST, 'annual_incone');

										

	if(!empty($hotel_id)) {
	if(!empty($manager_id)) {
	if(!empty($resturent_name)){
	if(!empty($email)){
	if(!empty($address)){
	if(!empty($annual_incone)){
		
		$host = "localhost";
		$dbusername = "root";
		$dbpassword = "";
		$dbname = "resturent_management_system";
		
		
		$rconn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
		
		
		if(mysqli_connect_error()) {
			die('Connect Error ('.mysqli_connect_errno().')'.mysqli_connect_errno());
			
		}
		else{
			$sql = "INSERT INTO resturent(hotel_id,manager_id,resturent_name,email,address,annual_incone) values ('$hotel_id','$manager_id','$resturent_name','$email','$address','$annual_incone')";
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
