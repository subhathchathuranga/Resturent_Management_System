<?php

$payment_id = filter_input(INPUT_POST, 'payment_id');
$method = filter_input(INPUT_POST, 'method');
$pay_day = filter_input(INPUT_POST, 'pay_day');
$pay_amount = filter_input(INPUT_POST, 'pay_amount');




	if(!empty($payment_id)) {
	if(!empty($method)) {
	if(!empty($pay_day)){
	if(!empty($pay_amount)){
		
		$host = "localhost";
		$dbusername = "root";
		$dbpassword = "";
		$dbname = "resturent_management_system";
		
		
		$pconn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
		
		
		if(mysqli_connect_error()) {
			die('Connect Error ('.mysqli_connect_errno().')'.mysqli_connect_errno());
			
		}
		else{
			$sql = "INSERT INTO payment (payment_id,method,pay_day,pay_amount) values ('$payment_id','$method','$pay_day','$pay_amount')";
			if ($pconn->query($sql)) {
				echo "New Record is Inserted Sucessfully";
			}
			else{
				echo "Error: ". $sql . "<br>". $pconn->error;
				
			}
			$pconn->close(); 
			
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
