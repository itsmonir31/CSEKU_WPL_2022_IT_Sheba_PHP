<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <!-- <link rel="stylesheet" href="css/login.css"> -->
    <link rel="stylesheet" href="css/posted_job.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="..//css/header.css">
</head>
<body>

    <?php include('..//dbConnect.php'); 
    include('..//nav.php');

    $r1 = mysqli_query($conn, "SELECT * from users");
    $r2 = mysqli_query($conn, "SELECT * from jobs");
    $r3 = mysqli_query($conn, "SELECT * from jobs where j_status = 1");
    $r4 = mysqli_query($conn, "SELECT * from jobs where j_status = 2");

    $c1 = mysqli_num_rows($r1);
    $c2 = mysqli_num_rows($r2);
    $c3 = mysqli_num_rows($r3);
    $c4 = mysqli_num_rows($r4);

?>
<!-- <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css"> -->
      <!-- partial -->
      <div class="bg-ash">
        <div class="content-wrapper">

          <?php 

              if (isset($_SESSION['message'])){ ?>
                <div class="alert alert-<?=$_SESSION['msg_type']?>">
                  <?php
                    echo $_SESSION['message'];
                  ?>
                </div>
             <?php }?>

<!-- <div class="cont">
    <div class="card_ap">
        <div class="container">
            <h4><b>Total User</b></h4>
            <p><?php echo $c1 ?></p>
        </div>
    </div> -->

    <!-- <div class="card_ap">
        <div class="container">
            <h4><b>Total Posted Job</b></h4>
            <p><?php echo $c2 ?></p>
        </div>
    </div>

    <div class="card_ap">
        <div class="container">
            <h4><b>Total Completed Job</b></h4>
            <p><?php echo $c4 ?></p>
        </div>
    </div>

    <div class="card_ap">
        <div class="container">
            <h4><b>Ongoing Job</b></h4>
            <p><?php echo $c3 ?></p>
        </div>
    </div>
</div> -->


<div class="cont">
    
    <div class="card_ap">
        <div class="container">
            <h4><b><a href="posted_jobs.php">Total User </a></b></h4>
            <p><?php echo $c1 ?></p>
        </div>
    </div>
   

    <div class="card_ap">
        <div class="container">
            <h4><b>Total Posted Job</b></h4>
            <p><?php echo $c2 ?></p>
        </div>
    </div>

    <div class="card_ap">
        <div class="container">
            <h4><b>Total Completed Job</b></h4>
            <p><?php echo $c4 ?></p>
        </div>
    </div>

    <div class="card_ap">
        <div class="container">
            <h4><b>Ongoing Job</b></h4>
            <p><?php echo $c3 ?></p>
        </div>
    </div>
</div>


