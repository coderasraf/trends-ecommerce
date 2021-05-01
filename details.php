<?php include 'inc/header.inc.php'; ?>
<?php 
  
  if (isset($_GET['id'])) {
      $product_id = $_GET['id'];
      $select_product = "SELECT * FROM products WHERE id = $product_id";
      $run_product = mysqli_query($db,$select_product);
      $row = mysqli_fetch_assoc($run_product);
      $p_cat_id = $row['p_cat_id'];
      $select_category = "SELECT * FROM product_category WHERE p_cat_id=$p_cat_id";
      $run_category = mysqli_query($db,$select_category);
      $row_category = mysqli_fetch_assoc($run_category);
      $p_cat_title = $row_category['p_cat_title'];
  }
 ?>
<!-- start of main -->
<main>
  
  <section class='gray--bg'>
    <div class="container">
      <div class="breadcrumb bg-none">
        <li><a href="index.php">Home <i class="fa fa-angle-right mx-2"></i></a></li>
        
        <li><a href="shop.php">Shop <i class="fa fa-angle-right mx-2"></i></a></li>
        <li><a href="shop.php?p_id=<?php echo $p_cat_id; ?>"><?php echo $p_cat_title; ?> <i class="fa fa-angle-right mx-2"></i></a></li>
        <?php echo $row['product_title']; ?>
      </div>
      <div class="container--inner">
        <div class="owl-carousel left--area">
          <div class="single--carousel" style="background-image: url('<?php echo$row['product_img1']; ?>');"></div>
          <div class="single--carousel" style="background-image: url('<?php echo$row['product_img2']; ?>');"></div>
          <div class="single--carousel" style="background-image: url('<?php echo$row['product_img3']; ?>');"></div>
        </div>
        <div class="middle">
            <div class="details--content">
              <div class="top--sold--box">
                <p><?php echo $row['total_sell']; ?> SOLD</p>
              </div>
              <div class="main--title">
                <h4><?php echo $row['product_title']; ?></h4>
              </div>
              <div class="category--meta">
                <p><strong>CATEGORY :</strong> <a href="shop.php?p_id=<?php echo $p_cat_id; ?>"><?php echo $p_cat_title; ?></a></p>
                <p><a href="add_favo.php?add_fav=<?php echo($row['id']); ?>"><i class="fa fa-heart"></i></a></p>
              </div>
              <div class="price--box">
                <p><strong>PRICE :</strong><span class="price--main">$ <?php echo $row['price']; ?></span></p>
              </div>
              <div class="quantity--neat">
                <form action="" method="post">
                 <div class="gender-area">
                    <label for="size"><strong>SIZE</strong> :</label>
                    <input type="radio" name="size" value="Long Size"> L
                    <input type="radio" name="size" value="Medium"> M
                    <input type="radio" name="size" value="Extra Large"> XL
                    <input type="radio" name="size" value="Large"> LG<br>
                 </div>
                  <label for=""><strong>QUANTITY</strong> :</label>
                  <input min="1" type="number" value="1" name="qty">
                  <div class="buttons">
                <a href="" class="btns btn-left">Buy Now</a>
                <button class="cart-add" type="submit" value="" name="add_to_cart">Add to Cart<i class="fa fa-shopping-cart ml-2"></i></button>
              </div>
                </form>
              </div>
            </div>
        </div>
        <div class="right--box">
          <div class="delibery-details">
            <div class="top">
              <p>Delivery Options</p>
              <hr>
            </div>
            <ul>
              <li><i class="fa fa-marker"></i> Dhaka,Dhaka North,Banani<br><span class="breakjone">Road No. 12-19</span></li>
              <li><a href="">Change</a></li>
            </ul>
            <hr>
             <ul>
              <li><i class="fa fa-home"></i>Home Delivery <br> <span class="breakjone">1-10 Days</span></li>
              <li> 2$</li>
            </ul>
            <ul>
              <li><i class="fa fa-cash-register"></i> Cash On Delivery Available</li>
            </ul>
            <hr>
            <ul>
              <li><i class="fa fa-caret-square-down"></i> 7 Days Returns</li>
            </ul>
            <hr>
            <ul>
              <li><i class="fa fa-shopware"></i> Warrenty Not Available</li>
            </ul>
                          
          </div>
          <div class="go-store">
            <a href="shop.php" class="btns goto-store"><i class="fa fa-store"></i> Go To Store</a>
          </div>
        </div>

      </div>
    </div>
  </section> <!--End of top details area -->
  <section class="thumb-img-container">
    <div class="container">
      <img src="<?php echo $row['product_img1']; ?>"  alt="<?php echo $row['product_title']; ?>">
    <img src="<?php echo $row['product_img2']; ?>"  alt="<?php echo $row['product_title']; ?>">
    <img src="<?php echo $row['product_img3']; ?>" alt="<?php echo $row['product_title']; ?>">
    </div>
  </section>
</main>
<main>
    <section class="gray--bg"> <!--start of second details-->
      <div class="container">
        <div class="desc_inner">
          <ul class="tabs">
            <li data-tab-target='#desc' class="tab active">Description</li>
            <li data-tab-target='#same' class="tab">Same Product</li>
          </ul>
          <div class="tab-content">
            <div id="desc" data-tab-content class="active">
              <h2>Description</h2>
              <?php echo $row['product_desc']; ?>
            </div>
            <div id="same" data-tab-content>
              <h2>Related Products</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis, expedita. Repellat quia nisi dolorum fuga eos, reiciendis assumenda, nobis adipisci.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est, distinctio perspiciatis iusto magnam eligendi veniam porro deserunt quaerat accusamus impedit ab perferendis natus eveniet ex incidunt ullam repudiandae! Explicabo, nostrum?</p>
            </div>
          </div>
        </div>
      </div>
  </section>
</main>
  <!-- end of call to action -->
<?php 
  $user_ip = getUserIp();
  echo $user_ip;
  if (isset($_POST['add_to_cart'])) {
      $size = $_POST['size'];
      $size = strtoupper($size);
      $product_id = $_GET['id'];
      $qty  = $_POST['qty'];
      if ($size == '') {
        echo "<script>alert('Please select the product size! Medium(M), Long(L), Large(LG) and Extra Large(XL)')</script>";
      }elseif ($qty == '') {
        echo "<script>alert('Please define the product Quantity!')</script>";
      }else{
         $select_cart = "SELECT * FROM cartitem WHERE user_ip = '$user_ip'  AND product_id = '$product_id'";
         $run_select = mysqli_query($con,$select_cart);
         $check_item = mysqli_num_rows($run_select);
         if ($check_item > 0) {
           echo "<div class='success-insert'>
                    <div class='main_content'>
                    <h5 class='danger'>Already Added in your cart!</h5>
                    </div>
                  </div>";
         }else{
            $insert_item = "INSERT INTO `cartitem`(`product_id`, `user_ip`, `size`, `qty`) VALUES ('$product_id','$user_ip','$size','$qty')";
            $run_item = mysqli_query($con,$insert_item);
            if ($run_item) {
              echo "<script>window.open('cart.php?addedCart','_self')</script>";
            }else{
              echo "<div class='success-insert'>
                    <div class='main_content'>
                    <h5>There has some eroro!</h5>
                    </div>
                  </div>";
            }
         }
        

      }
  }

 ?>
<?php include 'inc/footer.inc.php'; ?>