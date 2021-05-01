<?php include 'inc/header.inc.php'; ?>

<section class="contactus-section">
  <div class="container customize">
    <div class="row">
      <div class="col-md-6 offset-md-3 text-center">
        <div class="section-title">
          <h1>Contact Us</h1>
          <p class="contact-text">If you have faces any problem buy to our product and any other services.Please, Let us know as soon as possible.We are always ready to help our customers.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8 form-inner offset-md-2">
        <form action="" method="post">
          <div class="form-groups">
           <div class="form-left">
              <label for="name"><i class="fa fa-user"></i></label>
            <input type="text" id="name" placeholder="Enter First Name" class="contact-form">
           </div>
           <div class="form-right">
              <label for="last"><i class="fa fa-user"></i></label>
            <input type="text" id="last" placeholder="Enter Last Name" class="contact-form">
           </div>
          </div>
          <div class="form-groups">
           <div class="form-left">
              <label for="email"><i class="fa fa-envelope"></i></label>
            <input type="email" id="email" placeholder="Enter Email" class="contact-form">
           </div>
           <div class="form-right">
              <label for="password"><i class="fa fa-envelope"></i></label>
            <input type="text" id="password" placeholder="Enter Subject" class="contact-form">
           </div>
          </div>
          <div class="form-groups">
            <label for="message"><i class="fa fa-envelope"></i></label>
            <textarea placeholder="Enter Your Message" name="" id="message"></textarea>
          </div>
          <div class="form-group">
            <button type="submit" value="Send Message" class="contact-btn">
            Send Message <i class="fa fa-angle-right"></i>  
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>


 <?php include 'inc/footer.inc.php'; ?>