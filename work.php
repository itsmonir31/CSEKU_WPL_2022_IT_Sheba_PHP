<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Job</title>
    <link rel="stylesheet" href="./css/work.css" />
    <link rel="stylesheet" href="./css/nav.css" />
    <link rel="stylesheet" href="./css/header.css" />
  </head>
  <body>
    <?php 
        session_start();
        include('nav.php'); 
        include('dbConnect.php');

        // echo $email;
        $sql = "SELECT * FROM jobs";
        $qry = mysqli_query($conn,$sql);
        // $rows = mysqli_fetch_assoc($qry);    
    ?>

    <div id="wrapper">
        <?php 
        while ( $rows = mysqli_fetch_assoc($qry)){ ?>
        <div class="card card-1">
            <div class="work-rate">
                <?php if ($rows["negotiable"] == 1){?>
                    <p class="yes">Negotiable</p>
                <?php }else{?>
                    <p class="no">Fixed budget</p>
                <?php } ?>
                <p class="budget"><?php echo $rows["max_budget"] . " BDT"?></p>
            </div>
            <div class="pos-nd-loc">
            <p class="job-title"><?php echo $rows["prblm_name"]?></p>
            <p class="location"><?php echo $rows["street"].", ". $rows["city_name"]?></p>
            </div>
            <div class="tags">
            <button><?php echo $rows["prblm_type"]?></button>
            <button><?php echo $rows["dev_type"]?></button>
            <button><?php echo $rows["dev_model"]?></button>
            <!-- <button>web design</button>
            <button>+4</button> -->
            </div>
            <p class="job-desc">
                <?php echo $rows["details"]?>
            </p>
            <br><br>
            <p class="job-toggle">view job</p>
        </div>  
        <?php } ?>
    </div>
    <script scr="jquery.min.js"></script>
    <script scr="jquery.collapser.min.js"></script>
    <script>
        $('.job_desc').collapser({
            mode: "words",
            truncate: 10
        });
    </script>
  </body>
</html>
