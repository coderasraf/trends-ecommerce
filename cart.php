<?php include 'inc/header.inc.php'; ?>
<?php 

if (isset($_GET['addedCart'])) { ?>
  <div class='success-insert'>
        <div class='main_content'>
        <h5>Add product successfully!</h5>
        </div>
        </div>
<?php } ?>
<?php 
if (isset($_GET['delsuccess'])) { ?>
  <div class='success-insert'>
        <div class='main_content'>
        <h5>Cart Item Deleted Successfully!</h5>
        </div>
        </div>
<?php } ?>
<main>
  <section class="cart-section">
    <div class="container">
      <div class="cart-section-main-wrapper">
      <div class="cart-section-inner">
        <div class="cart-title-header">
          <h2>Shopping Cart</h2>
            <p class="total-cart-text">Currently you have <?php item(); ?> item in your cart...</p>
        </div>
        <div class="main-cart-inner">
          <div class="table-responsive">
            <table class="table table-bordered text-center">
              <thead class="custom-thead">
                <tr>
                  <?php 

                    $user_ip = getUserIp();
                    $select_cart = "SELECT * FROM cartitem WHERE user_ip = '$user_ip'";
                    $run_cart = mysqli_query($con,$select_cart);
                    $count = mysqli_num_rows($run_cart);
                    if ($count !== 0) { ?>
                      <th>Product Image</th>
                  <th>Title</th>
                  <th>Quantity</th>
                  <th>Size</th>
                  <th>Price</th>
                  <th>Sub Total</th>
                  <th>Action</th>
                </tr>
                   <?php }else{ ?>
                    <div class="fav-pro-inner">
                      <h3>You Have no any products in your cart!</h3>
                      <a href="shop.php" class="back-shop">Back To Shop</a>
                    </div>
              <?php }  ?>
              </thead>
              <tbody>
                  <?php 
                    $user_ip = getUserIp();
                    $total = 0;
                    $select_cart = "SELECT * FROM cartitem WHERE user_ip = '$user_ip'";
                    $run_cart = mysqli_query($con,$select_cart);

                    while ($row = mysqli_fetch_assoc($run_cart)) {
                      $product_id = $row['product_id'];
                      $pro_qty = $row['qty'];
                      $select_product = "SELECT * FROM products WHERE id = $product_id";
                      $run_product = mysqli_query($con,$select_product);
                      while ($row_pro = mysqli_fetch_assoc($run_product)) { 
                      		$price = $row_pro['price'];
                      		$subTotal = $pro_qty * $price;
                      		$total+=$subTotal;
                      	?>
                        <tr>
                          <td><img src="<?php echo $row_pro['product_img1']; ?>" width="100px" alt="<?php echo $row['product_title'] ?>"></td>
                  <td><?php echo $row_pro['product_title']; ?></td>
                  <td><span class="decrease"><i class="fa fa-minus"></i></span><span class="main-count increase"><?php echo $row['qty']; ?></span><span class="increase"><i class="fa fa-plus"></i></span></td>
                  <td><?php echo $row['size']; ?></td>
                  <td><?php echo $row_pro['price']; ?></td>
                  <td><?php echo $subTotal; ?></td>
                  <td>
                    <a href="delcart.php?del_id=<?php echo base64_encode($product_id); ?>"><i class="fa fa-trash"></i></a>
                  </td>
                </tr>
                     <?php } } ?>
                  
              </tbody>
            </table>
          </div>
          <?php 

            if ($count !==0) { ?>
            <div class="middle-cart-section">
                <div class="total-price">
                 <span class="total_inner">Total : $<?php echo $total; ?></span> <br>
				 <span class="tax-inner">Tax : $0.00 <br></span>
				 <span class="shipping-inner">Shipping Fee : $0.00</span>
                </div> 
            </div>
            <div class="cart-section-bottom-link">
                <div class="continue-shopping"><a class="continue-shopping-btn bottom-btn" href="shop.php">Continue Shopping <i class="fa fa-shopping-basket"></i></a></div>
                <div class="chekout-btn"><a href="checkout.php"><i class="fa fa-dollar-sign mr-2"></i>Procced to Checkout</a></div>
           </div>
            <?php } ?>
        </div>
      </div>
    </div>
    </div>
  </section>
</main>

<?php include 'inc/footer.inc.php'; ?>