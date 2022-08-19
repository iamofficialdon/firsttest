<?php
	$con=mysqli_connect('localhost','root','','vtu_db');
	if(mysqli_connect_error()){
		echo "fail to connect to Database" . mysqli_connect_error();
	}
?>