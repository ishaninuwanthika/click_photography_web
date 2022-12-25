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
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


  </head>
  <body>

<!-- preloader -->  
<!-- <div class="bg-preloader"></div>
<div class="preloader">
  <div class="mainpreloader">
    <img class="logo-preloader" alt="preloaderlogo" src="img/logo-preloader.png"> <span>loading</span>
  </div>
</div> -->
<!-- preloader end -->

<!-- content wraper -->
<div class="content-wrapper">

  <!-- nav -->
       <?php include_once ROOT_PATH.'includes/header.php'; ?>
       <!-- nav end -->

       <!-- subtitle -->    
  <div class="container-fluid">
    <div class="row">
      <div class="no-gutter">
      
        <!-- main subtitle -->
        <div class="" data-animation="fadeInLeft" data-time="0">
          <div class="imgbg-page" style="background-image:url(assets/images/gallery/gallery_banner.png)"></div>

          <!-- subtitle -->
         
          <!-- subtitle end -->

        </div>
        <!-- main subtitle end -->
  
     </div>
    </div>
  </div>
  <!-- subtitle end -->

            <section>

              <div class="container">
                <div class="row">
            
                
                  <div  data-aos="fade-up"
     data-aos-duration="3000">


                      <h1 style="text-transform: unset;text-transform: unset;
    font-size: 40px;
    letter-spacing: 1.5px;
    line-height: 50px;
    font-weight: 600;">Life is a such a glorious journey
                        <br>
                        as which we don't want to miss important moments
                        <br><br>
                        
                      We help you capture those moments<br>
                      so you can cherish them forever
                      <br><br>
                      We create magical moments, <br>
We are <span style="color:#ffc905;font-weight: 900;
    text-transform: uppercase;
    letter-spacing: 2px;
    font-size: 50px;">click photography</span>.
                      </h1>



                  </div>


                </div>
                </div>
        
            
            </section>

            <!-- section -->    
            <section class="whitepage no-top no-bottom">
            <div class="container-fluid">
                <div class="row">
                <div class="no-gutter">
                
                    <!-- col -->
                    <div class="col-md-12 p-90">
                    <div class="sp-padding">
            
                    <!-- filter project -->
                    <div class="" data-animation="fadeInUp" data-time="900">
                        <div class="filter-wraper">
                            <ul id="filter-porto">

                            <li class="filt-projects" data-project=".pho">PHOTOGRAPHY
                            </li>

                            <li class="space">
                            </li>

                            <li class="filt-projects" data-project=".mod">MODEL
                            </li>

                            <li class="space">
                            </li>

                            <li class="filt-projects" data-project=".pers">PERSONAL
                            </li>

                            <li class="space">
                            </li>

                            <li class="filt-projects" data-project=".capture">CAPTURE
                            </li>
                            
                            <li class="filt-projects active" data-project="*">ALL ALBUM
                            </li>
                            </ul>
                        </div>
                    </div>
                    <!-- filter project end -->
                    
                        <!-- start gallery -->
                        <div class="no-gutter " data-animation="fadeInUp" data-time="600" id="projects-wrap">
                        <div class="row">
                        
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 item pho pers">
                            <div class="gal-pro big-img">
                            <a title="Click Photography" href="<?php echo URL?>assets/images/gallery/a.jpg">
                            <div class="hovereffect">
                            <img alt="imageportofolio" class="img-responsive" src="<?php echo URL?>assets/images/gallery/a.jpg">
                            <div class="overlay">
                            <h3>Model Album
                            </h3>
                            <p>MORE DETAIL <span class="ti-angle-right"></span></p>
                            </div>
                            </div>
                            </a>
                        </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 item mod">
                            <div class="gal-pro big-img">
                            <a title="Click Photography"  href="<?php echo URL?>assets/images/gallery/b.jpg">
                            <div class="hovereffect">
                            <img alt="imageportofolio" class="img-responsive" src="<?php echo URL?>assets/images/gallery/b.jpg">
                            <div class="overlay">
                            <h3>Female Model
                            </h3>
                            <p>MORE DETAIL <span class="ti-angle-right"></span></p>
                            </div>
                            </div>
                            </a>
                        </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 item mod">
                        <div class="gal-pro big-img">
                            <a title="Click Photography" href="<?php echo URL?>assets/images/gallery/c.jpg">
                            <div class="hovereffect">
                            <img alt="imageportofolio" class="img-responsive" src="<?php echo URL?>assets/images/gallery/c.jpg">
                            <div class="overlay">
                            <h3>Female Model
                            </h3>
                            <p>MORE DETAIL <span class="ti-angle-right"></span></p>
                            </div>
                            </div>
                            </a>
                        </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 item pho pers">
                        <div class="gal-pro big-img">
                            <a title="Click Photography" href="<?php echo URL?>assets/images/gallery/d.jpg">
                            <div class="hovereffect">
                            <img alt="imageportofolio" class="img-responsive" src="<?php echo URL?>assets/images/gallery/d.jpg">
                            <div class="overlay">
                            <h3>Female Model
                            </h3>
                            <p>MORE DETAIL <span class="ti-angle-right"></span></p>
                            </div>
                            </div>
                            </a>
                        </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 item mod">
                        <div class="gal-pro big-img">
                            <a title="Click Photography" href="<?php echo URL?>assets/images/gallery/e.jpg">
                            <div class="hovereffect">
                            <img alt="imageportofolio" class="img-responsive" src="<?php echo URL?>assets/images/gallery/e.jpg">
                            <div class="overlay">
                            <h3>Female Model
                            </h3>
                            <p>MORE DETAIL <span class="ti-angle-right"></span></p>
                            </div>
                            </div>
                            </a>
                        </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 item mod">
                        <div class="gal-pro big-img">
                            <a title="Click Photography" href="<?php echo URL?>assets/images/gallery/f.jpg">
                            <div class="hovereffect">
                            <img alt="imageportofolio" class="img-responsive" src="<?php echo URL?>assets/images/gallery/f.jpg">
                            <div class="overlay">
                            <h3>Female Model
                            </h3>
                            <p>MORE DETAIL <span class="ti-angle-right"></span></p>
                            </div>
                            </div>
                            </a>
                        </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 item mod">
                        <div class="gal-pro big-img">
                            <a title="Click Photography" href="<?php echo URL?>assets/images/gallery/g.jpg">
                            <div class="hovereffect">
                            <img alt="imageportofolio" class="img-responsive" src="<?php echo URL?>assets/images/gallery/g.jpg">
                            <div class="overlay">
                            <h3>Female Model
                            </h3>
                            <p>MORE DETAIL <span class="ti-angle-right"></span></p>
                            </div>
                            </div>
                            </a>
                        </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 item pho pers">
                        <div class="gal-pro big-img">
                            <a title="Click Photography" href="<?php echo URL?>assets/images/gallery/h.jpg">
                            <div class="hovereffect">
                            <img alt="imageportofolio" class="img-responsive" src="<?php echo URL?>assets/images/gallery/h.jpg">
                            <div class="overlay">
                            <h3>Female Model
                            </h3>
                            <p>MORE DETAIL <span class="ti-angle-right"></span></p>
                            </div>
                            </div>
                            </a>
                        </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 item capture">
                        <div class="gal-pro big-img">
                            <a title="Click Photography" href="<?php echo URL?>assets/images/gallery/i.jpg">
                            <div class="hovereffect">
                            <img alt="imageportofolio" class="img-responsive" src="<?php echo URL?>assets/images/gallery/i.jpg">
                            <div class="overlay">
                            <h3>Model Album
                            </h3>
                            <p>MORE DETAIL <span class="ti-angle-right"></span></p>
                            </div>
                            </div>
                            </a>
                        </div>
                        </div>
                        
                        </div>
                        </div>
                        <!-- gallery end -->
                        
                        <!-- spacer -->
                        <!-- <div class="space-half"></div> -->
                        <!-- spacer -->
                        
                       
                        
                    </div>       
                    </div>
                    <!-- col end -->     
                    
                </div>
                </div>
            </div>
            </section>
 <!-- section end -->

 <section class="yellowpage">
        <div class="container">
          <div class="row">
          
            <div class="col-md-7 pull-left">
              <div class="" data-animation="fadeInLeft" data-time="300">
                <div class="main-text " data-animation="fadeInLeft" data-time="300">
                  Quisquam deserunt nostrum venenatis consectetuer?
                </div>
              </div>
            </div>

            <div class="col-md-5">
              <div class="right">
                <div class="btn-yellow " data-animation="fadeInRight" data-time="600">
                <a href="https://wa.me/<number>" target="_blank">Contact Us</a>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </section>
  

            
         
            
            
     
      
    
      
      
     
      
      <!-- footer -->
      <?php include_once ROOT_PATH.'includes/sub_footer.php'; ?>
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
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
  </body>
</html>