<?php
	session_start();
	include('dbConnect.php');
    if (!isset($_SESSION['login'])) {
        header('location: login.php');
    }


if (isset($_POST)) {

    $_GET['id'];


	$qry = "SELECT* FROM users WHERE email = '$email' ";

	$res = mysqli_query($conn, $qry);

	$num = mysqli_num_rows($res);

	if ($num > 1) {
		header('location: signup.php');
		$_SESSION['message'] = "This email already used.";
		$_SESSION['msg_type'] = "danger";
	}else if($password == $cpassword){
		$enc = new enc();
		$password1 = $enc->encry($password, 5);

		$stmt = "INSERT INTO `users` (`id`, `name`, `email`, `password`, `type`) VALUES (NULL, '$name', '$email', '$password1', '$type');";
		$stmt2 = "INSERT INTO `user_info`(`u_id`, `email`, `tag_line`, `address`, `about`, `web`, `fb`, `twt`) VALUES (null,'$email','You tag line','Where are you from?','Write about yourself','https://google.com/','https://facebook.com/','https://twitter.com/');";
		$stmt3 = "INSERT INTO `pro_img`(`pi_id`, `email`, `url`) VALUES (NULL,'$email','img/avatar.jpeg');";


		if (mysqli_query($conn,$stmt)) {

			mysqli_query($conn,$stmt2);
			mysqli_query($conn,$stmt3);
			header('location: profile.php');
			$_SESSION['login'] = true;
			$_SESSION['message'] = $email;
			$_SESSION['usr_email'] = $email;
			$_SESSION['msg_type'] = "success";
		}else{
			header('location: signup.php');
			$_SESSION['message'] = "Server problem. We are SORRY! 😌";
			$_SESSION['msg_type'] = "warning";
		}
				
	}else{
		header('location: signup.php');
		$_SESSION['message'] = "Password not matched. 😌";
		$_SESSION['msg_type'] = "info";
	}

}

?>
