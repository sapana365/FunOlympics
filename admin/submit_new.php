<?php
    include('includes/config.php');

if(isset($_POST['submit_password']) && $_GET['key'] && $_GET['reset'])
{
  $email=$_POST['AdminEmailId'];
  $pass=$_POST['AdminPassword'];
  
  $select=mysqli_query("update tbladmin set AdminPassword='$pass' where AdminEmailId='$email'");
}
?>