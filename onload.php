<?php


 $output = "";
// if (isset($_POST["hire_id"])) {
    

    include('dbConnect.php');

    $id = $_POST['hire_id'];
    echo $id;
    // echo $email;
    $sql__ = "SELECT * from hire_user WHERE h_id = '$id';";
    $qry__ = mysqli_query($conn,$sql__);
    $rows__ = mysqli_fetch_assoc($qry__);  

    $output .= $rows__['demand'];
// }


echo $output;



?>