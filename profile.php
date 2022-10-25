<?php 
        session_start();
        if (!isset($_SESSION['login'])) {
            header('location: login.php');
        }
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="shortcut icon" href="img/favicon_.png" />
    <link rel="stylesheet" href="./css/profile.css">
    <link rel="stylesheet" href="./css/alert.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="./css/bid_list.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/7a76d52362.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php 
        include('nav.php'); 
        include('dbConnect.php');

        $email = $_SESSION['usr_email'];
        // echo $email;
        $sql = "SELECT* FROM users natural join pro_img natural join user_info WHERE email = '$email' ";
        $qry = mysqli_query($conn,$sql);
        $rows = mysqli_fetch_assoc($qry);    
    ?>

    <div class="container">
        <div class="con1">
            <?php include('side_bar.php')?>
        </div>

        <div class="con2">
            <?php 
                if ($rows['type'] == 1) {
                    $sql1 = "SELECT* FROM jobs WHERE email = '$email'";?>
                    <h2 class="heading">My Posted Job</h2>
                <?php }elseif($rows['type'] == 2){
                    $sql1 = "SELECT* FROM jobs WHERE assigned_email = '$email' and j_status=1"?>
                    <h2 class="heading">My Onging Job</h2>
                <?php }
                    $qry1 = mysqli_query($conn,$sql1);?>
                <?php include('posted_job.php');
                
                    if($rows['type'] == 2) {?>
                        <br><br><h2 class="heading">My Hiring Offers</h2>
                        <?php include('hiring_list.php');
                    }elseif($rows['type'] == 1){?>
                        <br><br><h2 class="heading">My Hiring Request</h2>
                        <?php include('hiring_list.php');
                    }?>
        </div>

        
    <!-- <div class="info1">
    </div>
    <div class="info2">
        <div class="footer-widget">
                                <div class="footer-widget-heading">
                                    <h3>Useful Links</h3>
                                </div>
                                <ul>
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">about</a></li>
                                    <li><a href="#">services</a></li>
                                    <li><a href="#">portfolio</a></li>
                                    <li><a href="#">Contact</a></li>
                                    <li><a href="#">About us</a></li>
                                    <li><a href="#">Our Services</a></li>
                                    <li><a href="#">Expert Team</a></li>
                                    <li><a href="#">Contact us</a></li>
                                    <li><a href="#">Latest News</a></li>
                                </ul>
                            </div>
    </div>
    <div class="info3">
        <div class="social-footer">
            <div class="footer-social-icon">
                <span class="span">Follow us</span>
                <a href="#"><img src="img/ico/fb.png" style="width:40px;"></a>
                <a href="#"><img src="img/ico/yt.png" style="width:40px;"></a>
                <a href="#"><img src="img/ico/twt.png" style="width:40px;"></a>
                <a href="#"><img src="img/ico/ins.png" style="width:40px;"></a>
            </div>
        </div>
        
    </div>
    <div class="foot">
            <div class="copyright-area">
                <div class="copyright-text">
                    <p>Copyright &copy; 2022, All Right Reserved <a href="https://www.facebook.com/CLUSTER.KU">CLUSTER</a></p>
                </div>
            </div>
    </div> -->
    </div>


    
</body>

</html>