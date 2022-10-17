<?php 
  session_start();
  if (!isset($_GET['id'])) {
    header('location: work.php');
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Job view</title>
    <link rel="stylesheet" href="css/header.css" />
    <link rel="stylesheet" href="css/job_view.css" />
    <link rel="stylesheet" href="css/alert.css" />
    <!-- <link rel="stylesheet" href="css/login.css" /> -->
  </head>
  <body>
    <?php 
      include('nav.php'); 
      include('dbConnect.php');

        $job_id = $_GET['id'];
        // echo $job_id;
        $sql = "SELECT* FROM jobs WHERE job_id = $job_id ";
        $qry = mysqli_query($conn,$sql);
        $rows = mysqli_fetch_assoc($qry);
    ?>

  <div class="body_">
    <div class="section__header">
      <div class="title__container">
        <h2 class="heading">Problem:</h2>
        <h1><span>Title</span> <?php echo ": ".$rows["prblm_name"]; ?></h1>
        <h1><span>Details:</span> </h1>
        <h1><?php echo $rows["details"]; ?></h1>
        <h1><span>Problem Type</span> <?php echo ": ".$rows["prblm_type"]; ?></h1>
        <h1><span>Devices Type</span> <?php echo ": ".$rows["dev_type"]; ?></h1>
        <h1><span>Devices Model</span> <?php echo ": ".$rows["dev_model"]; ?></h1>
      </div>

      <br><br>
      <div class="title__container">
        <h2 class="heading">Location:</h2>
        <h1><span>Street</span> <?php echo ": ".$rows["street"]; ?></h1>
        <h1><span>Street No.</span> <?php echo ": ".$rows["street_number"]; ?></h1>
        <h1><span>Postal Code</span> <?php echo ": ".$rows["post_code"]; ?></h1>
        <h1><span>City</span> <?php echo ": ".$rows["city_name"]; ?></h1>
      </div>


      <br><br>
      <div class="title__container">
        <h2 class="heading">Budget:</h2>
        <h1><span>Maximum Budget</span> <?php echo ": ".$rows["max_budget"]; ?></h1>
        <h1><span>Negotiable:</span> 
        <?php if($rows["negotiable"] == 1){
          echo "Yes";
        }else {
          echo "No";
        } ?></h1>
      </div>


      <br><br><br>
      <div class="title__container apply">
        <?php
                if (isset($_SESSION['bid_message'])){ ?>
                <div class="alert alert-<?=$_SESSION['bid_msg_type']?>">
            <?php
                echo $_SESSION['bid_message'];
                unset($_SESSION['bid_message']);
                unset($_SESSION['bid_msg_type']);
            ?>
                </div><br>
            <?php }?>
        <h2 class="heading">Apply on this Job:</h2>
            <form action="be_bid.php" class="form" method="POST">
            
            <?php if ($rows["negotiable"] == 0) { ?>
              <div class="form__div">
                <input type="number" class="form__input" placeholder=" " name="amount" >
                <label for="" class="form__label" style="color:gray;">Your Demand   ---you can demand less or equal <?php echo $rows["max_budget"]?> BDT---</label>
              </div>
            <?php }else{ ?>
              <div class="form__div">
                <input type="number" class="form__input" placeholder=" " name="amount">
                <label for="" class="form__label">Your Demand?</label>
              </div>
            <?php } ?>

            
            

            <div class="form__div">
                <input type="text" class="form__input" placeholder=" " name="note">
                <input type="hidden" class="form__input" placeholder=" " name="job_id" value="<?php echo $rows["job_id"]?>">
                <label for="" class="form__label">Notes</label>
            </div>
            <!-- <p>Forget password... <a href="forget_password.php">Reset</a> </p><br> -->

            <input type="submit" class="form__button" value="SUBMIT"><br>
            
        </form>
      </div>


      
    </div>
  </body>
</html>
