<?php
	$conn = new mysqli("localhost","root","","my-sms");
	// print_r($_POST);
	session_start();
	// echo session_id();
	if(empty($_POST['user_email'])){
		echo "Please Enter Email Id ";
	}
	else if(empty($_POST['user_password'])){
		echo "Please Enter Password";
	}
	else{
		$uemail = $conn->real_escape_string(strip_tags(trim($_POST['user_email'])));
		$upass = sha1($conn->real_escape_string(strip_tags(trim($_POST['user_password']))));

		$q = "select * from sms_login where user_email='$uemail'";
		// echo $q;
		$res = $conn->query($q) or die ($conn->error);
		// print_r($res);
		if($res->num_rows > 0){
			$ans = $res->fetch_array(MYSQLI_ASSOC);
			// print_r($ans);
			$dbpass = $ans['user_password'];
			// print_r($dbpass);
			if($dbpass == $upass){
				$_SESSION['login_id'] = $ans['user_id'];
				$_SESSION['login_name'] = $ans['user_name'];
				$_SESSION['login_email'] = $ans['user_email'];
				$_SESSION['login_mobile'] = $ans['user_mobile'];
				echo "ok";
			}
			else{
				echo "Invalid Password";
			}
		}
		else{

		}
	}

?>