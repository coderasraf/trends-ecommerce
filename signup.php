<?php include 'inc/header.inc.php'; ?>
<main>
	<section class="login-area login-bg">
		<div class="container">
			<div class="signup-title">
				<h3>Signup</h3>
				<p>Already have an account <a href="login.php">Login </a></p>
			</div>
		<form action="login.php" method="post">

			<div class="form-groups">
	           <div class="form-left">
	                <label for="name"><i class="fa fa-user"></i></label>
	            	<input type="text" id="name" placeholder="First Name" class="contact-form">
	           </div>
	           <div class="form-left">
	              <label for="last"><i class="fa fa-user"></i></label>
	            	<input type="text" id="last" placeholder="Last Name" class="contact-form">
	           </div>
	           <div class="form-left">
	              <label for="email"><i class="fa fa-envelope"></i></label>
	            	<input type="email" id="email" placeholder="Email address" class="contact-form">
	           </div>
	           <div class="form-left">
	              <label for="password"><i class="fa fa-key"></i></label>
	            	<input type="password" id="password" placeholder="Enter Password" class="contact-form">
	           </div>
	           <div class="form-left">
	              <label for="district"><i class="fa fa-home"></i></label>
	            	<input type="text" id="district" placeholder="District" class="contact-form">
	           </div>
	           <div class="form-left">
	              <label for="country"><i class="fa fa-flag"></i></label>
	            	<input type="text" id="country" placeholder="Country" class="contact-form">
	           </div>
	           <div class="form-left">
	              <label for="contact"><i class="fa fa-phone"></i></label>
	            	<input type="text" id="contact" placeholder="+008" class="contact-form">
	           </div>
           		<div class="form-left">
            		<input type="submit" value="Create Account" class="contact-form">
           		</div>
          	</div>
		  </form>
		</div>
	</section>
</main>
<?php include 'inc/footer.inc.php'; ?>