<?php include 'inc/header.inc.php'; ?>
<?php 
		$ip = getUserIp();
		$select_fav = "SELECT * FROM add_favourite WHERE user_ip='$ip'";
		$run_fav = mysqli_query($con, $select_fav);
		$count = mysqli_num_rows($run_fav);
?>
<?php 

if (isset($_GET['delsuccess'])) {
	echo " <div class='success-insert'>
      <div class='main_content'>
        <h5>Deleted Success!</h5>
      </div>
   </div>";
}

 ?>
<main>
  <section class="cart-section">
    <div class="container">
      <div class="cart-section-main-wrapper">
      <div class="cart-section-inner">
        <div class="cart-title-header">
          <h2>My Favourite Products</h2>
            <p class="total-cart-text">Your Total Favourite product is <span class="fav-pro"><bold class='text-danger'><?php echo $count; ?></bold></span></p>
        </div>
        <div class="main-cart-inner">
          <div class="table-responsive">
            <table class="table table-bordered text-center">
              <thead class="custom-thead">
                <?php 

                if ($count!==0) { ?>
                	<tr>
	                  <th>Product Image</th>
	                  <th>Title</th>
	                  <th>Price</th>
	 				  <th>Buy</th>
	                  <th>Action</th>
                	</tr>
                <?php }else{ ?>
					<div class="fav-pro-inner">
						<h3>You Have no any favourite products!</h3>
						<a href="shop.php" class="back-shop">Back To Shop</a>
					</div>
                <?php } ?>
              </thead>
              <tbody>
              	<?php 
              		$ip = getUserIp();
              		$select_fav = "SELECT * FROM add_favourite WHERE user_ip='$ip'";
              		$run_fav = mysqli_query($con, $select_fav);
              		while ($row_fav =mysqli_fetch_assoc($run_fav)) {
              			$product_id = $row_fav['product_id'];
              			$select_product = "SELECT * FROM Products where id = '$product_id'";
              			$run_product = mysqli_query($con,$select_product);
              			$count = mysqli_num_rows($run_product);

              		while ($row = mysqli_fetch_assoc($run_product)) { ?>
              			<tr>
	                  <td><img src="<?php echo($row['product_img1']) ?>" width="100px" alt=""></td>
	                  <td><?php echo $row['product_title']; ?></td>
	                  <td>500$</td>
	                  <td><a class="buynow-btn" href="details.php?id=<?php echo $row['id']; ?>"><i class="fa fa-cart-plus mr-2"></i><span class="hide-normal">Buy Now</span></a></td>
	                  <td>
	                    <a class="bg-danger" href="delete.php?del_id=<?php echo base64_encode($row['id']); ?>"><i class="fa fa-trash"></i></a>
	                  </td>
	                </tr>
	                <?php } }  ?>

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
</main>

<?php include 'inc/footer.inc.php'; ?>