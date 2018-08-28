<?php
	$conn = new mysqli("localhost","root","","my-sms");
	require_once 'database.php';
	// print_r($_POST);
	$id = $_POST['msgid'];
	// echo $id;
	$result = sms($conn, "select * from sms_message where msg_caid='$id'");
	// print_r($result);
	if(is_array($result)):

		foreach($result as $val):
			// print_r($val);	
?>
	<?php
		echo "<a href='#'>"; echo $val->msg_text; echo "<a/>";
		echo "<br/>";
	?>

<?php

	endforeach;
	endif;
?>