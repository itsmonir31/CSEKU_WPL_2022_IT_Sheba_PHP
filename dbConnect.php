<?php 

// $conn=mysqli_connect('103.169.160.74','moniruz1_cn','IPwyEF1;LyLD','moniruz1_it_sheba');
$conn=new mysqli("localhost:4306","root","","it_sheba");

if (mysqli_connect_errno()) {
  echo "MK Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
 ?>