<?php
	include "connection.php";
	$username=$_POST['username'];
	$password=$_POST['passwd'];

	$cek_data=mysqli_query($conn,"SELECT * FROM users WHERE username='$username' and passwd='$password'");
	$cek = mysqli_num_rows($cek_data);
	
	if ($cek>0){
		echo "SUCCESSFULLY LOGIN";
	}else{
		echo "Wrong Account ID or Username";
	}
?>
