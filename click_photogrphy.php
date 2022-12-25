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
       <?php include_once ROOT_PATH.'includes/header_2.php'; ?>
       <!-- nav end -->


       <!-- subtitle -->    
  <div class="container-fluid">
    <div class="row">
      <div class="no-gutter">
      
        <!-- main subtitle -->
        <div class="" data-animation="fadeInLeft" data-time="0">
          <div class="imgbg-page" style="background-image:url(assets/images/click/click_photography_banner.png)"></div>

          <!-- subtitle -->
          <div class="col-md-12 overlay-clasic">
           <div class="subtitle">
            <h2>
              Gallery
            </h2>
           </div>
          </div>
          <!-- subtitle end -->

        </div>
        <!-- main subtitle end -->
  
     </div>
    </div>
  </div>
  <!-- subtitle end -->

  
            <!-- section -->    
            <section class="whitepage no-top no-bottom">
            <div class="container-fluid">
                <div class="row">
                <div class="no-gutter">
                
                    <!-- col -->
                    <div class="col-md-12 p-90">
                    <div class="sp-padding">
            
                    <!-- filter project -->
                   
                    <!-- filter project end -->
                    
                        <!-- start gallery -->
                        <div class="no-gutter " data-animation="fadeInUp" data-time="600" id="projects-wrap">
                        <div class="row">
                        
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 item pho pers">
                            <div class="gal-pro big-img">
                         
                                <div class="hovereffect">

                                    <img alt="imageportofolio" class="img-responsive" src="<?php echo URL?>assets/images/click/1.png">
                                
                                </div>
                            
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 item pho pers">
                            <div class="gal-pro big-img">
                         
                                <div class="hovereffect">

                                    <img alt="imageportofolio" class="img-responsive" src="<?php echo URL?>assets/images/click/2.png">
                                
                                </div>
                            
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 item pho pers">
                            <div class="gal-pro big-img">
                         
                                <div class="hovereffect">

                                    <img alt="imageportofolio" class="img-responsive" src="<?php echo URL?>assets/images/click/3.png">
                                
                                </div>
                            
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 item pho pers">
                            <div class="gal-pro big-img">
                         
                                <div class="hovereffect">

                                    <img alt="imageportofolio" class="img-responsive" src="<?php echo URL?>assets/images/click/4.png">
                                
                                </div>
                            
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 item pho pers">
                            <div class="gal-pro big-img">
                         
                                <div class="hovereffect">

                                    <img alt="imageportofolio" class="img-responsive" src="<?php echo URL?>assets/images/click/5.png">
                                
                                </div>
                            
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 item pho pers">
                            <div class="gal-pro big-img">
                         
                                <div class="hovereffect">

                                    <img alt="imageportofolio" class="img-responsive" src="<?php echo URL?>assets/images/click/6.png">
                                
                                </div>
                            
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
  </body>
</html>