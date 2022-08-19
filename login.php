<?php
	require('db.php');
	session_start();
	if(isset($_POST['username'])){
		$username=stripslashes($_REQUEST['username']);

		$password=stripslashes($_REQUEST['password']);

		$username=mysqli_real_escape_string($con,$username);
		$password=mysqli_real_escape_string($con,$password);

		$query = "SELECT * FROM `reg_user` WHERE username='$username' AND password ='".md5($password). "'";

		$result = mysqli_query($con,$query) or die(mysqli_error());
		$rows = mysqli_num_rows($result);

		if($rows == 1){
			$_SESSION['username']=$username;
			header("Location:dashboard.php");
		}
	

		else{echo"<div class='form'> <h3>user/pass Not connect</h3>
			<br>click here to <a href='index.php'>Login</a></div>";

		}
	}
	
	
?>