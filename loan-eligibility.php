<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <title>Loan Eligibility | Nofino Rural Finance Private Limited</title>
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
                    <li><span>Loan Eligibility</span></li>
                </ul>
                <!-- /.thm-breadcrumb list-unstyled -->
                <h2>Loan Eligibility</h2>
            </div>
            <!-- /.container -->
        </section>
        <!-- /.page-header -->

        <section class="contact-two">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="loan-slider-box eligibility-slider-box">
                            <div class="single-loan-slider">
                                <h4>Loan Amount</h4>
                                <div id="pricipal-slide" class="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
                                    <div class="ui-slider-range ui-corner-all ui-widget-header ui-slider-range-min"></div><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 9.89989%;"></span></div>
                                <div class="single-loan-counter">
                                    <span>$</span>
                                    <h6 id="pricipal">900000</h6>
                                </div>
                            </div>
                            <div class="single-loan-slider">
                                <h4>Gross Income (Monthly)</h4>
                                <div id="income-slide" class="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
                                    <div class="ui-slider-range ui-corner-all ui-widget-header ui-slider-range-min"></div><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 2.9903%;"></span></div>
                                <div class="single-loan-counter">
                                    <span>$</span>
                                    <h6 id="income">30000</h6>
                                </div>
                            </div>
                            <div class="single-loan-slider">
                                <h4>Tenure (Years)</h4>
                                <div id="totalyear-slide" class="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
                                    <div class="ui-slider-range ui-corner-all ui-widget-header ui-slider-range-min"></div><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 29.0323%;"></span></div>
                                <div class="single-loan-counter">
                                    <h6 id="totalyear">10</h6>
                                    <span>Years</span>
                                </div>
                            </div>
                            <div class="single-loan-slider">
                                <h4>Interest Rate</h4>
                                <div id="intrest-slide" class="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
                                    <div class="ui-slider-range ui-corner-all ui-widget-header ui-slider-range-min"></div><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 30.4132%;"></span></div>
                                <div class="single-loan-counter">
                                    <h6 id="intrest">7.78</h6>
                                    <span>%</span>
                                </div>
                            </div>
                            <div class="single-loan-slider">
                                <h4>Other EMIs (Monthly)</h4>
                                <div id="other-emi-slide" class="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
                                    <div class="ui-slider-range ui-corner-all ui-widget-header ui-slider-range-min" style="width: 0%;"></div><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 0%;"></span></div>
                                <div class="single-loan-counter">
                                    <span>$</span>
                                    <h6 id="other-emi">0</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/.col-md-7-->
                    <div class="col-md-5">
                        <div id="loan-eligibility" class="loan-eligibility-form">
                            <div class="loan-eligibility-form-content">
                                <div class="loan-eligibility-inner-heading">
                                    <h4>Monthly EMI</h4>
                                    <span class="loan-eligibility-inner-heading-dollor">$</span>
                                    <div class="loan-eligibility-total" id="loan-eligibility-monthly">13657</div>
                                </div>
                                <div class="loan-eligibility-inner-heading eligibility-inner-heading">
                                    <h4>Maximum Loan Eligibility</h4>
                                    <span class="loan-eligibility-inner-heading-dollor">$</span>
                                    <div class="loan-eligibility-total" id="loan-eligibility-maximum-total">988522</div>
                                    <span class="loan-eligibility-monthly" id="loan-eligibility-maximum-emi">/ 15000&nbsp;EMI</span>
                                </div>
                                <a href="apply-now.html" class="thm-btn" target="_blank" rel="nofollow">Apply For Loan</a>
                                <div class="loan-eligibility-details">
                                    <small>*These calculators are provided only as general self-help Planning Tools. Results depend on other factors.</small>
                                </div>
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
    <script type="text/javascript" src="assets/js/loan-eligibility.js"></script>

    <!-- template js -->
    <script src="assets/js/theme.js"></script>

    <!--Add the following script at the bottom of the web page (before </body></html>)-->
<script type="text/javascript">function add_chatinline(){var hccid=45575293;var nt=document.createElement("script");nt.async=true;nt.src="https://www.mylivechat.com/chatinline.aspx?hccid="+hccid;var ct=document.getElementsByTagName("script")[0];ct.parentNode.insertBefore(nt,ct);}
    add_chatinline();</script>
</body>
</html>