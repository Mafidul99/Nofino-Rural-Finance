<?php include('form.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <title>Jobes Application | Nofino Rural Finance Private Limited</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="../../assets/images/favicons/apple-touch-icon.svg">
    <link rel="icon" type="image/png" sizes="32x32" href="../../assets/images/favicons/favicon-32x32.svg">
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicons/favicon-16x16.svg">
    <meta name="description" content="Nofino Rural Finance Private Limited">
    <!-- fonts -->
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../../assets/css/swiper.min.css">
    <link rel="stylesheet" href="../../assets/css/animate.min.css">
    <link rel="stylesheet" href="../../assets/css/pylon-icons.css">
    <link rel="stylesheet" href="../../assets/css/odometer.min.css">
    <link rel="stylesheet" href="../../assets/css/magnific-popup.css">
    <link rel="stylesheet" href="../../assets/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="../../assets/css/nouislider.min.css">
    <link rel="stylesheet" href="../../assets/css/nouislider.pips.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/flaticon.css">
    <!-- template styles -->
    <link rel="stylesheet" href="../../assets/css/main.css">
</head>

<body>
    <div class="preloader">
        <img class="preloader__image" src="../../assets/images/loader.png" alt="">
    </div>
    <!-- /.preloader -->
    <div class="page-wrapper">
        <?php include('pages/header.php') ?>
        <!-- /.main-header -->

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div>
            <!-- /.sticky-header__content -->
        </div>
        <!-- /.stricky-header -->

        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(../../assets/images/backgrounds/page-header-bg-1-1.jpg);"></div>
            <!-- /.page-header__bg -->
            <div class="container">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="../../index.php">Home</a></li>
                    <li>/</li>
                    <li><span>Apply Now</span></li>
                </ul>
                <!-- /.thm-breadcrumb list-unstyled -->
                <h2>Jobe Apply Now</h2>
            </div>
            <!-- /.container -->
        </section>
        <!-- /.page-header -->


        <section class="apply-one">
            <div class="container">
                <form action="" method="POST" class="contact-one__form" enctype="multipart/form-data">
                    <div class="contact-one__form-box">
                        <div class="row">
                            <div class="col-md-12">
                                <h2 style="text-align: center; font-size: 40px; font-weight: 700;"><u>Jobes Application Form</u></h2>
                                <div>
                                    <h3 class="title-block">Personal Details</h3>
                                </div>
                                <!-- /.block-title-->
                            </div>
                            <!-- /.col-md-12-->
                        </div>
                        <!-- /.row-->

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Jobes Name<span style="color:red;">*</span></label>
                                    <select name="jobes" class="contact-one__form-input custom-select" required>
                                        <option value="">---Select Your Jobes---</option>
                                        <option value="Multitacking Jobs Vacancies">Multitacking Jobs Vacancies</option>
                                        <option value="Receptionist Jobs Vacancies">Receptionist Jobs Vacancies</option>
                                        <option value="Collection Executive Jobs Vacancies">Collection Executive Jobs Vacancies</option>
                                        <option value="Office Boy Job Vacancies">Office Boy Job Vacancies</option>
                                    </select>
                                </div>
                                <!-- /.form-group-->
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Your Name <span style="color:red;">*</span></label>
                                    <input type="text" name="name" class="form-control contact-one__form-input" placeholder="Full Name" required>
                                </div>
                                <!-- /.form-group-->
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Father Name <span style="color:red;">*</span></label>
                                    <input type="text" name="fname" class="form-control contact-one__form-input" placeholder="Father Name" required>
                                </div>
                                <!-- /.form-group-->
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Mother Name <span style="color:red;">*</span></label>
                                    <input type="text" name="mname" class="form-control contact-one__form-input" placeholder="Mother Name" required>
                                </div>
                                <!-- /.form-group-->
                            </div>
                            <!-- /.col-md-6-->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Email Id <span style="color:red;">*</span></label>
                                    <input type="email" name="email" class="form-control contact-one__form-input" placeholder="Your Email" required>
                                </div>
                                <!-- /.form-group-->
                            </div>
                            <!-- /.col-md-6-->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Mobile Number<span style="color:red;">*</span></label>
                                    <input type="number" name="mobile" class="form-control contact-one__form-input" placeholder="Mobile Number" required>
                                </div>
                                <!-- /.form-group-->
                            </div>
                            <!-- /.col-md-6-->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Pan Card Number <span style="color:red;">*</span></label>
                                    <input type="text" name="pancard" class="form-control contact-one__form-input" placeholder="Pan Number" required>
                                </div>
                                <!-- /.form-group-->
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Aadhaar Card Number <span style="color:red;">*</span></label>
                                    <input type="number" name="aadhaarcard" class="form-control contact-one__form-input" placeholder="Aadhaar Number" required>
                                </div>
                                <!-- /.form-group-->
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Birth Date <span style="color:red;">*</span></label>
                                    <input type="date" name="birthdate" class="form-control contact-one__form-input" placeholder="Birth Date" required>
                                </div>
                                <!-- /.form-group-->
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Gender <span style="color:red;">*</span></label>
                                    <select name="gender" class="contact-one__form-input custom-select" required>
                                        <option value="">---- Select Gender ---- </option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                                <!-- /.form-group-->
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Bank Account Number <span style="color:red;">*</span></label>
                                    <input type="number" name="bankcnumber" class="form-control contact-one__form-input" placeholder="Bank Account Number" required>
                                </div>
                                <!-- /.form-group-->
                            </div>                            
                            <!-- /.col-md-6-->                            
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Bank Name & Branch <span style="color:red;">*</span></label>
                                    <input type="text" name="bankbranch" class="form-control contact-one__form-input" placeholder="Bank Name & Branch" required>
                                </div>
                                <!-- /.form-group-->
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>IFSC Code <span style="color:red;">*</span></label>
                                    <input type="text" name="ifsc" class="form-control contact-one__form-input" placeholder="IFSC Code" required>
                                </div>
                                <!-- /.form-group-->
                            </div>                            
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Qualification <span style="color:red;">*</span></label>
                                    <input type="text" name="qualification" class="form-control contact-one__form-input" placeholder="Qualification">
                                </div>
                                <!-- /.form-group-->
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Category<span style="color:red;">*</span></label>
                                    <select name="category" class="contact-one__form-input custom-select" required>
                                        <option value="">Select your category</option>
                                        <option value="General">General</option>
                                        <option value="SC">ST</option>
                                        <option value="ST">SC</option>
                                        <option value="OBC">OBC</option>                                        
                                    </select>
                                </div>
                                <!-- /.form-group-->
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Marital Status<span style="color:red;">*</span></label>
                                    <select name="martialstatus" class="contact-one__form-input custom-select" required>
                                        <option value="">---- Select ---- </option>
                                        <option value="Unmarried">Unmarried</option>
                                        <option value="Married">Married</option>
                                    </select>
                                </div>
                                <!-- /.form-group-->
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Spose Name </label>
                                    <input type="text" name="spname" class="form-control contact-one__form-input" placeholder="Spose Name">
                                </div>
                                <!-- /.form-group-->
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>House No/Name <span style="color:red;">*</span></label>
                                    <input type="text" name="houseno" class="form-control contact-one__form-input" placeholder="House Number/Name" required>
                                </div>
                                <!-- /.form-group-->
                            </div>
                            <!-- /.col-md-4-->

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Area / Locality <span style="color:red;">*</span></label>
                                    <input type="text" name="street" class="form-control contact-one__form-input" placeholder="Area / Locality" required>
                                </div>
                                <!-- /.form-group-->
                            </div>
                            <!-- /.col-md-4-->

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>City <span style="color:red;">*</span></label>
                                    <input type="text" name="city" class="form-control contact-one__form-input" placeholder="City" required>
                                </div>
                                <!-- /.form-group-->
                            </div>
                            <!-- /.col-md-4-->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>State<span style="color:red;">*</span></label>
                                    <select name="state" class="contact-one__form-input custom-select" required>
                                        <option value="">---Select State---</option>
                                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                        <option value="Assam">Assam</option>
                                        <option value="Bihar">Bihar</option>
                                        <option value="Chhattisgarh">Chhattisgarh</option>
                                        <option value="Goa">Goa</option>
                                        <option value="Gujarat">Gujarat</option>
                                        <option value="Haryana">Haryana</option>
                                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                                        <option value="Jharkhand">Jharkhand</option>
                                        <option value="Karnataka">Karnataka</option>
                                        <option value="Kerala">Kerala</option>
                                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                                        <option value="Maharashtra">Maharashtra</option>
                                        <option value="Manipur">Manipur</option>
                                        <option value="Meghalaya">Meghalaya</option>
                                        <option value="Mizoram">Mizoram</option>
                                        <option value="Nagaland">Nagaland</option>
                                        <option value="Odisha">Odisha</option>
                                        <option value="Punjab">Punjab</option>
                                        <option value="Rajasthan">Rajasthan</option>
                                        <option value="Sikkim">Sikkim</option>
                                        <option value="Tamil Nadu">Tamil Nadu</option>
                                        <option value="Telangana">Telangana</option>
                                        <option value="Tripura">Tripura</option>
                                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                                        <option value="Uttarakhand">Uttarakhand</option>
                                        <option value="West Bengal">West Bengal</option>
                                    </select>
                                </div>
                                <!-- /.form-group-->
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Pin Code <span style="color:red;">*</span></label>
                                    <input type="number" name="pincode" class="form-control contact-one__form-input" placeholder="Pin Code" required>
                                </div>
                                <!-- /.form-group-->
                            </div>
                            <div class="col-md-6">
                                <div style="padding:20px; border-radius: 25px;font-size: 18px;  text-align: justify;">
                                    <label>Declaration <span style="color:red;">*</span></label>
                                    <input type="checkbox" name="declaration" class="form-control" style="width:28px;" required> I hereby declare that all the information given above is true and correct to the best of my knowledge. 
                                    All the information shared in the Details is correct, and I take full responsibility for its correctness. I solemnly declare that the information in this Details is true to the best of my knowledge 
                                    and belief.
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row" style="float: right;">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Your Phoro <span style="color:red;"> * </span></label>
                                            <p style="color:red;">(size: W-2.5" to H-3.5")</p>
                                            <div style="border: 1px solid black; height: 150px; width: 150px;  background: #F5FAFF;">
                                                <img id="output" width="150" height="150" / style="display:none">
                                            </div>
                                        </div>
                                        <input type="file" name="image" id="image" onchange="loadFile(event)" class="form-control" required accept="image/*" / style="width:150px;" required>
                                        <script>
                                            var loadFile = function(event) {
                                                var reader = new FileReader();
                                                reader.onload = function() {
                                                    var output = document.getElementById('output');
                                                    output.src = reader.result;
                                                };

                                                $('#output').show();
                                                reader.readAsDataURL(event.target.files[0]);
                                            };
                                        </script>
                                    </div>
                                </div>
                                <!-- /.form-group-->
                            </div>
                            <!-- /.col-md-4-->
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Your Signature <span style="color:red;">*</span></label>
                                            <p style="color:red;">(size: W-3.5" to H-1.2")</p>
                                            <div style="border: 1px solid black; height: 70px; width: 200px;  background: #F5FAFF;">
                                                <img id="outputs" width="200" height="70" / style="display:none">
                                            </div>
                                        </div>
                                        <input type="file" id="simage" name="simage" onchange="loadFiles(event)" class="form-control" required accept="image/*" / style="width:200px;" required>
                                        <script>
                                            var loadFiles = function(event) {
                                                var reader = new FileReader();
                                                reader.onload = function() {
                                                    var output = document.getElementById('outputs');
                                                    output.src = reader.result;
                                                };

                                                $('#outputs').show();
                                                reader.readAsDataURL(event.target.files[0]);
                                            };
                                        </script>
                                    </div>
                                </div>
                                <!-- /.form-group-->
                            </div>
                            <!-- /.col-md-4-->
                        </div>
                        <!-- /.row-->
                        <div class="row">
                            <div class="col-md-12">
                                <input type="submit" value="Submit" name="form_submit" class="thm-btn">
                            </div>
                            <!--/.col-md-12-->
                        </div>
                        <!--/.row-->
                    </div>
                </form>
                <!-- /.contact-one__form-->
            </div>
            <!-- /.container-->
        </section>
        <!-- /.contact-one-->
        <?php include('pages/footer.php') ?>
        <!-- /.bottom-footer -->
    </div>
    <!-- /.page-wrapper-->
    <?php include('pages/mobile_nav.php') ?>
    <!-- /.search-popup -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


    <script src="../../assets/js/jquery-3.5.1.min.js"></script>
    <script src="../../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../../assets/js/swiper.min.js"></script>
    <script src="../../assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="../../assets/js/jquery.magnific-popup.min.js"></script>
    <script src="../../assets/js/jquery.validate.min.js"></script>
    <script src="../../assets/js/bootstrap-select.min.js"></script>
    <script src="../../assets/js/wow.js"></script>
    <script src="../../assets/js/odometer.min.js"></script>
    <script src="../../assets/js/jquery.appear.min.js"></script>
    <script src="../../assets/js/wNumb.min.js"></script>
    <script src="../../assets/js/nouislider.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- template js -->
    <script src="../../assets/js/theme.js"></script>


    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
    <?php
    if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
    ?>
        <script>
            Swal.fire({
                position: 'top-end',
                toast: true,
                icon: '<?php echo $_SESSION['status_code']; ?>',
                //title: 'Thank you !',
                text: "<?php echo $_SESSION['status']; ?>",
                showConfirmButton: false,
                timer: 7000
            })
        </script>
    <?php
        unset($_SESSION['status']);
    }
    ?>



<!--Add the following script at the bottom of the web page (before </body></html>)-->
<script type="text/javascript">function add_chatinline(){var hccid=45575293;var nt=document.createElement("script");nt.async=true;nt.src="https://www.mylivechat.com/chatinline.aspx?hccid="+hccid;var ct=document.getElementsByTagName("script")[0];ct.parentNode.insertBefore(nt,ct);}
    add_chatinline();</script>
</body>

</html>