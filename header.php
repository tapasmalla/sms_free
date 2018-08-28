<?php
	if(session_id() == ""){
		session_start();
	}
	$conn = new mysqli("localhost","root","","my-sms");
	require_once 'database.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<header>
	<!-- header -->
	<div class="container">
		<div class="col-lg-2">
			<a href="#"><img src="images/logo.png"></a>
		</div>
		<div class="col-lg-6">
			<ul class="menu">
				<li><a href="index.php">HOME</a></li>
				<li><a href="aboutus.php">ABOUT US</a></li>
				<li><a href="contactus.php">CONTACT US</a></li>
			</ul>
			
		
		</div>
		<div class="col-lg-4">
			<ul class="user">

				<?php
					if(!isset($_SESSION['login_id'])):
				?>
					<li><a href="login.php"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Login</a></li>
				<?php
					endif;
				?>

				<?php
					if(isset($_SESSION['login_id'])):
				?>
				<li><a href="logout.php"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Logout</a></li>
				<li><a href="#">Welcome (<?php echo $_SESSION['login_name']; ?>)</a></li>
				
				<?php
					endif;
				?>	
			</ul>
		</div>
	</div>
</header>
	<?php
		if(isset($_SESSION['login_id'])):
	?>
		<div class="sub_menu">
			<div class="container">
				<div class="col-lg-12">
					<ul>
						<li><a href="library.php">Library/group</a></li>
						<li><a href="create_message.php">Create Message</a></li>
						<li><a href="contact.php">Add Contact</a></li>
						<li><a href="send_sms.php">Send Sms</a></li>
						<li><a href="#">Group Sms</a></li>
					</ul>
				</div>
			</div>
		</div>
	<?php
	endif;
	?>	
	  
	<!-- end header -->