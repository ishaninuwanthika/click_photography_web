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
    <!-- Bootstrap CSS -->
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
          <div class="imgbg-page" style="background-image:url(assets/images/about/about_banner.png)"></div>

          <!-- subtitle -->
          <div class="col-md-12 overlay-clasic">
           <div class="subtitle">
            <h2>
              About Us
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
  
 <section id="about-us-1" class="h-bg no-padding whitepage">
  <div class="container-fluid">
   <div class="row">
   
    <div class="image-container col-md-6 pull-left " data-animation="fadeInLeft" data-time="0"></div>

               <div class="col-md-6 p-90">
                <div class="sp-padding">
                
                  <h4 class="text_onstep" data-animation="fadeInRight" data-time="0">
                  Photography
                  </h4>

                  <h4 class="text_onstep" data-animation="fadeInRight" data-time="600">
                  is my passion<span class="devider"></span>
                  </h4>            

                  <p class="text_onstep" data-animation="fadeInDown" data-time="900">
                  Thank you for taking the time to look at my work. I hope you can see that I love what I do - which is all about the unique combination of the craft and the people. I approach photography with a romantic, fine art sensibility. My imagery is understated yet evocative, resulting from the clear and polished creative direction that elicits light-filled, painterly portraits.
                  </p>
              
               
                
               </div>
              <div class="clearfix"></div>
             </div>
                        
   </div>
  </div>
 </section>
            
            <section id="about-us-2" class="h-bg no-padding whitepage">
            <div class="container-fluid">
               <div class="row">
               
                <div class="image-container col-md-6 pull-right text_onstep" data-animation="fadeInRight" data-time="0"></div>

                <div class="col-md-6 p-90">
                 <div class="sp-padding">
                 
                  <h4 class="text_onstep" data-animation="fadeInLeft" data-time="0">
                  Creativity
                  </h4>

                  <h4 class="text_onstep" data-animation="fadeInLeft" data-time="600">
                  is my fuel <span class="devider"></span>
                  </h4>
                  

                  <p class="text_onstep" data-animation="fadeInDown" data-time="900">
                  I love to be creative in all that I do and to make life fun and colorful. My use of fresh and simple composition and natural light has evolved from a deep love and respect for the old masters - Rembrandt, Vermeer, and Botticelli. I am a fiercely dedicated medium format photographer and my creative process is imaginative, industrious, and detailed. In each capture, I aim for perfection and beauty.
                  </p>
                  
                 </div>
                <div class="clearfix"></div>
               </div>
               
             </div>
            </div>
            </section>
            
            
      <!-- section team -->
      <section class="whitepage">
        <!-- team -->
        <div class="container">
          <div class="row">
          <div class="text_onstep" data-animation="fadeInUp" data-time="200">
          
          
            <div class="col-md-4 col-sm-6">
            <div class="sp-padding">
              <div class="team-wrapper">
                <img alt="team img 1" class="img-responsive" src="<?php echo URL?>assets/images/about/person_prabha.png">
                <div class="team-des">
                  <h3>
                  Prabha
                  </h3>
                  <span class="detail">Prabha is the creative director of our company who keeps us on track and makes sure the final product is made up to standards.</span>
               
                </div>
              </div>
            </div>
            </div>

            <div class="col-md-4 col-sm-6">
            <div class="sp-padding">
              <div class="team-wrapper">
                <img alt="team img 4" class="img-responsive" src="<?php echo URL?>assets/images/about/person_dhanesh.png">
                <div class="team-des">
                  <h3>
                  Dhanesh
                  </h3>
                  <span class="detail">Professional photographer and videographer</span> 
           
                </div>
              </div>
            </div>  
            </div>

            <div class="col-md-4 col-sm-6">
            <div class="sp-padding">
              <div class="team-wrapper">
                <img alt="team img 3" class="img-responsive" src="<?php echo URL?>assets/images/about/person_shehan.png">
                <div class="team-des">
                  <h3>
                  Shehan 
                  </h3>
                  <span class="detail">Professional photographer and videographer</span>
              
                </div>
              </div>
            </div>  
            </div>

            
           </div>  
          </div>
        </div>
        <!-- team end -->
      </section>
      <!-- section team end -->
      
      <section class="yellowpage">
        <div class="container">
          <div class="row">
          
            <div class="col-md-7 pull-left">
              <div class="text_onstep" data-animation="fadeInLeft" data-time="300">
                <div class="main-text text_onstep" data-animation="fadeInLeft" data-time="300">
                Something on your mind? Chat with us
                </div>
              </div>
            </div>

            <div class="col-md-5">
              <div class="right">
                <div class="btn-yellow text_onstep" data-animation="fadeInRight" data-time="600">
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