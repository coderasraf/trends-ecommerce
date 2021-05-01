<section class="carousel-area owl-carousel">
  <?php 
      $select = "SELECT * FROM slider LIMIT 0,4";
      $run_slider = mysqli_query($con,$select);
      while ($row = mysqli_fetch_assoc($run_slider)) { ?>
    <div class="single-carousel-area" style="background-image: url('<?php echo $row['slider_images']; ?>');">
      <div class="container grid-carousel">
        <div class="left-carousel-item">
          <?php echo $row['slider_title']; ?>
          <?php echo $row['slider_desc']; ?>
          <a href="<?php echo $row['button_link'] ?>" class="line-btn btns"><?php echo $row['button_text']; ?><i class="fa fa-angle-right"></i></a>
        </div>
        <div class="right-carousel-item">
          <img src="<?php echo $row['slider_meta_image']; ?>" alt="">
        </div>
      </div>
    </div> 
  <?php } ?>
</section>