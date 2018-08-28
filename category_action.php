<?php 
	// print_r($_POST);
	$conn = new mysqli("localhost","root","","my-sms");
	if(empty($_POST['category_name'])){
		echo "Please Enter Category";
	}
	else{
		$category = $conn->real_escape_string(strip_tags(trim($_POST['category_name'])));
		$q = "insert into sms_category(ca_name) value('$category')";
		// echo $q;
		$conn->query($q) or die ($conn->error);
		echo "ok";
	}
 ?>