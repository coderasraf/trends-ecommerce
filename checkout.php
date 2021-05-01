<?php include 'inc/header.inc.php'; ?>
<main>
	<section class="login-area login-bg">
		<div class="container">
		<form action="index.php" method="post">
			<div class="form-title">
				<h2 class="mb-3">Login</h2>
			</div>
			<div class="form-groups">
	           <div class="form-left">
	                <label for="name"><i class="fa fa-user"></i></label>
	            	<input type="text" id="name" placeholder="Email or Username" class="contact-form">
	           </div>
	           <div class="form-left">
	              <label for="last"><i class="fa fa-key"></i></label>
	            	<input type="password" id="last" placeholder="Enter Password" class="contact-form">
	           </div>
           		<div class="form-left">
            		<input type="submit" value="Login" class="contact-form">
           		</div>
          	</div>
		  </form>
		</div>
	</section>
</main>
<?php include 'inc/footer.inc.php'; ?>