<?php require_once 'app/global/url.php' ?>
<!DOCTYPE html>
<html lang="zxx">
  <head>
  <?php require_once ROOT_PATH.'app/analytics/analytics_head.php';
        require_once ROOT_PATH.'app/meta/meta.php';
        $meta_single_page_title = '';
        $meta_single_page_desc = 'Click Photography';
        $meta_arr = array(
            'title' => $meta_single_page_title,
            'description' => $meta_single_page_desc,
            'image' => URL.'assets/images/meta/home.jpg',
            
            'og:title' => $meta_single_page_title,
            'og:image' => URL.'assets/images/meta/home.jpg',
            'og:description' => $meta_single_page_desc,

            'twitter:image' => URL.'assets/images/meta/home.jpg',
            'twitter:title' => $meta_single_page_title,

        );
        require_once ROOT_PATH.'app/meta/meta_more_details.php'; 
    ?>
    <?php require_once 'imports/css.php' ?>
  </head>
  <body class="home">

<!-- preloader -->  

<!-- preloader end -->

<!-- content wraper -->
<div class="content-wrapper">

<?php include_once ROOT_PATH.'includes/header.php'; ?>
  
  <!-- home -->
  <!-- background slider -->
  <div id="home">
  
    <!-- main gallery big -->
    <div class="owl-carousel" id="owl-slider-home">

    <div class="item imgbg" style="background-image:url(assets/images/slider/slider1.png)">
        <!-- intro -->
        <div class="overlay-main v-align">
          <div class="col-md-10 col-xs-11">
            <h1>
            We capture
            </h1>

            <h3>
            your beautiful moments
            </h3>

            <div class="btn-main">
              <a href="#">EXPLORE<span class="ti-angle-right"></span></a>
            </div>
          </div>
        </div>
        <!-- intro end -->
      </div>
    
      

      <div class="item imgbg" style="background-image:url(assets/images/slider/slider2.png)">
        <!-- intro -->
        <div class="overlay-main v-align">
          <div class="col-md-10 col-xs-11">
            <h1>
            We love to
            </h1>

            <h3>
            color your life
            </h3>

            <div class="btn-main">
              <a href="#">EXPLORE<span class="ti-angle-right"></span></a>
            </div>
          </div>
        </div>
        <!-- intro end -->
      </div>

      <div class="item imgbg" style="background-image:url(assets/images/slider/slider3.png)">
        <!-- intro -->
        <div class="overlay-main v-align">
          <div class="col-md-10 col-xs-11">
            <h1>
            We are
            </h1>

            <h3>
            click photography
            </h3>

            <div class="btn-main">
              <a href="#">EXPLORE<span class="ti-angle-right"></span></a>
            </div>
          </div>
        </div>
        <!-- intro end -->
      </div>
      <div class="item imgbg" style="background-image:url(assets/images/slider/slider4.png)">
        <!-- intro -->
        <div class="overlay-main v-align">
          <div class="col-md-10 col-xs-11">
            <h1>
            We make
            </h1>

            <h3>
            wonderful art
            </h3>

            <div class="btn-main">
              <a href="#">EXPLORE<span class="ti-angle-right"></span></a>
            </div>
          </div>
        </div>
        <!-- intro end -->
      </div>
   

     

   
      
     

    

  
      
    
      
    </div>
    <!-- main gallery big end -->
    
    <!-- Status slider -->
    <div id="owlStatus">
      <div class="owlItems">
        <div class="result">
        </div>
      </div>

      <div class="seperator">
      /
      </div>

      <div class="currentItem">
        <div class="result">
        </div>
      </div>
    </div>
    <!-- Status slider end -->
    
<!-- toggle gallery -->
<div class="nav-bottom">
<div id="opengal">
<i class="fa fa-angle-up"></i>
</div>
</div>
<!-- toggle gallery end -->

<!-- gallery -->
<div class="bottom-option">
<!-- close gallery -->
<div class="nav-bottom-close">
<span>x</span>
</div>
<!-- close gallery end -->
 
  <!-- main gallery small -->
  <div id="projectsSmall" class="owl-carousel">
          <div class="item"><img alt="#" src="<?php echo URL?>assets/images/d.jpg"></div>
          <div class="item"><img alt="#" src="<?php echo URL?>assets/images/e.jpg"></div>
          <div class="item"><img alt="#" src="<?php echo URL?>assets/images/slider1.jpg"></div>
          <div class="item"><img alt="#" src="<?php echo URL?>assets/images/slider2.jpg"></div>
          <div class="item"><img alt="#" src="<?php echo URL?>assets/images/slider3.jpg"></div>
          <div class="item"><img alt="#" src="<?php echo URL?>assets/images/f.jpg"></div>
          <div class="item"><img alt="#" src="<?php echo URL?>assets/images/g.jpg"></div>

  </div>
  <!-- main gallery small end -->
 
</div>
<!-- gallery end -->





<!-- info gallery end -->
    
</div>
<!-- background slider end -->
<!-- home end -->
 <!-- footer -->
 
      <?php include_once ROOT_PATH.'includes/footer.php'; ?>
      <!-- footer end -->
  
  <!-- ScrolltoTop -->
  <div id="totop">
    <span class="ti-angle-up"></span>
  </div>
  <!-- ScrolltoTop end -->
  
</div>
<!-- content wraper end -->
    
<?php require_once 'imports/js.php' ?>
  </body>
</html>