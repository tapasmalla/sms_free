<?php
	$conn = new mysqli("localhost","root","","my-sms");
	// print_r($_POST);
	if(empty($_POST['user_name'])){
		echo "Please Enter Name";
	}
	else if(empty($_POST['user_email'])){
		echo "Please Enter Email Id";
	}
	else if(empty($_POST['user_mobile'])){
		echo "Please Enter Mobile No";
	}
	else if(empty($_POST['user_password'])){
		echo "Please Enter Password";
	}
	else if($_POST['user_cpassword'] != $_POST['user_password']){
		echo "Password Missmatch";
	}
	else{

		$uname = $conn->real_escape_string(strip_tags(trim($_POST['user_name'])));
		$uemail = $conn->real_escape_string(strip_tags(trim($_POST['user_email'])));
		$umobile = $conn->real_escape_string(strip_tags(trim($_POST['user_mobile'])));
		$upass = sha1($conn->real_escape_string(strip_tags(trim($_POST['user_password']))));

		$q = "select count(user_email) as cnt from sms_login where user_email='$uemail'";
		// echo $q;
		$res = $conn->query($q) or die ($conn->error);
		print_r($res);
		$ans = $res->fetch_array(MYSQLI_ASSOC);
		print_r($ans);
		if($ans['cnt'] > 0){
			echo "Email Id Exist";
		}
		else{
		$q = "insert into sms_login (user_name,user_email,user_mobile,user_password) value ('$uname','$uemail','$umobile','$upass')";
		// echo $q;
		$conn->query($q) or die ($conn->error);
		echo "ok";
		}	
	 }
?>