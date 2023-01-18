<!DOCTYPE html>
<html>
<head>
	<title>Sign up Form with Email Verification</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Open+San">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" href="register.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<!--<style>
	#signup_form{
		width:350px;
		position:relative;
		top:50px;
		margin: auto;
		padding: auto;
	}
</style>-->
</head>
<body>
<div class="container">

	<div id="form" class="well">
		<h2><img src="https://img.icons8.com/color/48/undefined/user.png"/> <b>Sign Up</b></h2>
		<hr>
		
			<div class="form-element">
				<form method="POST" action="register.php">
				<b>Username</b> <input type="text" name="AdminUserName" class="form-control" placeholder="Enter your full name" required>
				<b>Email</b> <input type="text" name="AdminEmailId" class="form-control" placeholder="Enter your email"	 required>
				<b>Phone</b> <input type="text" name="phone" class="form-control" placeholder="Enter your phone number" required>
				<b>Password</b> <input type="password" id="password"name="AdminPassword" placeholder="Enter your password" minlength="8" required>
					
					<div class="g-recaptcha" data-sitekey="6LcoU0kgAAAAADGG_f__JEk67taiqV1q03vp_Uab"></div>
				<button type="submit"  name ="register" id="register" class="button"> Sign Up</button> 
				<div class="link">Account already created?<a href="admin/login.php"><b>Login now</b></a></div>
				</form>
			</div>
		
		
		<?php
			session_start();
			if(isset($_SESSION['sign_msg'])){
				?>
				<div style="height: 40px;"></div>
				<div class="alert alert-danger">
					<span>
					<?php echo $_SESSION['sign_msg'];
						unset($_SESSION['sign_msg']); 
					?>
					</span>
				</div>
				<?php
			}
		?>
 
	</div>
	
</div>
	<script>
			function getSubCat(val) {
			$.ajax({
			type: "POST",
			url: "get_subcategory.php",
			data:'catid='+val,
			success: function(data){
				$("#subcategory").html(data);
			}
			});
			}
			</script>

</div

</body>
</html>


