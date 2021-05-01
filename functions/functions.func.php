<?php 
	$db = mysqli_connect('localhost','root','','trends');
// Get User IP address
  function getUserIp(){
    switch (true) {
      case (!empty($_SERVER['HTTP_X_REAL_IP'])): 
            return($_SERVER['HTTP_X_REAL_IP']);
        break;
      case (!empty($_SERVER['HTTP_CLIENT_IP'])): 
            return($_SERVER['HTTP_CLIENT_IP']);
      break;
      case (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])): 
            return($_SERVER['HTTP_X_FORWARDED_FOR']);
      default:
            return ($_SERVER['REMOTE_ADDR']);
        break;
    }
  }
// Get Product
	function getProduct(){
		global $db;
		$select_product = "SELECT * FROM products";
		$run_products = mysqli_query($db,$select_product);
		while ($row = mysqli_fetch_assoc($run_products)) { ?>
			<?php 
			$p_cat_id= $row['p_cat_id'];
			$select_category = "SELECT * FROM product_category WHERE p_cat_id = $p_cat_id";
			$run_categoy = mysqli_query($db,$select_category);
			$row_category = mysqli_fetch_assoc($run_categoy);
			$p_cat_title = $row_category['p_cat_title'];
			 ?>
		<div class="product-single-boxs boxs">
            <div class="product-single-bg" style="background-image: url('<?php echo $row['product_img1']; ?>');">
              <div class="product-header">
                <div class="left-area">
          		<a href="shop.php?id=<?php echo $p_cat_id; ?>" class="product-category meta-btn">
 					<?php echo $p_cat_title; ?>
          		</a>
                </div>
                <div class="right-area">
                  <a href="" class="product-category info-btn">New</a>
                </div>
              </div>
              <div class="middle-product-boxs">
                <ul>
                  <li><a href="add_favo.php?add_fav=<?php echo $row['id']; ?>"><i class="fa fa-heart"></i></a></li>
                  <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                  <li><a href="details.php?id=<?php echo $row['id']; ?>"><i class="fa fa-shopping-basket"></i></a></li>
                </ul>
              </div>
            </div>
            <div class="product-single-bottom">
               <h4 class="product-title">
              	 <?php echo $row['product_title']; ?>
              	</h4>
              <div class="main-bottom">
                <div class="price-boxs">
                  <span class="price-text"><?php echo $row['price']; ?>$</span>
                </div>
                <div class="details-page">
                  <a href="details.php?id=<?php echo $row['id']; ?>"><i class="fa fa-eye"></i></a>
                </div> 
              </div>
            </div>
         </div>

<?php } } ?>
<?php  
// Get Product Category
	function getPCats(){
		global $db;
		$select_p_cat = "SELECT * FROM product_category";
		$run_p_cat = mysqli_query($db,$select_p_cat);
		while ($row = mysqli_fetch_assoc($run_p_cat)) { ?>
			<li>
				<a href="shop.php?p_id=<?php echo $row['p_cat_id']; ?>">
					<i class="fa fa-angle-right mr-2"></i><?php echo $row['p_cat_title']; ?>
				</a>
			</li>
<?php } } ?>

<?php 

// Get Category
	function getCat(){
		global $db;
		$select_cat = "SELECT * FROM category";
		$run_categoy= mysqli_query($db,$select_cat);
		while ($row = mysqli_fetch_assoc($run_categoy)) { ?>
			<li>
				<a href="shop.php?cat_pro=<?php echo $row['cat_id']; ?>">
					<i class="fa fa-angle-right mr-2"></i><?php echo $row['cat_title']; ?>
				</a>
			</li>
 <?php } } ?>
 <?php 
 // Get product_category by product
    function getPcatPro(){
      global $db;
        if (isset($_GET['p_id'])) {
               $p_id = $_GET['p_id'];
               $get_category = "SELECT * FROM product_category WHERE p_cat_id = $p_id";
               $run_category = mysqli_query($db, $get_category);
               $row_category = mysqli_fetch_array($run_category);
               $p_cat_id = $row_category['p_cat_id'];
               $p_cat_title = $row_category['p_cat_title'];
               $select_product = "SELECT * FROM products WHERE p_cat_id = $p_cat_id";
               $run_product = mysqli_query($db,$select_product);
               $count = mysqli_num_rows($run_product);
               if ($count == 0) {
                 echo "<div class='our-product-title alert alert-danger new-addition'>
                      <h5>No Product in this <span style='color:;'>$p_cat_title</span> Product Category!</h5>
                    </div>" ;
               }
               while ($row_products = mysqli_fetch_array($run_product)) { ?>
                 <div class="product-single-boxs boxs">
            <div class="product-single-bg" style="background-image: url('<?php echo $row_products['product_img1']; ?>');">
              <div class="product-header">
                <div class="left-area">
              <a href="shop.php?p_id=<?php echo $row_products['p_cat_id']; ?>" class="product-category meta-btn">
          <?php echo $row_category['p_cat_title']; ?>
              </a>
                </div>
                <div class="right-area">
                  <a href="" class="product-category info-btn">New</a>
                </div>
              </div>
              <div class="middle-product-boxs">
                <ul>
                  <li><a href="add_favo.php?add_fav=<?php echo $row_products['id']; ?>"><i class="fa fa-heart"></i></a></li>
                  <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                  <li><a href="details.php?id=<?php echo $row_products['p_cat_id']; ?>"><i class="fa fa-shopping-basket"></i></a></li>
                </ul>
              </div>
            </div>
            <div class="product-single-bottom">
               <h4 class="product-title">
                 <?php echo $row_products['product_title']; ?>
                </h4>
              <div class="main-bottom">
                <div class="price-boxs">
                  <span class="price-text"><?php echo $row_products['price']; ?>$</span>
                </div>
                <div class="details-page">
                  <a href="details.php?id=<?php echo $row_products['id']; ?>"><i class="fa fa-eye"></i></a>
                </div> 
              </div>
            </div>
         </div>
 <?php } } } ?>
 <?php 
 // Get cat by product
    function getCatPro(){
      global $db;
      if (isset($_GET['cat_pro'])) {
        $cat_id = $_GET['cat_pro'];
        $select_pro =  "SELECT * FROM category WHERE cat_id = $cat_id";
        $run_product = mysqli_query($db,$select_pro);
        $count = mysqli_num_rows($run_product);
        if ($count==0) {
           echo "<div class='our-product-title new-addition'>
                      <h4>No Product in this <span style='color:red;'>$p_cat_title</span> Product Category!</h4>
                  </div>" ;
        }
        $row_category = mysqli_fetch_assoc($run_product);
        $cat_title = $row_category['cat_title'];
        $cat_id = $row_category['cat_id'];
        $select_pro = "SELECT *FROM products WHERE cat_id = $cat_id";
        $run_pro = mysqli_query($db,$select_pro);
        while ($row = mysqli_fetch_assoc($run_pro)) { ?>
          <div class="product-single-boxs boxs">
            <div class="product-single-bg" style="background-image: url('<?php echo $row['product_img1']; ?>');">
              <div class="product-header">
                <div class="left-area">
              <a href="shop.php?p_id=<?php echo $row['cat_id']; ?>" class="product-category meta-btn">
          <?php echo $cat_title; ?>
              </a>
                </div>
                <div class="right-area">
                  <a href="" class="product-category info-btn">New</a>
                </div>
              </div>
              <div class="middle-product-boxs">
                <ul>
                  <li><a href="add_favo.php?add_fav=<?php echo $row['id']; ?>"><i class="fa fa-heart"></i></a></li>
                  <li><a href="javascript:void(0)"><i class="fa fa-star"></i></a></li>
                  <li><a href="details.php?id=<?php echo $row['cat_id']; ?>"><i class="fa fa-shopping-basket"></i></a></li>
                </ul>
              </div>
            </div>
            <div class="product-single-bottom">
               <h4 class="product-title">
                 <?php echo $row['product_title']; ?>
                </h4>
              <div class="main-bottom">
                <div class="price-boxs">
                  <span class="price-text"><?php echo $row['price']; ?>$</span>
                </div>
                <div class="details-page">
                  <a href="details.php?id=<?php echo $row['id']; ?>"><i class="fa fa-eye"></i></a>
                </div> 
              </div>
            </div>
         </div>
<?php } } } ?>
<?php 
// Get Brand
  function getBrand(){
    global $db;
    $select_cat = "SELECT * FROM category";
    $run_categoy= mysqli_query($db,$select_cat);
    while ($row = mysqli_fetch_assoc($run_categoy)) { ?>
      <li>
        <a href="shop.php?pro_brand=<?php echo $row['cat_id']; ?>">
          <i class="fa fa-angle-right mr-2"></i><?php echo $row['cat_title']; ?>
        </a>
      </li>
 <?php } } ?>


<?php 
// Get Category with Desc image
	function getCatDesImg(){
		global $db;
		$select_cat = "SELECT * FROM category";
		$run_categoy= mysqli_query($db,$select_cat);
		while ($row = mysqli_fetch_assoc($run_categoy)) { ?>
			<div class="single-product-category <?php echo $row['grid_classlist']; ?>" style="background-image: url('<?php echo $row['cat_image'] ?>');">
           		<div class="cat-main-text">
             	 <a href="shop.php?cat_pro=<?php echo $row['cat_id']; ?>" class="btns cat-btn">
                  <?php echo $row['cat_title']; ?>
                </a>
              </div>
          </div>
 <?php } } ?>

 <?php 
 // Get New Arrival Product
 	function newArrivalProduct(){
 		global $db;
 		$select_new = "SELECT * FROM products order by 1 desc";
 		$run_new = mysqli_query($db,$select_new);
 		while ($row = mysqli_fetch_assoc($run_new)) { ?>
 			<a href="details.php?id=<?php echo $row['id']; ?>">
 				<div class="signle-carousel-area">
              <div class="product-carousel-bg" style="background-image: url('<?php echo $row['product_img1']; ?>');">
              </div>
              <div class="product-carousel-bottom">
                <h5><?php echo $row['product_title']; ?></h5>
                <p class="price">
                  <?php echo $row['price']; ?> <i class="ml-1 fa fa-dollar-sign"></i>
                </p>
              </div>
            </div>
          </a>
 <?php } } ?>
 <?php 
// Trading Now Product
     function tradingNowPro(){
     	global $db;
     	$select_trading = "SELECT * FROM products WHERE total_sell >= 2";
     	$run_trading = mysqli_query($db,$select_trading);
     	while ($row_trading = mysqli_fetch_assoc($run_trading)) { ?>
     		<a href="details.php?id=<?php echo $row_trading['id']; ?>">
              <div class="signle-carousel-area">
              <div class="product-carousel-bg" style="background-image: url('<?php echo $row_trading['product_img1']; ?>');">
                <div class="meta-category">
                  <p>New</p>
                </div>
              </div>
              <div class="product-carousel-bottom">
                <h5><?php echo $row_trading['product_title']; ?></h5>
                <p>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </p>
                <p class="price">
                  $ <?php echo $row_trading['price']; ?>
                </p>
              </div>
            </div>
            </a>
 <?php } }  ?>

 <?php 
 // Total cart item
 function item(){
  $user_ip = getUserIp();
  global $db;
  $select_item = "SELECT * FROM cartitem WHERE user_ip='$user_ip'";
  $run_item = mysqli_query($db,$select_item);
  $count = mysqli_num_rows($run_item);
  if ($run_item = true) {
    echo $count;
  }else{
    echo "0";
  }
 }
?>
<?php 
// total price 
 function totalPrice(){
  global $db;
  $user_ip = getUserIp();
  $total = 0;
  $select_cart = "SELECT *FROM cartitem WHERE user_ip='$user_ip'";
  $run_cart = mysqli_query($db,$select_cart);
  while ($row_cart = mysqli_fetch_array($run_cart)) {
    $pro_id = $row_cart['product_id'];
    $pro_qty = $row_cart['qty'];
    $select_product  = "SELECT * FROM products WHERE id='$pro_id'";
    $run_product = mysqli_query($db,$select_product);
    while ($row_pro = mysqli_fetch_array($run_product)) {
      $pro_price = $row_pro['price'];
      $total+= $pro_qty * $pro_price;
    }
  }
  echo $total;
 }
 // Subtotal price 
 function subTotal(){
  global $db;
  $user_ip = getUserIp();
  $select_cart = "SELECT *FROM cartitem WHERE user_ip='$user_ip'";
  $run_cart = mysqli_query($db,$select_cart);
  while ($row_cart = mysqli_fetch_array($run_cart)) {
    $pro_id = $row_cart['product_id'];
    $pro_qty = $row_cart['qty'];
    $select_product  = "SELECT * FROM products WHERE id='$pro_id'";
    $run_product = mysqli_query($db,$select_product);
    while ($row_pro = mysqli_fetch_array($run_product)) {
      $pro_price = $row_pro['price'];
      $subTotal = $pro_qty * $pro_price;
    }
  }
  echo $subTotal;
 }

 ?>

