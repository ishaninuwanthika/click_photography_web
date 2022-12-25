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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


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

                  <div class="col-md-12">

                        <div class="owl-carousel owl-theme">
                            <div class="item" data-aos="fade-up"
     data-aos-duration="3000">

                            <h1 class="h1_gallery_animation">Life is a such a glorious journey
                        <br>
                        as which we don't want to miss important moments
                        <br><br></h1>
                            </div>
                            <div class="item" data-aos="fade-up"
     data-aos-duration="3000">
                              <h1 class="h1_gallery_animation">
                              We help you capture those moments
                              <br>
                              so you can cherish them forever.
                              </h1>
                            </div>
                            <div class="item" data-aos="fade-up"
     data-aos-duration="3000">
                              <h1 class="h1_gallery_animation">
                              We create magical moments, <br>
                              We are <span style="">click photography</span>
                              </h1>
                            </div>
                            
                        </div>

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

                            <li class="filt-projects" data-project=".pers"> KIDS
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
                   
                    <!-- filter project end -->
                    
                        <!-- start gallery -->
                        <div class="no-gutter " data-animation="fadeInUp" data-time="600" id="projects-wrap">
                        <div class="row">
                        
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 item pho mod">
                            <div class="gal-pro big-img">
                            <a title="Click Photography" href="<?php echo URL?>assets/images/gallery/a.png">
                            <div class="hovereffect">
                            <img alt="imageportofolio" class="img-responsive" src="<?php echo URL?>assets/images/gallery/a.png">
                            <div class="overlay">
                           
                            </div>
                            </div>
                            </a>
                        </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 item mod">
                            <div class="gal-pro big-img">
                            <a title="Click Photography"  href="<?php echo URL?>assets/images/gallery/b.png">
                            <div class="hovereffect">
                            <img alt="imageportofolio" class="img-responsive" src="<?php echo URL?>assets/images/gallery/b.png">
                            <div class="overlay">
                           
                            </div>
                            </div>
                            </a>
                        </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 item pho">
                        <div class="gal-pro big-img">
                            <a title="Click Photography" href="<?php echo URL?>assets/images/gallery/c.png">
                            <div class="hovereffect">
                            <img alt="imageportofolio" class="img-responsive" src="<?php echo URL?>assets/images/gallery/c.png">
                            <div class="overlay">
                          
                            </div>
                            </div>
                            </a>
                        </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 item pho pho">
                        <div class="gal-pro big-img">
                            <a title="Click Photography" href="<?php echo URL?>assets/images/gallery/d.png">
                            <div class="hovereffect">
                            <img alt="imageportofolio" class="img-responsive" src="<?php echo URL?>assets/images/gallery/d.png">
                            <div class="overlay">
                          
                            </div>
                            </div>
                            </a>
                        </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 item mod">
                        <div class="gal-pro big-img">
                            <a title="Click Photography" href="<?php echo URL?>assets/images/gallery/e.png">
                            <div class="hovereffect">
                            <img alt="imageportofolio" class="img-responsive" src="<?php echo URL?>assets/images/gallery/e.png">
                            <div class="overlay">
                            
                            </div>
                            </div>
                            </a>
                        </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 item pho">
                        <div class="gal-pro big-img">
                            <a title="Click Photography" href="<?php echo URL?>assets/images/gallery/f.png">
                            <div class="hovereffect">
                            <img alt="imageportofolio" class="img-responsive" src="<?php echo URL?>assets/images/gallery/f.png">
                            <div class="overlay">
                    
                            </div>
                            </div>
                            </a>
                        </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 item mod">
                        <div class="gal-pro big-img">
                            <a title="Click Photography" href="<?php echo URL?>assets/images/gallery/g.png">
                            <div class="hovereffect">
                            <img alt="imageportofolio" class="img-responsive" src="<?php echo URL?>assets/images/gallery/g.png">
                            <div class="overlay">
                           
                            </div>
                            </div>
                            </a>
                        </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 item pho capture">
                        <div class="gal-pro big-img">
                            <a title="Click Photography" href="<?php echo URL?>assets/images/gallery/h.png">
                            <div class="hovereffect">
                            <img alt="imageportofolio" class="img-responsive" src="<?php echo URL?>assets/images/gallery/h.png">
                            <div class="overlay">
                            
                            </div>
                            </div>
                            </a>
                        </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 item capture">
                        <div class="gal-pro big-img">
                            <a title="Click Photography" href="<?php echo URL?>assets/images/gallery/i.png">
                            <div class="hovereffect">
                            <img alt="imageportofolio" class="img-responsive" src="<?php echo URL?>assets/images/gallery/i.png">
                            <div class="overlay">
                           
                            </div>
                            </div>
                            </a>
                        </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 item pers">
                        <div class="gal-pro big-img">
                            <a title="Click Photography" href="<?php echo URL?>assets/images/gallery/j.png">
                            <div class="hovereffect">
                            <img alt="imageportofolio" class="img-responsive" src="<?php echo URL?>assets/images/gallery/j.png">
                            <div class="overlay">
                            
                            </div>
                            </div>
                            </a>
                        </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 item pers">
                        <div class="gal-pro big-img">
                            <a title="Click Photography" href="<?php echo URL?>assets/images/gallery/j.png">
                            <div class="hovereffect">
                            <img alt="imageportofolio" class="img-responsive" src="<?php echo URL?>assets/images/gallery/k.png">
                            <div class="overlay">
                            
                            </div>
                            </div>
                            </a>
                        </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 item pers">
                        <div class="gal-pro big-img">
                            <a title="Click Photography" href="<?php echo URL?>assets/images/gallery/j.png">
                            <div class="hovereffect">
                            <img alt="imageportofolio" class="img-responsive" src="<?php echo URL?>assets/images/gallery/l.png">
                            <div class="overlay">
                            
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
                Something on your mind? Chat with us  
                </div>
              </div>
            </div>

            <div class="col-md-5">
              <div class="right">
                <div class="btn-yellow " data-animation="fadeInRight" data-time="600">
                <a href="https://wa.me/<number>" target="_blank">Chat Now</a>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
  $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    autoplay:true,
  autoplayTimeout:5000,
  autoplayHoverPause:true,
  center: true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})
</script>
  </body>
</html>