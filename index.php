<?php include 'inc/header.inc.php'; ?>
<!-- start of main -->
<main>
<?php include 'inc/slider.inc.php'; ?>
  <!-- end of carousel area section -->
  <section class="section-padding padding-top-50">
    <div class="container">
      <div class="col-md-12 text-center">
        <div class="section-title">
          <h2>
            Trading Now
          </h2>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi, dignissimos.
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="owl-carousel product-carousel-area">
            <?php tradingNowPro(); ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end of product carousel -->
  <section class="section-padding padding-top-50">
    <div class="container">
      <div class="product-category-grid">
        <?php  getCatDesImg(); ?>
      </div>
    </div>
  </section>
  <!-- end of product categories -->
  <section class="section-padding padding-top-0 padding-bottom-50">
    <div class="container">
      <div class="col-md-12 text-center">
        <div class="section-title">
          <h2>
            New Arrivals
          </h2>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi, dignissimos.
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="owl-carousel product-carousel-area bottom">
            
            <?php 

              newArrivalProduct();

             ?>
            
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end of trading carousel -->
  <section class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="single-meta-box">
            <div class="meta-text">
              <h5>ONLINE SUPPORT 24/7</h5>
              <p>We support online 24/7</p>
            </div>
            <div class="meta-icon">
              <img src="assets/img/icon1.png" alt="">
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="single-meta-box">
            <div class="meta-text">
              <h5>COMFORTS PAYMENTS</h5>
              <p>Creadits Cards Available</p>
            </div>
            <div class="meta-icon">
              <img src="assets/img/icon2.png" alt="">
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="single-meta-box">
            <div class="meta-text">
              <h5>ONLINE SUPPORT 24/7</h5>
              <p>We support online 24/7</p>
            </div>
            <div class="meta-icon">
              <img src="assets/img/icon3.png" alt="">
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="single-meta-box">
            <div class="meta-text">
              <h5>ONLINE SUPPORT 24/7</h5>
              <p>We support online 24/7</p>
            </div>
            <div class="meta-icon">
              <img src="assets/img/icon4.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end of meta desc area -->
  <section class="callto-area padding-top-0" style="background: var(--base-color);padding: 50px 0">
    <div class="container">
        <div class="box">
          <div class="single-call-box">
            <ul>
              <li>
                <a href="#">
                  <i class="fab fa-facebook"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fab fa-pinterest"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fab fa-instagram"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="box">
            <div class="single-call-box form-area">
              <form action="" method="POST">
                <input type="email" placeholder="Enter your email" name="email" required="">
              <button type="submit" name="subscribe" value="Subscribe">SUBSCRIBE</button>
              </form>
            </div>
          </div>
          <div class="box">
            <div class="single-call-box call-text">
              <h4>JOIN OUR NEWSLETTER</h4>
            </div>
          </div>
    </div>
  </section>
  <!-- end of call to action -->
  <?php 
  
if (isset($_POST['subscribe'])) {
      $email = $_POST['email'];
      if (!empty($email)) {
        $select_email = "SELECT * FROM tbl_subscribe";
        $run_email = mysqli_query($db,$select_email);
        $row_email = mysqli_fetch_assoc($run_email);
        $tbl_email = $row_email['email'];
        if ($tbl_email !== $email) {
          $insert = "INSERT INTO tbl_subscribe(email) VALUES ('$email')";
      $run_insert = mysqli_query($db,$insert);
      if ($run_insert) { ?>
         <div class='success-insert'>
           <div class='main_content'>
            <h5>You have been subscribed Successfully!</h5>
           </div>
         </div>";
  <?php } }else{ ?>
       <div class='success-insert'>
           <div class='main_content'>
            <h5 class="danger">You are already subscribed!</h5>
           </div>
         </div>";
  <?php } } }  ?>
<?php include 'inc/footer.inc.php'; ?>

