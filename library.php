<?php

	session_start();
	if(!isset($_SESSION['login_id'])){
		header("location:index.php");
	}
	require_once 'header.php';
?>
	<div class="mid_part">
		<div class="container">
			<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
				<h2>Library</h2>

					<?php
					$record = sms($conn, "select * from sms_category");
					if(is_array($record)):
						foreach($record as $val):

					?>
					<ul class="listdesign">
						<li><a href=""><?php echo $val->ca_name;  ?></a></li>
					</ul>

					<?php
					endforeach;
					endif;
					?>	
			</div>

			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<h2>Add <span class="orange_color">Library / Group</span></h2>
				<button type="button" class="btn btn-info btn_top_category">Category</button>
				<button type="button" class="btn btn-info btn_top_group">Group</button>
					<div class="message_area">
						<div class="category">
							<div class="register">	
							<form id="category_form">
								<label>Add Category<input type="text" name="category_name"></label>
								<button type="button" class="btn btn-primary btn_category">Add Category</button>
							</form>
							<div class="msg">Hello</div>
							</div>
						</div>

						<div class="group">
							<div class="register">	
							<form id="group_form">
								<label>Add Group<input type="text" name="group_name"></label>
								<button type="button" class="btn btn-primary btn_group">Add Group</button>
							</form>
							<div class="msg1">Hello</div>
							</div>
						</div>
					</div>	
			</div>

			<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
				<h2>Group</h2>

				<?php
					$record = sms($conn, "select * from sms_group");
					if(is_array($record)):
						foreach($record as $val):

				?>
				<ul class="listdesign">
					<li><a href=""><?php echo $val->gr_name;  ?></a></li>

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