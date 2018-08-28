<?php

	session_start();
	if(!isset($_SESSION['login_id'])){
		header("location:index.php");
	}
	
	require_once 'header.php';
	
?>
	<div class="mid_part">
		<div class="container">
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<h2>Create <span class="orange_color">Message</span></h2>
				
				<form id="message_form">
					<select name="msg_caid">
						<option value="">please select</option> 
						
							<?php
								$record = sms($conn, "select * from sms_category");
								// print_r($record);
								if(is_array($record)):
									foreach($record as $val):
							?>
								<option value="<?php echo $val->ca_id ?>">
									<?php
										echo $val->ca_name;
									?>
								</option>

							<?php
								endforeach;
								endif;

							?>
						
					</select>
					<br/>
					<br/>
					<textarea type="text" class="form-control" name="msg_text" rows="8" cols="30" maxlength="300"></textarea>
					<br/>

					<button type="button" class="btn btn-primary btn_msg">Add Message</button>
				</form>
				<div class="msg"></div>
			</div>

			<div class="col-lg-6"></div>
		</div>
	</div>

<?php
	require_once 'footer.php';
	
?>