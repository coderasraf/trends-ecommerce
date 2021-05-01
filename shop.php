<?php include 'inc/header.inc.php'; ?>
<?php 
  
  if (isset($_GET['success'])) { ?>
   <div class="success-insert">
      <div class="main_content">
        <h5>Added to favourite successfully!</h5>
      </div>
   </div>
<?php } ?>
<?php 
  
  if (isset($_GET['already'])) { ?>
   <div class="success-insert">
      <div class="main_content">
        <h5 class="danger">Already Added to Favourite!</h5>
      </div>
   </div>
<?php } ?>
<main>
  <section>
    <div class="container product-container">
      <div class="row">
        <?php include 'inc/sidebar.php'; ?>
      <div class="col-md-9">
        <?php 
          if (!isset($_GET['p_id']) && !isset($_GET['cat_pro'])) { ?>
            <div class="our-product-title">
                <h1>Shop</h1>
            </div>
          <?php } ?>
        <div class="product-area">
        <div class="product-main">
          
           <?php  getPcatPro(); ?>
           <?php  getCatPro(); ?>
           
          <?php 
          if (!isset($_GET['p_id']) && !isset($_GET['cat_pro'])) { ?>
              <?php getProduct(); ?>
          <?php } ?>
        </div>
        <div class="paginations mt-5">
          <ul class="pagination">
            <li class="page-item"><a href="" class="page-link active">First Page</a></li>
            <li class="page-item"><a href="" class="page-link ">1</a></li>
            <li class="page-item"><a href="" class="page-link ">2</a></li>
            <li class="page-item"><a href="" class="page-link ">3</a></li>
            <li class="page-item"><a href="" class="page-link ">4</a></li>
            <li class="page-item"><a href="" class="page-link ">Last Page</a></li>
          </ul>
        </div>
      </div>
      </div>
      </div>
    </div>
  </section>
</main>





 <?php include 'inc/footer.inc.php'; ?>