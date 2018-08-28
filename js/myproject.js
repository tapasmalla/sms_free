$(document).ready(function(){
	$(".btn_register").click(function(){
		// alert(1);
		// console.log($("#register_form"));
		$.post("register_action.php",$("#register_form").serialize(),function(response){
			// console.log(response);
			$(".msg").html(response);
		})
	})

	/*********login btn********/ 

	$(".btn_login").click(function(){
		// alert(1);
		$.post("login_action.php",$("#login_form").serialize(),function(response){
			// console.log(response);
			if(response == "ok"){
				window.location.href="shopper.php";
			}
			else{
				$(".msg").html(response);
			}
		})
	})
});