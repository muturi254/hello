<?php
require_once ('connect.php');

if (isset($_POST['login'])) {
	# code...
	if (!empty($_POST['name']) && !empty($_POST['password'])) {
		$username = $_POST['name'];
		$password = $_POST['password'];
		//escape sql injection
		$username = mysqli_real_escape_string($conn, $username);
		$password = mysqli_real_escape_string($conn, $password);
		//select db and query

		$sql = "SELECT * FROM login WHERE userName = '$username' AND pass = '$password'";
		$result = mysqli_query($conn, $sql);
		$count = mysqli_num_rows($result);

		  if($count == 1){
		    header('location: watch.php');
		  }else{
		    $fmsg = "User does not exist";
		  }
	}
}	
?>