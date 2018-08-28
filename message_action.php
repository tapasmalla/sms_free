<?php
	$conn = new mysqli("localhost","root","","my-sms");

	// print_r($_POST);
	if(empty($_POST['msg_caid'])){
		echo "Please Select Category";
	}
	else if(empty($_POST['msg_text'])){
		echo "Please Enter Your Message";
	}
	else{
		$caid = $conn->real_escape_string(strip_tags(trim($_POST['msg_caid'])));
		$text = $conn->real_escape_string(strip_tags(trim($_POST['msg_text'])));

		$q = "insert into sms_message (msg_caid,msg_text) values ('$caid','$text')";
		// echo $q;
		$conn->query($q) or die ($conn->error);
		echo "ok";
	}
?>