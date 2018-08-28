$(document).ready(function(){

	$(".btn_register").click(function(){
		// alert(1)
		// console.log($("#register_form"));
		$.post("register_action.php", $("#register_form").serialize(),function(response){
			// console.log(response);
			if(response=="ok"){
				$(".msg").html("You are succesfully registered");
				$("#register_form")[0].resate();
			}
			else{
			$(".msg").html(response);
			}
		})
	})

	$(".btn_login").click(function(){
		// alert(1)
		$.post("login_action.php",$("#login_form").serialize(),function(response){
			// console.log(response)
			if(response == "ok"){
				window.location.href="index.php";
			}
			else{
				$(".msg1").html(response);
			}
		})
	})

	// $(".category").hide();	
	// $(".group").hide();

	$(".btn_top_category").click(function(){
		// alert(1)
		$(".category").show();
		$(".group").hide();
	})

	$(".btn_top_group").click(function(){
		// alert(2)
		$(".category").hide();
		$(".group").show();
	})

	$(".btn_category").click(function(){
		// alert(5)
		$.post("category_action.php",$("#category_form").serialize(),function(response){
			console.log(response);
			$(".msg").html(response);
		})
	})

	$(".btn_group").click(function(){
		// alert(21)
		$.post("group_action.php",$("#group_form").serialize(),function(response){
			console.log(response);
			$(".msg1").html(response);
		})
	})

	$(".btn_msg").click(function(){
		// alert(2)
		$.post("message_action.php", $("#message_form").serialize(),function(response){
			// console.log(response);
			if(response == "ok"){
				$(".msg").html("Your Message Is Saved");
				$("#message_form")[0].reset();
			}
			else{
				$(".msg").html(response);
			}
		})
	})

	$(".btn_contact").click(function(){
		// alert(0)
		$.post("contact_action.php", $("#contact_form").serialize(),function(response){
			// console.log(response);
			$(".msg").html(response);
		})
	})


	$(".btn_cgroup").click(function(conName){
		// alert(1)
		// console.log(conName);
		conName.preventDefault();
		ans = $(this).attr("for");
		// alert(ans);
		// alert("frid="+ans);
		$.ajax({
			type:"post",
			data:"frid="+ans,
			url:"filter_name.php",
			success:function(response){
				console.log(response);
				$(".msg1").html(response);
			},
			error:function(errResponse){
				console.log(errResponse);
			}
		})

	})


	$(".btn_cmessage").click(function(conMessage){
		// alert(1)
		conMessage.preventDefault();
		ans = $(this).attr("for");
		// alert(ans);
		// alert("msgid="+ans)
		$.ajax({
			type:"post",
			data:"msgid="+ans,
			url:"filter_message.php",
			success:function(response){
				// console.log(response);
				$(".msg2").html(response);
			},
			error:function(errResponse){
				
			}
		})

	})


	$(".btn_name").click(function(name){
		// alert(1)
		name.preventDefault();
		ans = $(this);
		$.ajax({
			type:"post",
			data:"ans",
			url:"filter_sms.php",
			success:function(response){
				console.log(response);
			},
		})

	})


});