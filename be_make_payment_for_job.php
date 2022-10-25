<?php
	session_start();
	include('dbConnect.php');
    $email = $_SESSION['usr_email'];


if (isset($_POST)) {
	$job_id = $_POST['job_id'];
    $bidder_email = $_POST['bidder_mail'];
	$bkash = $_POST['bkash_no'];
	$amount = $_POST['amount'];

    // echo $job_id.$bkash.$amount.$bidder_email;


	$qry = "SELECT * FROM `jobs` where job_id='$job_id';";

	$res = mysqli_query($conn, $qry);

	$num = mysqli_num_rows($res);
    //alert($num);

	if ($num >= 1) {
		$stmt = "UPDATE `jobs` SET `customer_payment`='$amount', `bkash_no`='$bkash', `assigned_email`='$bidder_email' WHERE job_id='$job_id';";


		if (mysqli_query($conn,$stmt)) {
echo "Success";
			// header('location: profile.php');
			// $_SESSION['edit_msg'] = "Successfully Paid";
			// $_SESSION['edit_msg_type'] = "success";
		}else{
            echo "fail-1";
			// header('location: profile.php');
			// $_SESSION['edit_msg'] = "Server problem. We are SORRY! 😌";
			// $_SESSION['edit_msg_type'] = "warning";
		}
				
	}else{
        echo "fail-2";
		// header('location: profile.php');
		// $_SESSION['edit_msg'] = "Something Went Wrong";
		// $_SESSION['edit_msg_type'] = "info";
	}

}

?>
