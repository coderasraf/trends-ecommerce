<?php include'inc/header.inc.php'; ?>
    <main>
      <section class="main-section">
        <?php include 'inc/sidebar.inc.php'; ?>
        <div class="main-content">
          <?php include 'inc/navigation.inc.php'; ?>
          <div class="main-content-inner">
          <?php 
            
            if(isset($_GET['dashboard'])){
              include 'dashboard.php';
            }
            if(isset($_GET['add_product'])){
              include 'add_product.php';
            }
            if(isset($_GET['all_product'])){
              include 'all_product.php';
            }
            if(isset($_GET['order'])){
              include 'order.php';
            }
            if (isset($_GET['all_customers'])) {
              include 'all_customers.php';
            }
          
          ?>
          </div>
        </div>
      </section>
    </main>
<?php include 'inc/footer.inc.php'; ?>