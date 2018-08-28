<?php

	session_start();
	if(!isset($_SESSION['login_id'])){
		header("location:index.php");
	}
	
	require_once 'header.php';
?>
	<div class="mid_part">
		<div class="container">
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<h2>Add <span class="orange_color">Contact Person</span></h2>
				<form id="contact_form">
					<select name="con_grid">
						<option value="">Please Select</option>
						<?php
							$record = sms($conn, "select * from sms_group");
							if(is_array($record)):
								foreach($record as $val):
						?>
							<option value="<?php echo $val->gr_id ?>">
								<?php
									echo $val->gr_name;
								?>
							</option>

						<?php
							endforeach;
							endif;
						?>
					</select>
					<input type="text" name="con_name" placeholder="Name">
					<input type="text" name="con_mobile" placeholder="Mobile">
					<button type="button" class="btn btn-primary btn_contact">Add Contact</button>
					
				</form>
				<div class="msg">hello</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<h2><CENTER></CENTER>Contact <span class="orange_color">Person</span></h2>
					
							<?php
								$record = sms($conn, "select * from sms_contact");
								if(is_array($record)):
									foreach($record as $val):
							?>
							<ul class="contact">
								<li>
									<span class="glyphicon glyphicon-search" aria-hidden="true">
										<?php echo $val->con_name; ?>
									</span>
									
									<span class="glyphicon glyphicon-earphone pull-right" aria-hidden="true">
									<?php echo $val->con_mobile; ?>	
									</span>
								</li>	
							</ul>

							<?php
								endforeach;
								endif;
							?>

			</div>
		</div>
	</div>


<?php
	require_once 'footer.php';
?>