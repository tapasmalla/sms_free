<?php
	// print_r($_POST);
	$conn = new mysqli("localhost","root","","my-sms");
	if(empty($_POST['group_name'])){
		echo "Please Enter Group Name";
	}
	else{
		$group = $conn->real_escape_string(strip_tags(trim($_POST['group_name'])));
		$q = "insert into sms_group(gr_name) value('$group')";
		// echo $q;
		$conn->query($q) or die ($conn->error);
		echo "ok";
	}

?>