<footer>
    <section class="footer-area">
      <div class="container">
        <div class="footer-link-box">
          <div class="footer-link-title">
            <h4>Your Account</h4>
          </div>
          <ul class="footer-menu">
            <li>
              <a href="cart.php">Cart</a>
            </li>
            <li>
              <a href="checkout.php">Checkout</a>
            </li>
            <li>
              <a href="myaccount.php">My Account</a>
            </li>
            <li>
              <a href="contact.php">Contact</a>
            </li>
            <li>
              <a href="privacy.php">Privacy Policy</a>
            </li>
          </ul>
        </div>
        <div class="footer-link-box">
          <div class="footer-link-title">
            <h4>Services</h4>
          </div>
          <ul class="footer-menu">
            <li>
              <a href="faqs.php">Faqs</a>
            </li>
            <li>
              <a href="order_retruns.php">Orders & Returns</a>
            </li>
            <li>
              <a href="shipping_policy.php">Shipping Policy</a>
            </li>
            <li>
              <a href="i_shipping.php">International Shipping</a>
            </li>
            <li>
              <a href="terms_conditions.php">Terms & Conditions</a>
            </li>
          </ul>
        </div>
        <div class="footer-link-box">
          <div class="footer-link-title">
            <h4>Inoformation</h4>
          </div>
          <ul class="footer-menu">
            <li>
              <a href="about.php">About us</a>
            </li>
            <li>
              <a href="contact.php">Contact us</a>
            </li>
            <li>
              <a href="faqs.php">Faqs</a>
            </li>
            <li>
              <a href="terms_conditions.php">Terms & Conditions</a>
            </li>
            <li>
              <a href="privacy.php">Privacy Policy</a>
            </li>
          </ul>
        </div>
        <div class="footer-link-box">
          <div class="footer-link-title">
            <h4>Contact Us</h4>
          </div>
           <?php 
              $select = "SELECT * FROM contact_info";
              $run_info = mysqli_query($con,$select);
              $row = mysqli_fetch_array($run_info);
            ?>
            <div class="footer-flex-item">
              <div class="contact-text">
                <p>
                  <?php echo $row['owner_address']; ?>
                </p>
              </div>
              <div class="contact-icon">
               <p>
                  <i class="fa fa-map-marker"></i>
               </p>
            </div>
          </div>
          <div class="footer-flex-item">
              <div class="contact-text">
               <p>
                 <?php echo $row['owner_email']; ?> <br>
                We replay within 24 hours
               </p>
              </div>
              <div class="contact-icon">
                <p>
                  <i class="fa fa-envelope"></i>
                </p>
            </div>
          </div>
          <div class="footer-flex-item">
              <div class="contact-text">
                <p>
                  <?php echo $row['owner_contact']; ?> <br>
                Sund-Fri, 9am until 6pm
                </p>
              </div>
              <div class="contact-icon">
               <p>
                  <i class="fa fa-phone"></i>
               </p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </footer>
  <!-- end of footer top -->
  <footer class="footer-bottom">
    <div class="container">
      <div class="footer-bottom-left">
        <ul>
          <li>
            <a href=""><img src="assets/img/cash.png" alt=""></a>
          </li>
          <li>
            <a href=""><img src="assets/img/visa.png" alt=""></a>
          </li>
          <li>
            <a href=""><img src="assets/img/mastar.png" alt=""></a>
          </li>
          <li>
            <a href=""><img src="assets/img/bkash.png" alt=""></a>
          </li>
        </ul>
      </div>
      <div class="footer-bottom-right">
        <p>Copyright &copy; 2020 By Hassasraf All Rights Reserved.</p>
      </div>
    </div>
  </footer>
  <!-- start of top-link -->
  <div class="top-link-container">
    <a href="#home">
     <i class="fa fa-angle-up"></i>
    </a>
  </div>
  <!-- end of top-link -->
</main>
<div class="overlay"></div>

  <!-- Jqurey Min File -->
  <script type="text/javascript" src="assets/js/jquery.min.js"></script>
  <!-- Javascript Vendors File -->
   <script type="text/javascript" src="vendors/js/bootstrap.min.js"></script>
   <script type="text/javascript" src="vendors/js/owl.carousel.min.js"></script>
   <!-- Javascript Main File -->
   <script type="text/javascript" src="assets/js/main.js"></script>
  </body>
</html>
<!-- end of main -->