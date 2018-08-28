<?php
	$conn = new mysqli("localhost","root","","my-sms");
	require_once 'database.php';
	// print_r($_POST);
	$id = $_POST['frid'];
	// echo $id;

	$result = sms($conn, "select * from sms_contact where con_grid='$id'");
	// echo "<pre>";
	// print_r($result);

	if(is_array($result)):
		foreach($result as $val):		
?>
	<?php
		echo "<a href='#'>"; echo $val->con_name; echo "<a/>";
		echo "<br/>";
	?>

<?php
	endforeach;
	endif;
?>
