<?php 
include 'config/db.php';
  if (isset($_GET['del_id'])) {
  	  $del_id = base64_decode($_GET['del_id']);
  	  $delete_cart = "DELETE FROM cartitem WHERE product_id ='$del_id'";
  	  $run_del = mysqli_query($con,$delete_cart);
  	  if ($run_del) {
  	  	header('Location:cart.php?delsuccess');
  	  }
  }


 ?>