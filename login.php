<?php
	require_once 'header.php';

?>
	<div class="mid_part">
		<div class="container">
			<div class="col-lg-6">
				<h1 class="head">Login</h1>
					<div class="register">	
					<form id="login_form">
						<label>Email<input type="text" name="user_email"></label>
						<label>Password<input type="password" name="user_password"></label>
						<button type="button" class="btn btn-primary btn_login">Login</button>
					</form>
					<div class="msg1">Hello</div>
				</div>
				<h4><a href="">Forgot Password</a></h4>
			</div>

			<div class="col-lg-6">
				
					<h1 class="head">Register</h1>
					<div class="register">	
					<form id="register_form">
						<label>Name<input type="text" name="user_name"></label>
						<label>Email<input type="text" name="user_email"></label>
						<label>Mobile<input type="text" name="user_mobile"></label>
						<label>Password<input type="password" name="user_password"></label>
						<label>Confirm Password<input type="password" name="user_cpassword"></label>
						<button type="button" class="btn btn-primary btn_register">Submit</button>
					</form>
					<div class="msg">Hello</div>
				</div>
			</div>

			
		</div>
	</div>
<?php

	require_once 'footer.php';
?>