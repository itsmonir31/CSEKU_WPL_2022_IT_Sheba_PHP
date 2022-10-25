<?php
	session_start();
	include('dbConnect.php');
    if (!isset($_SESSION['login'])) {
        header('location: login.php');
    }

          
if (isset($_GET)) {

    echo
          "
          <script>
            alert('Are you sure?');
          </script>
          ";
    // $hemail = $_SESSION["usr_email"]; //he will hire
    // echo $hemail;
    $hiring_id = $_GET["hiring_id"];  //he would be hired
    // echo $eemail;
    // $demand = $_POST["amount"];
    // $note = $_POST["note"];


    $stmt = "DELETE FROM `hire_user` WHERE h_id = '$hiring_id'";


    if (mysqli_query($conn,$stmt)) {
        header('location: profile.php');
        $_SESSION['edit_msg'] = "Succesful Deletion.";
        $_SESSION['edit_msg_type'] = "success";
    }else{
        $_SESSION['edit_msg'] = "Server Problem";
        $_SESSION['edit_msg_type'] = "info";
        header('location: profile.php');
	}

}

?>
