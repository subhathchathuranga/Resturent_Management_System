<?php

$supplier_id = filter_input(INPUT_POST, 'supplier_id');
$supplier_name = filter_input(INPUT_POST, 'supplier_name');
$item_name = filter_input(INPUT_POST, 'item_name');
$quantity = filter_input(INPUT_POST, 'quantity');
$price = filter_input(INPUT_POST, 'price');
$date_of_bought = filter_input(INPUT_POST, 'date_of_bought');




	if(!empty($supplier_id)) {
	if(!empty($supplier_name)) {
	if(!empty($item_name)){
	if(!empty($quantity)){
	if(!empty($price)){
	if(!empty($date_of_bought)){
		
		$host = "localhost";
		$dbusername = "root";
		$dbpassword = "";
		$dbname = "resturent_management_system";
		
		
		$vconn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
		
		
		if(mysqli_connect_error()) {
			die('Connect Error ('.mysqli_connect_errno().')'.mysqli_connect_errno());
			
		}
		else{
			$sql = "INSERT INTO other_supplies (supplier_id,supplier_name,item_name,quantity,price,date_of_bought) values ('$supplier_id','$supplier_name','$item_name','$quantity','$price','$date_of_bought')";
			if ($vconn->query($sql)) {
				echo "New Record is Inserted Sucessfully";
			}
			else{
				echo "Error: ". $sql . "<br>". $vconn->error;
				
			}
			$vconn->close(); 
			
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
