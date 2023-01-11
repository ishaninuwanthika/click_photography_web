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
            <div class="imgbg-page" style="background-image:url(assets/images/contact/contact_banner.png)"></div>

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

    <!-- section contact -->
    <section class="whitepage no-top no-bottom">
      <div class="container-fluid">
        <div class="row">
          <div class="no-gutter">

            <!-- content left -->
            <div class="col-md-4 col-xs-12 " data-animation="fadeInLeft" data-time="0">
              <div id="map"></div>
            </div>
            <!-- content left end -->

            <!-- content right -->
            <div class="col-md-6 col-md-offset-1 col-xs-10 col-xs-offset-1">

              <!-- row content -->
              <div class="row">

                <!-- spacer-->
                <div class="space-double">
                </div>
                <!-- spacer end -->

                <!-- address -->
                <div class="col-md-4 col-xs-12 " data-animation="fadeInUp" data-time="300">
                  <h5>HERE YOU FIND US</h5>
                  <p>55 Hillside Road, Papatoetoe, Auckland 2025</p>
                  <div class="space-half"></div>
                </div>

                <div class="col-md-3 col-xs-12 " data-animation="fadeInUp" data-time="600">
                  <h5>CALL US</h5>
                  <p>+64223921099</p>
                  <div class="space-half"></div>
                </div>

                <div class="col-md-4 col-xs-12 " data-animation="fadeInUp" data-time="900">
                  <h5>EMAIL US</h5>
                  <a class="link" href="mailto:clickbydhanesh@gmail.com">clickbydhanesh@gmail.com</a>
                  <div class="space-half"></div>
                </div>
                <!-- address end -->

                <!-- contact form -->
                <div class="col-md-12 col-xs-12">
                  <div class="contact " data-animation="fadeInDown" data-time="1200">
                    <form action="#" class="row" id="form1" method="post" name="form1">
                      <input id="name" name="name" placeholder="your name" type="text"> <input id="email" name="email"
                        placeholder="your e-mail" type="text">
                      <div class="error" id="error_email">Please check your email</div>
                      <textarea cols="50" id="message" name="message" placeholder="your enquiry" rows="4"></textarea>
                      <div class="error" id="error_message">Please check your message</div>
                      <div class="success" id="mail_success">Thank you. Your message has been sent.</div>
                      <div class="error" id="mail_failed">Error, email not sent</div>
                      <div class="space-half"></div>
                      <button id="send" class="btn-contact" type="submit">SENT NOW</button>
                    </form>
                  </div>
                </div>
                <!-- contact form end -->

                <!-- spacer -->

              </div>
              <!-- row content end -->
            </div>
            <!-- content right end -->

          </div>
        </div>
      </div>
    </section>
    <!-- section contact end -->















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