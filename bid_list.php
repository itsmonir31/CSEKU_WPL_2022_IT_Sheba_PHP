<!-- bid list -->
<?php 
      $sql1 = "SELECT* 
                FROM job_bid 
                Left join pro_img on pro_img.email = job_bid.bidder_email
                Left join users on pro_img.email = users.email
                  WHERE job_id = $job_id ";
      // $ep = "SELECT* FROM pro_img natural join users, job_bid WHERE job_id = $job_id and users.email = job_bid.email";
      $qry1 = mysqli_query($conn,$sql1);
      // $rows1 = mysqli_fetch_assoc($qry1);
  ?>
    <div class="bid_list">
    <div class="container_">
        <h2 class="heading">Expert Bid on this job</h2>
        <ul class="cards">
          <?php 
          while ( $rows1 = mysqli_fetch_assoc($qry1)){ ?>
            <li class="card">
              <span class="tag_bid"><?php echo "৳ ".$rows1["amount"]; ?></span>
              <div class="card_padding">
                <div>
                    
                    <img src="<?php echo $rows1["url"]; ?>" class="thumbnail"/>
                    <h3 class="card-title"><?php echo $rows1["name"]; ?></h3>
                    <div class="card-content">
                        <p><?php echo $rows1["note"]; ?></p>
                    </div>
                </div>
                <div class="card-link-wrapper">
                    <a href="" class="card-link">Hire</a>
                </div>
              </div>
            </li>
          <?php } ?>
        </ul>
    </div>
  </div>  
<!-- bid list  end-->