<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <title>Loan Calculation | Nofino Rural Finance Private Limited</title>
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
                    <li><span>Loan Calculator</span></li>
                </ul>
                <!-- /.thm-breadcrumb list-unstyled -->
                <h2>Loan Calculator</h2>
            </div>
            <!-- /.container -->
        </section>
        <!-- /.page-header -->

        <section class="contact-two">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="loan-slider-box">
                            <div class="loan-main-heading block-title text-left">
                                <p class="small-title mb-0">Monthly EMI</p>
                                <h3 class="title-block w-500">Loan Interest Calculator</h3>

                                <div class="loan-yearly-changer">
                                    <input type="checkbox" id="year-change">
                                    <label for="year-change">Calculate loan in year</label>
                                </div>
                            </div>

                            <div class="single-loan-slider">
                                <h4>Loan Amount</h4>
                                <div id="pricipal-slide" class="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
                                    <div class="ui-slider-range ui-corner-all ui-widget-header ui-slider-range-min"></div>
                                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 1.80361%;"></span>
                                </div>
                                <div class="single-loan-counter">
                                    <span>$</span>
                                    <h6 id="pricipal">100000</h6>
                                </div>
                            </div>

                            <div class="single-loan-slider yearly">
                                <h4>Loan Year</h4>
                                <div id="total-year-slide" class="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
                                    <div class="ui-slider-range ui-corner-all ui-widget-header ui-slider-range-min"></div>
                                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 3.44828%;"></span>
                                </div>
                                <div class="single-loan-counter">
                                    <h6 id="totalyear">5</h6>
                                    <span>Years</span>
                                </div>
                            </div>

                            <div class="single-loan-slider monthly active">
                                <h4>Loan Months</h4>
                                <div id="total-month-slide" class="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
                                    <div class="ui-slider-range ui-corner-all ui-widget-header ui-slider-range-min"></div>
                                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 1.0345%;"></span>
                                </div>
                                <div class="single-loan-counter">
                                    <h6 id="totalmonth">120</h6>
                                    <span>Months</span>
                                </div>
                            </div>
                            <div class="single-loan-slider">
                                <h4>Interest Rate</h4>
                                <div id="intrest-slide" class="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
                                    <div class="ui-slider-range ui-corner-all ui-widget-header ui-slider-range-min"></div>
                                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 48.7603%;"></span>
                                </div>
                                <div class="single-loan-counter">
                                    <h6 id="intrest">10</h6>
                                    <span>%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div id="loan-calculator-1" data-interest-rate="15" class="about-one__form">
                            <h3>How Much You Need</h3>
                            <div class="about-one__form-content about-total-loan-form">
                                <div class="about-total-loan-form-calculation">
                                    <p>
                                        <span>Monthly EMI</span>
                                        <b>$<i id="emi">1,309.91</i></b>
                                    </p>
                                    <p>
                                        <span>Total Interest</span>
                                        <b>$<i id="tbl_emi">57,188.72</i></b>
                                    </p>
                                    <p>
                                        <span>Total Amount Payable</span>
                                        <b>$<i id="tbl_la">157,188.72</i></b>
                                    </p>
                                </div>
                                <a href="apply-now.html" class="thm-btn" target="_blank" rel="nofollow">Apply For Loan</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-lg-5 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /.contact-two -->
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
    <script type="text/javascript" src="assets/js/jquery-1.12.4.js"></script>
    <script type="text/javascript" src="assets/js/jquery-ui.js"></script>
    <script type="text/javascript" src="assets/js/loan-calculator.js"></script>

    <!-- template js -->
    <script src="assets/js/theme.js"></script>


    <!--Add the following script at the bottom of the web page (before </body></html>)-->
<script type="text/javascript">function add_chatinline(){var hccid=45575293;var nt=document.createElement("script");nt.async=true;nt.src="https://www.mylivechat.com/chatinline.aspx?hccid="+hccid;var ct=document.getElementsByTagName("script")[0];ct.parentNode.insertBefore(nt,ct);}
    add_chatinline();</script>
</body>
</html>