<?php
	include('admin/includes/config.php');

	session_start();
	if(isset($_GET['code'])){
	$user=$_GET['uid'];
	$code=$_GET['code'];
 
	$query=mysqli_query($con,"select * from tbladmin where id='$user'");
	$row=mysqli_fetch_array($query);
 
	if($row['code']==$code){
		//activate account
		mysqli_query($con,"update tbladmin set verify='1' where id='$user'");
		?>
		<p>Account Verified!</p>
		<p><a href="paymentindex.php">Subscribe Now</a></p>
		<?php
	}
	else{
		$_SESSION['sign_msg'] = "Something went wrong. Please sign up again.";
  		header('location:signup.php');
	}
	}
	else{
		header('location:index.php');
	}
?>