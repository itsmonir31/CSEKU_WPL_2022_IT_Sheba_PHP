<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Experts</title>
    <link rel="stylesheet" href="./css/talent.css" />
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    
    
  </head>
  <body>
    <?php 
      session_start();
      include('nav.php'); 
        // $email = $_SESSION['usr_email'];
        $sql = "SELECT* FROM users natural join pro_img natural join user_info where type=2";
        $qry = mysqli_query($conn,$sql);
        // $rows = mysqli_fetch_assoc($qry); 
    ?>
    <div class="card__container">

      <?php 
        while ( $rows = mysqli_fetch_assoc($qry)){ ?>
      <div class="card">
        <div class="wrapper">
          <div class="profile">
            <img src="<?php echo $rows["url"]; ?>" class="thumbnail"/>
            <!-- <div class="check"><i class="fas fa-check"></i></div> -->
            <h3 class="name"><?php echo $rows["name"]; ?></h3>
            <p class="title"><?php echo $rows["tag_line"]; ?></p>
            <div class="action_btn_div">
              <button type="button" class="btn">Hire Me</button>
              <a class="btn_msg" href="./message.php"><img src="https://cdn-icons-png.flaticon.com/512/61/61516.png"/></a>
            </div>
            
          </div><p class="description"><?php echo $rows["about"]; ?></p>
        </div>
      </div>
      <?php } ?>


      <!-- <div class="card">
        <div class="wrapper">
          <div class="top-icons">
            <i class="fas fa-long-arrow-alt-left"></i>
            <i class="fas fa-ellipsis-v"></i>
            <i class="far fa-heart"></i>
          </div>

          <div class="profile">
            <img
              src="https://avatars.githubusercontent.com/u/199201?v=4"
              class="thumbnail"
            />
            <div class="check"><i class="fas fa-check"></i></div>
            <h3 class="name">Beverly Little</h3>
            <p class="title">Javascript Developer</p>
            <p class="description">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque
              aliquam aliquid porro!
            </p>
            <div class="action_btn_div">
              <button type="button" class="btn">Hire Me</button>
              <a class="btn_msg" href="./message.php"><img src="https://cdn-icons-png.flaticon.com/512/61/61516.png"/></a>
            </div>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="wrapper">
          <div class="top-icons">
            <i class="fas fa-long-arrow-alt-left"></i>
            <i class="fas fa-ellipsis-v"></i>
            <i class="far fa-heart"></i>
          </div>

          <div class="profile">
            <img
              src="https://avatars.githubusercontent.com/u/774684?v=4"
              class="thumbnail"
            />
            <div class="check"><i class="fas fa-check"></i></div>
            <h3 class="name">Beverly Little</h3>
            <p class="title">Javascript Developer</p>
            <p class="description">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque
              aliquam aliquid porro!
            </p>
            <div class="action_btn_div">
              <button type="button" class="btn">Hire Me</button>
              <a class="btn_msg" href="./message.php"><img src="https://cdn-icons-png.flaticon.com/512/61/61516.png"/></a>
            </div>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="wrapper">
          <div class="top-icons">
            <i class="fas fa-long-arrow-alt-left"></i>
            <i class="fas fa-ellipsis-v"></i>
            <i class="far fa-heart"></i>
          </div>

          <div class="profile">
            <img
              src="https://avatars.githubusercontent.com/u/3538901?v=4"
              class="thumbnail"
            />
            <div class="check"><i class="fas fa-check"></i></div>
            <h3 class="name">Beverly Little</h3>
            <p class="title">Javascript Developer</p>
            <p class="description">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque
              aliquam aliquid porro!
            </p>
            <div class="action_btn_div">
              <button type="button" class="btn">Hire Me</button>
              <a class="btn_msg" href="./message.php"><img src="https://cdn-icons-png.flaticon.com/512/61/61516.png"/></a>
            </div>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="wrapper">
          <div class="top-icons">
            <i class="fas fa-long-arrow-alt-left"></i>
            <i class="fas fa-ellipsis-v"></i>
            <i class="far fa-heart"></i>
          </div>

          <div class="profile">
            <img
              src="https://avatars.githubusercontent.com/u/629239?v=4"
              class="thumbnail"
            />
            <div class="check"><i class="fas fa-check"></i></div>
            <h3 class="name">Beverly Little</h3>
            <p class="title">Javascript Developer</p>
            <p class="description">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque
              aliquam aliquid porro!
            </p>
            <div class="action_btn_div">
              <button type="button" class="btn">Hire Me</button>
              <a class="btn_msg" href="./message.php"><img src="https://cdn-icons-png.flaticon.com/512/61/61516.png"/></a>
            </div>
            
          </div>
        </div>
      </div>
      <div class="card">
        <div class="wrapper">
          <div class="top-icons">
            <i class="fas fa-long-arrow-alt-left"></i>
            <i class="fas fa-ellipsis-v"></i>
            <i class="far fa-heart"></i>
          </div>

          <div class="profile">
            <img
              src="https://avatars.githubusercontent.com/u/114122?v=4"
              class="thumbnail"
            />
            <div class="check"><i class="fas fa-check"></i></div>
            <h3 class="name">Beverly Little</h3>
            <p class="title">Javascript Developer</p>
            <p class="description">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque
              aliquam aliquid porro!
            </p>
            <div class="action_btn_div">
              <button type="button" class="btn">Hire Me</button>
              <a class="btn_msg" href="./message.php"><img src="https://cdn-icons-png.flaticon.com/512/61/61516.png"/></a>
            </div>
          </div>
        </div>
      </div> -->
      
      </div>
    </div>

    <!-- <script>
      hamburger = document.querySelector(".hamburger");
      hamburger.onclick = function () {
        navBar = document.querySelector(".nav_div");
        navBar.classList.toggle("active");
      };
    </script> -->
    <?php include('footer.php'); ?>
  </body>
</html>
