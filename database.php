<?php

	function sms($conn, $str){
		// $str = "select * from sms_group";
		$res = $conn->query($str) or die ($conn->error);
		// print_r($res);

		if($res->num_rows > 0){
			while($ans = $res->fetch_object()){
				// echo "<pre>";
				// print_r($ans);
				$data[] = $ans;
			}
			// print_r($data);
			return $data;
		}
		else{
			return 0;
		}

	}

?>