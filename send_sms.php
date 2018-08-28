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
				<h3>Contact <span class="orange_color">Group</span></h3>
				<?php
					$record = sms($conn, "select * from sms_group");
					if(is_array($record)):
						foreach($record as $val):

				?>
				<ul class="list-group">
					<li class="list-group-item"><a href="#" class="btn_cgroup" for="<?php echo $val->gr_id; ?>">
						<?php echo $val->gr_name;  ?>
					</a></li>

				</ul>

				<?php
				endforeach;
				endif;
				?>

				<h3>Contact <span class="orange_color">Group</span></h3>
				<div class="msg1 btn_name"></div>

			</div>
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<h3>Send <span class="orange_color">SMS</span></h3>
				<form id="send_sms_form">
					<input type="text" name="name" placeholder="Add Contact Person"><br/><br/>
					<input type="int" name="mobile" placeholder="Add Mobile Number"><br/>
					<textarea></textarea>
				</form>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<h3>Message<span class="orange_color">Library</span></h3>
				<?php
					$record = sms($conn, "select * from sms_category");
					if(is_array($record)):
						foreach($record as $val):

				?>
					<ul class="list-group">
						<li class="list-group-item"><a href="#" class="btn_cmessage" for="<?php echo $val->ca_id; ?>">
							<?php echo $val->ca_name;  ?>
							
						</a></li>
					</ul>

				<?php
				endforeach;
				endif;
				?>	

				<h3>Contact <span class="orange_color">Group</span></h3>
				<div class="msg2"></div>
			</div>
		</div>
	</div>
<?php
	require_once 'footer.php';
?>