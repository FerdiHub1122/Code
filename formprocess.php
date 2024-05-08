<?php
	include('config.php');
		session_start();
			$email = $ POST['uemail'];
			$pass = $ POST['pass'];
			$upass = md5($pass);

		$sql = "SELECT * from users where email='$email' and userpass = '$upass'";
		$result = $conn -> query($sql);
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
		$count = mysqli_num_rows($result);
		
		if ($count ==1) {
			$_SESSION['uemail'] = $email;
			header('location: dashboard.php');
		}else{
		echo "Login Failed";
		}
?>