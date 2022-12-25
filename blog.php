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
          <div class="imgbg-page" style="background-image:url(<?php echo URL?>assets/images/blog_banner.png)"></div>

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

  
          

<!-- section blog -->    
<section class="whitepage no-bottom no-top">
  <div class="container">
    <div class="row">

            <!-- left content -->
            <div class="col-md-8">
              <div class="sp-padding">
              <div class="" data-animation="fadeInUp" data-time="300">

                <!-- article -->
                <article>
                  <div class="post-image">
                    <img alt="blog-img" class="img-responsive" src="assets/img/blog/img1.jpg">
                    <div class="post-heading">
                      <h3>
                        <a class="link"  href="#">Fierent adipisci iracundia est ei</a>
                      </h3>
                    </div>
                  </div>

                  <p>
                    Qui ut ceteros comprehensam. Cu eos sale sanctus eligendi, id ius elitr saperet, ocurreret pertinacia pri an. No mei nibh consectetuer, semper laoreet perfecto ad qui, est rebum
                    nulla argumentum ei. Fierent adipisci iracundia est ei, usu timeam persius ea. Usu ea justo malis, pri quando everti electram ei, ex homero omittam salutatus sed.
                  </p>

                  <div class="bottom-article">
                    <ul class="meta-post">
                      <li>
                        <a class="link"  href="#">Jan 12, 2017</a>
                      </li>
                    </ul>
                    <a class="btn pull-right" href="#">Read More</a>
                  </div>
                </article>
                <!-- article end -->
                
                <!-- article -->
                <article>
                  <div class="post-image">
                    <img alt="blog-img" class="img-responsive" src="assets/img/blog/img1.jpg">
                    <div class="post-heading">
                      <h3>
                        <a class="link"  href="#">Qui ut ceteros comprehensam</a>
                      </h3>
                    </div>
                  </div>

                  <p>
                    Qui ut ceteros comprehensam. Cu eos sale sanctus eligendi, id ius elitr saperet, ocurreret pertinacia pri an. No mei nibh consectetuer, semper laoreet perfecto ad qui, est rebum
                    nulla argumentum ei. Fierent adipisci iracundia est ei, usu timeam persius ea. Usu ea justo malis, pri quando everti electram ei, ex homero omittam salutatus sed.
                  </p>

                  <div class="bottom-article">
                    <ul class="meta-post">
                      <li>
                        <a class="link"  href="#">Jan 12, 2017</a>
                      </li>
                    </ul>
                    <a class="btn pull-right" href="#">Read More</a>
                  </div>
                </article>
                <!-- article end -->
                
                <!-- article -->
                <article>
                  <div class="post-image">
                    <img alt="blog-img" class="img-responsive" src="assets/img/blog/img1.jpg">
                    <div class="post-heading">
                      <h3>
                        <a class="link"  href="#">Cu eos sale sanctus eligendi</a>
                      </h3>
                    </div>
                  </div>

                  <p>
                    Qui ut ceteros comprehensam. Cu eos sale sanctus eligendi, id ius elitr saperet, ocurreret pertinacia pri an. No mei nibh consectetuer, semper laoreet perfecto ad qui, est rebum
                    nulla argumentum ei. Fierent adipisci iracundia est ei, usu timeam persius ea. Usu ea justo malis, pri quando everti electram ei.
                  </p>

                  <div class="bottom-article">
                    <ul class="meta-post">
                      <li>
                        <a class="link"  href="#">Jan 12, 2017</a>
                      </li>
                    </ul>
                    <a class="btn pull-right" href="#">Read More</a>
                  </div>
                </article>
                <!-- article end -->
                
                <!-- next prev blog -->
                <div id="pagination">
                  <span class="pagina-num">Page 1 of 3</span> 
                  <a class="current" href="#">1</a> 
                  <a class="inactive" href="#">2</a> 
                  <a class="inactive" href="#">3</a> 
                  <span class="pull-right">
                  <a class="link"  href= "#">prev</a> 
                  <a class="link"  href="#">next</a>
                  </span>
                </div>
                <!-- next prev blog end -->
              </div>
            </div>
            </div>
            <!-- left content end -->
            
            <!-- right content -->
            <div class="col-md-4 pull-right">
            <div class="sp-padding">
              <aside class="oStep" data-animation="fadeInUp" data-time="600">
              
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
 <!-- section blog end -->
  

            
         
            
            
     
      
    
      
      
     
      
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