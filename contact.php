<?php include('mail_send.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <title>Contact | Nofino Rural Finance Private Limited </title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.svg">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.svg">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.svg">
    <meta name="description" content="Nofino Rural Finance Private Limited">
    <!-- fonts -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/pylon-icons.css">
    <link rel="stylesheet" href="assets/css/odometer.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="assets/css/nouislider.min.css">
    <link rel="stylesheet" href="assets/css/nouislider.pips.css">
    <link rel="stylesheet" type="text/css" href="assets/css/flaticon.css">
    <!-- template styles -->
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>
    <div class="preloader">
        <img class="preloader__image" src="assets/images/loader.png" alt="">
    </div>
    <!-- /.preloader -->
    <div class="page-wrapper">
        <?php include ('pages/header.php'); ?>
        <!-- /.main-header -->

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div>
            <!-- /.sticky-header__content -->
        </div>
        <!-- /.stricky-header -->

        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg-1-1.jpg);"></div>
            <!-- /.page-header__bg -->
            <div class="container">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index-2.html">Home</a></li>
                    <li>/</li>
                    <li><span>Contact Us</span></li>
                </ul>
                <!-- /.thm-breadcrumb list-unstyled -->
                <h2>Contact Us</h2>
            </div>
            <!-- /.container -->
        </section>
        <!-- /.page-header -->
        <section class="contact-one">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="contact-one__content">
                            <div class="block-title">
                                <p class="small-title">Get in touch with us</p>
                                <h2 class="title-block">Ask for your query</h2>
                            </div>
                            <div class="contact-one__box">
                                <i class="pylon-icon-telephone"></i>
                                <div class="contact-one__box-content">
                                    <h4>Call Anytime</h4>
                                    <a href="tel:+917002079156">+917002079156</a>
                                </div>
                                <!-- /.contact-one__box-content -->
                            </div>
                            <!-- /.contact-one__box -->
                            <div class="contact-one__box">
                                <i class="pylon-icon-email1"></i>
                                <div class="contact-one__box-content">
                                    <h4>Write Email</h4>
                                    <a href="mailto:info@nofinofinance.com">info@nofinofinance.com</a>
                                </div>
                                <!-- /.contact-one__box-content -->
                            </div>
                            <!-- /.contact-one__box -->
                            <div class="contact-one__box">
                                <i class="pylon-icon-pin1"></i>
                                <div class="contact-one__box-content">
                                    <h4>Visit Office</h4>
                                    <a href="#">Mandia Goan, Mandia, Barpeta, Assam - 781308 India</a>
                                </div>
                                <!-- /.contact-one__box-content -->
                            </div>
                            <!-- /.contact-one__box -->
                        </div>
                        <!-- /.contact-one__content -->
                    </div>
                    <!-- /.col-lg-5 -->
                    <div class="col-lg-7">
                        <form action="" method="POST" id="contactForm" class="contact-one__form">
                            <div class="row low-gutters">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="name" placeholder="Your Name" class="form-control contact-one__form-input"  required>
                                    </div>
                                </div>
                                <!-- /.col-md-6 -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" name="email" placeholder="Your Email" class="form-control contact-one__form-input"  required>
                                    </div>
                                </div>
                                <!-- /.col-md-6 -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="number" name="phone" placeholder="Phone Number" class="form-control contact-one__form-input" required>
                                    </div>
                                </div>
                                <!-- /.col-md-6 -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="subject" placeholder="Subject" class="form-control contact-one__form-input"  required>
                                    </div>
                                </div>
                                <!-- /.col-md-6 -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea   name="message" id="message" placeholder="Write Message" rows="7" cols="25" class="contact-one__form-input" required></textarea>
                                    </div>
                                    <button class="thm-btn" type="submit" name="submit" id="submit" >Send A Message</button>                                    
                                </div>
                                    <div class="col-md-12">
                                        <span style="color:green" id="msg"></span>
                                    </div>
                                <!-- /.col-md-6 -->
                            </div>
                            <!-- /.row -->
                        </form>
                        <!-- /.contact-one__from -->
                    </div>
                    <!-- /.col-lg-7 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /.contact-one -->
        <div class="google-map__home-two">
            <iframe title="template google map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3577.6691095803158!2d90.95424887443284!3d26.272400487316162!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x37599bd0d6778d8d%3A0x9bb21e478b04061e!2sM%20Islam%20Computer%20service!5e0!3m2!1sen!2sin!4v1684249821993!5m2!1sen!2sin"
                class="map__home-two" allowfullscreen></iframe>
        </div>
        <!-- /.google-map -->
        <?php include ('pages/footer.php'); ?>
        <!-- /.bottom-footer -->

    </div>
    <!-- /.page-wrapper -->
        <?php include ('pages/mobile_nav.php'); ?>
    <!-- /.search-popup -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/swiper.min.js"></script>
    <script src="assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.validate.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/odometer.min.js"></script>
    <script src="assets/js/jquery.appear.min.js"></script>
    <script src="assets/js/wNumb.min.js"></script>
    <script src="assets/js/nouislider.min.js"></script>

    <!-- template js -->
    <script src="assets/js/theme.js"></script>    
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    
        <script>
            jQuery('#contactForm').on('submit',function(e){
                jQuery('#msg').html('');
                jQuery('#submit').html('Please wait');
                jQuery('#submit').attr('disabled',true);
                jQuery.ajax({
                    url:'mail_send.php',
                    type:'post',
                    data:jQuery('#contactForm').serialize(),
                    success:function(result){
                        jQuery('#msg').html(result);
                        jQuery('#submit').html('Submit');
                        jQuery('#submit').attr('disabled',false);
                        jQuery('#contactForm')[0].reset();
                    }
                });
                e.preventDefault();
            });
	  </script>
      
        


      <!--Add the following script at the bottom of the web page (before </body></html>)-->
    <script type="text/javascript">function add_chatinline(){var hccid=45575293;var nt=document.createElement("script");nt.async=true;nt.src="https://www.mylivechat.com/chatinline.aspx?hccid="+hccid;var ct=document.getElementsByTagName("script")[0];ct.parentNode.insertBefore(nt,ct);}
    add_chatinline();</script>
</body>

</html>