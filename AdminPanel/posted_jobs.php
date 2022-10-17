<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <!-- <link rel="stylesheet" href="css/login.css"> -->
    <link rel="stylesheet" href="css/posted_job.css">
</head>
<body>

    <?php include('..//dbConnect.php'); 


    $q = "SELECT * from jobs";
    $res = mysqli_query($conn, $q);

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



<div class="table-users">
   <div class="header">Users
    <div class="searchbox">
		<input id="search" type="text" placeholder="Search..." name="search" class="search">
	<button  class="btn-search">
			<img src="img/magnifier.png " style="width: 20px; height:20px;">
		</button>
</div>
    <!-- <div class="search">
        <img src="img/magnifier.png" style="width: 25px; height:25px;">
        <input type="text" class="form__input" placeholder=" " name="search_text" id="search_text">
        <!-- <label for="" class="form__label">Email</label> -->
    <!-- </div> --> 
   </div>
   
   <table cellspacing="0">
      <tr>
         <th>Picture</th>
         <th>Name</th>
         <th>Email</th>
         <th>Phone</th>
         <th >Comments</th>
         <th >Budget</th>
      </tr>

        <?php 
        while ( $rows = mysqli_fetch_assoc($res)) {
        ?>
        <tr>
            <td> <?php echo $rows['job_id']; ?> </td>
            <td> <?php echo $rows['prblm_name']; ?> </td>
            <td> <?php echo $rows['email']; ?> </td>
            <td> <?php echo $rows['street']; ?> </td>
            <td> <?php echo $rows['city_name']; ?> </td>
            <td> <?php echo $rows['max_budget']; ?> </td>                          
        </tr>


        <?php } ?>
   </table>
</div>

          
        <!-- content-wrapper ends -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <script src="vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script src="js/data-table.js"></script>

</body>
</html>



<script>
    $(document).ready(function(){
        $('#search_text').keyup(function(){
            var txt = $(this).val();
            if (txt != '') {
                
            }else{
                $('#result').html('');
                $.ajax({
                    url: "search_fetch.php",
                    method: "post",
                    data: {search:txt},
                    dataType: "text",
                    success: function(data){
                        $('#result').html(data);
                    }
                })
            }
        });
    });
</script>