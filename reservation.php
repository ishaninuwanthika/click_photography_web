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
                        <div class="imgbg-page" style="background-image:url(assets/images/contact/contact_banner.png)">
                        </div>
                    </div>
                    <!-- main subtitle end -->
                </div>
            </div>
        </div>
        <!-- subtitle end -->

        <!-- section contact -->
        <section class="whitepage no-top no-bottom">
            <div class="container">
                <div class="row">
                    <div class="space-double"></div>

                    <div class="col-sm-12 col-md-12 col-lg-12">

                        <div class="contact " data-animation="fadeInDown" data-time="1200">
                            <form action="#" class="row" id="form1" method="post" name="form1">
                                <div class="row">
                                    <div class="col-sm-6 col-md-6 col-lg-6">
                                        <label class="reservation_label">Your Name <label
                                                class="text text-danger reservation_req">*</label></label>
                                        <input type="text" name="client_name" id="client_name"
                                            class="form-control reservation-form">
                                        <div class="error" id="error_name">Your Name is required</div>
                                    </div>

                                    <div class="col-sm-6 col-md-6 col-lg-6">
                                        <label class="reservation_label">Your Email <label
                                                class="text text-danger reservation_req">*</label></label>
                                        <input type="text" name="client_email" id="client_email"
                                            class="form-control reservation-form">
                                        <div class="error" id="error_email">Your Email is required</div>
                                    </div>

                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <label class="reservation_label">Your Message <label
                                                class="text text-danger reservation_req">*</label></label>
                                        <textarea cols="50" style="width:100%" name="client_message" id="client_message"
                                            rows="4" class="form-control reservation-form"></textarea>
                                        <div class="error" id="error_message">Your Message is required</div>
                                    </div>

                                    <div class="col-sm-6 col-md-6 col-lg-6">
                                        <label class="reservation_label">Your Contact Number <label
                                                class="text text-danger reservation_req">*</label></label>
                                        <input type="text" name="res_contact_number" id="res_contact_number"
                                            class="form-control reservation-form">
                                        <div class="error" id="error_contact">Your Contact Number is required</div>
                                    </div>

                                    <div class="col-sm-6 col-md-6 col-lg-6">
                                        <label class="reservation_label">Event Date <label
                                                class="text text-danger reservation_req">*</label></label>
                                        <input type="date" name="reservation_date" id="reservation_date"
                                            class="form-control reservation-form">
                                        <div class="error" id="error_reseration_date">Event date is required</div>
                                    </div>

                                    <div class="space-half"></div>
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <button type="button" id="btn-reservation" class="btn-reservation"
                                            name="btn-reservation">BOOK NOW</button>
                                    </div>


                                    <div class="space-double">
                                    </div>
                                </div>
                            </form>
                        </div>
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