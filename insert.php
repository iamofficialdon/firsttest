<?php  
$conn=mysqli_connect('localhost','root','','vtu_db');
if($conn===false){
	die("ERROR:could not connect" . mysqli_connect_error());
}
$username=$_REQUEST['username'];

$password=$_REQUEST['password'];

$sql= "INSERT INTO `reg_user` VALUES('','$username',  '".md5($password)."')";
if(mysqli_query($conn,$sql)){
	echo "<script> alert ('Record Submitted Successfully');
	window.location.href='index.php';
	</script>";
}
else {
	echo"ERROR: oops!Sorry Not Submitted". mysqli_error($conn);
} 
mysqli_close($conn);





















?>