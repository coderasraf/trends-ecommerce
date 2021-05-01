<?php include 'config/db.php'; ?>
<?php include 'functions/functions.func.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Trends - E-commerce Website</title>
      <!-- Fontawesome CSS File -->
      <link rel="stylesheet" type="text/css" href="vendors/css/all.css">
      <!-- Bottstrap CSS File -->
      <link rel="stylesheet" type="text/css" href="vendors/css/bootstrap.min.css">
      <!-- OwlCarousel CSS File -->
      <link rel="stylesheet" type="text/css" href="vendors/css/owl.carousel.min.css">
      <!-- Main Stylesheet File -->
      <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    </head>
  <body>
<!-- search product area -->
<div class="search-area">
           <div class="close-search">&times;</div>
           <form action="" style="position: relative;">
             <input class="search-btn" type="search" name="search" placeholder="Jackets,Shoes,Punjabi.......">
             <input class="submit-btn" type="submit" value="Search">
           </form>
         </div>
<!-- end of search product area -->
<header id="home">
  <!-- header top -->
    <div class="header-top">
      <div class="container grid-item">
        <div class="header-left">
        <ul>
          <li>
            <a class="" href="myaccount.php">Account <i class="fa fa-user"></i>
            </a>
          </li>
          <li>
            <a href="faqs.php">Faqs</a>
          </li>
          <li>
            <a href="contact.php">Contact</a>
          </li>
          <li>
            <a href="about.php">About</a>
          </li>
        </ul>
      </div>
      <div class="header-right">
        <?php 
          $select = "SELECT * FROM contact_info";
          $run_info = mysqli_query($con,$select);
          $row = mysqli_fetch_array($run_info);
         ?>
        <ul>
          <li>
            <a href="tel:<?php echo $row['owner_contact']; ?>">
              <i class="fa fa-phone"></i><?php echo $row['owner_contact']; ?>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-star"></i>All week from 9am to 9pm
            </a>
          </li>
        </ul>
      </div>
      </div>
    </div>
  <!-- end of header top -->
  <!-- start of header bottom -->
   <div class="header-bottom">
     <div class="container">
       <div class="header-bottom-main-container">
         <div class="cart-area">
           <ul>
             <li class="cart">
              <a href="cart.php">
                 <span class="basket" style="position: relative;">
                 <i class="fa fa-shopping-basket mr-4" style=""><sup>-</sup></i> <span style="color:var(--base-color);font-weight:bold;margin-left:5px;margin-right:5px;">$ <?php totalPrice(); ?></span>/CART
                 <span class="quantity"><?php item(); ?></span>
               </span>
              </a>
               
             </li>
             <li class="favourite">
               <a href="myfav.php"><i class="fa fa-heart"></i></a>
             </li>
             <li id="search-shop">
               <i class="fa fa-search"></i>
             </li>
           </ul>
         </div>
         <!-- end of cart single cart area -->
         <div class="menu-area">
           <ul class="main-menu">
            <div class="close-btn">&times;</div>
            <?php 
              $script_name = $_SERVER['SCRIPT_NAME'];
              $links = "SELECT * FROM menu";
              $run_query = mysqli_query($con,$links);
              while ($row = mysqli_fetch_assoc($run_query)) { ?> 
             <li><a class="" href="<?php echo $row['links']; ?>"><?php echo $row['name']; ?></a></li>
            <?php } ?>
           </ul>
         </div>
         <!-- end of menu area -->
         <div class="logo-area text-right">
           <h4>
            <?php 

              $select = "SELECT * FROM logo LIMIT 1";
              $run_query =  mysqli_query($con,$select);
              $row_logo = mysqli_fetch_assoc($run_query);
              $logo = $row_logo['logo'];
              $link = $row_logo['link'];
             ?>
            <a href="<?php echo $link; ?>">
              <img src="<?php echo $logo; ?>" width='50px' alt="">
             </a>
           </h4>
         </div>
         <!-- end of logo area -->

       </div>
       
     </div>
     <div class="bars text-right">
           <i class="fa fa-bars"></i>
      </div>
   </div>
  <!-- end of header bottom -->
  
</header> <!--end of headre-->