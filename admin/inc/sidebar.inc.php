<aside class="sidebar">
          <div class="my-profile">
            <a href="">
              <img src="assets/img/profile.jpg" class="my-profile-img" width="100px" alt="">
            </a>
            <div class="admin-info">
              <h4 class="admin-name meta">Jhon Doe <br> <span class="admin-slogal">Super Admin</span></h4>
            </div>
            <hr>
          </div>
          <div class="side-menu">
            <ul class="side-menu-inner">
              <li><a class="active" href="javascript:void(0)"><i class="fa fa-bus mr-2"></i>Our Shop <span class="arrow"><i class="fa fa-angle-down"></i></span></a>
                <ul class="show-menu">
                  <li><a class="<?php if(isset($_GET['dashboard'])){ echo 'active'; } ?>" href="index.php?dashboard"><i class="fa fa-power-off mr-2"></i>Dashboard</a></li>
                  <li><a class="<?php if(isset($_GET['add_product'])){ echo 'active'; } ?>" href="index.php?add_product"><i class="fa fa-chevron-right mr-2"></i>Add Product</a></li>
                  <li><a class="<?php if(isset($_GET['all_product'])){ echo 'active'; } ?>" href="index.php?all_product"><i class="fa fa-chevron-right mr-2"></i>All Products</a></li>
                  <li><a class="<?php if(isset($_GET['order'])){ echo 'active'; } ?>" href="index.php?order"><i class="fa fa-chevron-right mr-2"></i>Order</a></li>
                  <li><a class="<?php if(isset($_GET['all_customers'])){ echo 'active'; } ?>" href="index.php?all_customers"><i class="fa fa-chevron-right mr-2"></i>All Customers</a></li>
                </ul>
              </li>
              <li><a href="javascript:void(0)"><i class="fa fa-power-off mr-2"></i>Blog <span class="arrow"><i class="fa fa-angle-down"></i></span></a>
                 <ul>
                  <li><a href=""><i class="fa fa-power-off mr-2"></i>Dashboard</a></li>
                  <li><a href=""><i class="fa fa-chevron-right mr-2"></i>Add Product</a></li>
                  <li><a href=""><i class="fa fa-chevron-right mr-2"></i>All Products</a></li>
                  <li><a href=""><i class="fa fa-chevron-right mr-2"></i>Total Order</a></li>
                  <li><a href=""><i class="fa fa-chevron-right mr-2"></i>Sub Menu</a></li>
                  <li><a href=""><i class="fa fa-chevron-right mr-2"></i>Sub Menu</a></li>
                </ul>
              </li>
              <li><a href="javascript:void(0)"><i class="fa fa-power-off mr-2"></i>All Users <span class="arrow"><i class="fa fa-angle-down"></i></span></a>
                 <ul>
                  <li><a href=""><i class="fa fa-chevron-right mr-2"></i>Add Product</a></li>
                  <li><a href=""><i class="fa fa-chevron-right mr-2"></i>All Products</a></li>
                  <li><a href=""><i class="fa fa-chevron-right mr-2"></i>Total Order</a></li>
                  <li><a href=""><i class="fa fa-chevron-right mr-2"></i>Sub Menu</a></li>
                  <li><a href=""><i class="fa fa-chevron-right mr-2"></i>Sub Menu</a></li>
                </ul>
              </li>
              <li><a href="javascript:void(0)"><i class="fa fa-power-off mr-2"></i>Settings <span class="arrow"><i class="fa fa-angle-down"></i></span></a>
                 <ul>
                  <li><a href=""><i class="fa fa-chevron-right mr-2"></i>Add Product</a></li>
                  <li><a href=""><i class="fa fa-chevron-right mr-2"></i>All Products</a></li>
                  <li><a href=""><i class="fa fa-chevron-right mr-2"></i>Total Order</a></li>
                  <li><a href=""><i class="fa fa-chevron-right mr-2"></i>Sub Menu</a></li>
                  <li><a href=""><i class="fa fa-chevron-right mr-2"></i>Sub Menu</a></li>
                </ul>
              </li>
              <li><a href=""><i class="fa fa-power-off mr-2"></i>Home</a></li>
              
            </ul>
          </div>
        </aside>