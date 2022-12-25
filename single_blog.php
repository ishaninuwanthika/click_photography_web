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
       <?php include_once ROOT_PATH.'includes/header.php'; ?>
       <!-- nav end -->


       <!-- subtitle -->    
  <div class="container-fluid">
    <div class="row">
      <div class="no-gutter">
      
        <!-- main subtitle -->
        <div class="" data-animation="fadeInLeft" data-time="0">
          <div class="imgbg-page" style="background-image:url(assets/img/gallery-home/3.jpg)"></div>

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
  <div class="container">
    <div class="row">
              
              <!-- left content -->
              <div class="col-md-8">
              <div class="sp-padding">
              <div class="" data-animation="fadeInUp" data-time="300">

                     <!-- article -->
                     <article>
                        <div class="post-image">
                           <img class="img-responsive" src="assets/img/blog/img1.jpg" alt="blog-img" />
                           <div class="post-heading">
                              <h3><a class="link"  href="#">Fierent adipisci iracundia est ei</a></h3>
                           </div>
                        </div>
                        <p>Qui ut ceteros comprehensam. Cu eos sale sanctus eligendi, id ius elitr saperet, ocurreret pertinacia pri an. No mei nibh consectetuer, semper laoreet perfecto ad qui, est rebum nulla argumentum ei. Fierent adipisci iracundia est ei, usu timeam persius ea. Usu ea justo malis, pri quando everti electram ei, ex homero omittam salutatus sed. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur
                        </p>
                        <div class="bottom-article">
                           <ul class="meta-post">
                              <li><a class="link"  href="#">Jan 12, 2017</a>
                              </li>
                           </ul>
                        </div>
                     </article>
                     <!-- article end -->

                   
                     
                  </div>
                  </div>
                  </div>
                  <!-- left content end -->

            <!-- right content -->
            <div class="col-md-4 pull-right">
            <div class="sp-padding">
              <aside class="" data-animation="fadeInUp" data-time="600">
              
                <!-- widget -->
                <div class="widget">
                  <h5>
                    Recent posts
                  </h5>

                  <div class="space-single devider-widget">
                  </div>

                  <div class="recent">
                    <div>
                      <img alt="#" class="pull-left" src="assets/img/blog/65x65/thumb1.jpg">
                      <h6>
                        <a class="link"  href="#">Lorem ipsum dolor sit</a>
                      </h6>

                      <p>
                        Mazim alienum appellantur eu cu ullum officiis pro pri
                      </p>
                    </div>

                    <div>
                      <a class="link"  href="#"><img alt="#" class="pull-left" src="assets/img/blog/65x65/thumb2.jpg"></a>
                      <h6>
                        <a class="link"  href="#">Maiorum ponderum eum</a>
                      </h6>

                      <p>
                        Mazim alienum appellantur eu cu ullum officiis pro pri
                      </p>
                    </div>

                    <div>
                      <a class="link"  href="#"><img alt="#" class="pull-left" src="assets/img/blog/65x65/thumb3.jpg"></a>
                      <h6>
                        <a class="link"  href="#">Et mei iusto dolorum</a>
                      </h6>

                      <p>
                        Mazim alienum appellantur eu cu ullum officiis pro pri
                      </p>
                    </div>
                  </div>
                </div>
                <!-- widget end -->
                
                <!-- widget -->
                <div class="widget">
                  <h5>
                    Tags
                  </h5>

                  <div class="space-single devider-widget">
                  </div>

                  <div class="tags">
                    <div>
                      <a class="link"  href="#">Photography</a>
                    </div>

                    <div>
                      <a class="link"  href="#">Trends</a>
                    </div>

                    <div>
                      <a class="link"  href="#">Interactive</a>
                    </div>

                    <div>
                      <a class="link"  href="#">Interior</a>
                    </div>

                    <div>
                      <a class="link"  href="#">Responsive</a>
                    </div>

                    <div>
                      <a class="link"  href="#">Creative</a>
                    </div>

                    <div>
                      <a class="link"  href="#">Design</a>
                    </div>

                    <div>
                      <a class="link"  href="#">website</a>
                    </div>

                    <div>
                      <a class="link"  href="#">application</a>
                    </div>
                  </div>
                </div>
                <!-- widget end -->
                
                <!-- widget -->
                <div class="widget">
                  <h5>
                    About Us
                  </h5>

                  <div class="space-single devider-widget">
                  </div>

                  <p>
                    Proin hendrerit eget tellus sit amet vestibulum. Nullam a tincidunt leo. Sed eget sem scelerisque, malesuada lectus sed, facilisis sapien. Pellentesque quis ullamcorper est, vitae
                    condimentum enim. Phasellus suscipit eu lacus finibus rhoncus. Maecenas sed lacus aliquam, vehicula sapien ac, cursus erat. Aenean vel erat a urna efficitur varius.
                  </p>
                </div>
                <!-- widget end -->
              </aside>
            </div>
            </div>
            <!-- right content end -->
        
    </div>
  </div>
 </section>
 <!-- section -->
      
 
  

            
         
            
            
     
      
    
      
      
     
      
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