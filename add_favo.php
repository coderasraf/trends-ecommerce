<?php 
include 'functions/functions.func.php';
include 'config/db.php';
if (isset($_GET['add_fav'])) {
          $add_fav = $_GET['add_fav'];
          $select_fav_pro = "SELECT * FROM products WHERE id = $add_fav";
          $run_fav = mysqli_query($con,$select_fav_pro);
          $row_fav = mysqli_fetch_array($run_fav);
          $product_id = $row_fav['id'];
          $ip = getUserIp();
          $check_select = "SELECT * FROM add_favourite WHERE product_id=$add_fav";
          $run_check = mysqli_query($con,$check_select);
          $row_check = mysqli_fetch_array($run_check);
          $id = $row_check['product_id'];
          if ($product_id == $id) {
              header('Location:shop.php?already');
            }else {
            $insert_product = "INSERT INTO `add_favourite`(`product_id`, `user_ip`) VALUES ('$add_fav','$ip')";
             $run_pro = mysqli_query($con,$insert_product);
             if ($run_pro) {
             header('Location:shop.php?success');
            }else{
             header('Location:shop.php?fail');
             }
          }
        }