<?php
	// print_r($_POST);
	$conn = new mysqli("localhost","root","","my-sms");
	if(empty($_POST['con_grid'])){
		echo "Please Select Group Name";
	}
	else if(empty($_POST['con_name'])){
		echo "Please Enter  Name";
	}
	else if(empty($_POST['con_mobile'])){
		echo "Please Enter Mobile Number";
	}
	else{

		$grid = $conn->real_escape_string(strip_tags(trim($_POST['con_grid'])));
		$name = $conn->real_escape_string(strip_tags(trim($_POST['con_name'])));
		$mobile = $conn->real_escape_string(strip_tags(trim($_POST['con_mobile'])));

		$q = "insert into sms_contact (con_grid,con_name,con_mobile) values ('$grid','$name','$mobile')";
		// echo $q;
		$conn->query($q) or die ($conn->error);
		echo "ok";
	}
?>