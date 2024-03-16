<?php include('loan_apply.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <title>Loan Request | Nofino Rural Finance Pvt. Ltd.</title>
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
        <?php include('pages/header.php')?>
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
                <h2>Apply Now</h2>
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
                                <div class="block-title">
                                    <p class="small-title">Calculate you loan amount</p>
                                    <h3 class="title-block">Loan Details</h3>
                                </div>
                                <!-- /.block-title-->
                            </div>
                            <!-- /.col-md-12-->
                        </div>
                        <!-- /.row-->

                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Loan Amount <span style="color:red;">*</span> <strong>Rs. 20000/- & 50000/-</strong></label>
                                    <input type="number" name="loanamount" class="form-control contact-one__form-input" placeholder="Loan Amount" required>
                                </div>
                                <!-- /.form-group-->
                            </div>
                            <!-- /.col-md-6-->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Monthly Income <span style="color:red;">*</span></label>
                                    <input type="number" name="income" class="form-control contact-one__form-input" placeholder="Monthly Income" required>
                                </div>
                                <!-- /.form-group-->
                            </div>
                            <!-- /.col-md-6-->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Purpose of Loan <span style="color:red;">*</span></label>
                                    <select name="purposeloan" class="contact-one__form-input custom-select" required>
                                        <option value="">---Select Purpose of Loan---</option>
                                        <option value="Indiviual Loan">Indiviual Loan</option>
                                        <option value="Group Loan">Group Loan</option>
                                        <option value="Business Loan">Business Loan</option>
                                        <option value="Gold Loan">Gold Loan</option>
                                    </select>
                                </div>
                                <!-- /.form-group-->
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Loan Months <span style="color:red;">*</span></label>
                                    <select name="loanmonths" class="contact-one__form-input custom-select" required>
                                        <option value="">---Select Loan Months---</option> 
                                        <option value="5 Months"> 5 Months (Indiviual / Business Loan)</option>
                                        <option value="4 Months">4 Months (Group Loan)</option>
                                        <option value="1 Years">1 Years (Gold Loan)</option>
                                    </select>
                                </div>
                                <!-- /.form-group-->
                            </div>
                            <!-- /.col-md-6-->
                        </div>
                        <!-- /.row-->
                    </div>
                    <!-- /.contact-one__form-box-->

                    <div class="contact-one__form-box">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="block-title">
                                    <p class="small-title">Ask for More Details</p>
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
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Email Id <span style="color:red;">*</span></label>
                                    <input type="email" name="email" class="form-control contact-one__form-input" placeholder="Your Email" required>
                                </div>
                                <!-- /.form-group-->
                            </div>
                            <!-- /.col-md-6-->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Birth Date <span style="color:red;">*</span></label>
                                    <input type="date" name="birthdate" class="form-control contact-one__form-input" placeholder="Birth Date" required>
                                </div>
                                <!-- /.form-group-->
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Mobile Number<span style="color:red;">*</span></label>
                                    <input type="number" name="phone" class="form-control contact-one__form-input" placeholder="Mobile Number" required>
                                </div>
                                <!-- /.form-group-->
                            </div>
                            <!-- /.col-md-6-->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Pan Card Number <span style="color:red;">*</span></label>
                                    <input type="text" name="pcn" class="form-control contact-one__form-input" placeholder="Pan Number" required>
                                </div>
                                <!-- /.form-group-->
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Aadhaar Card Number <span style="color:red;">*</span></label>
                                    <input type="number" name="acn" class="form-control contact-one__form-input" placeholder="Aadhaar Number" required>
                                </div>
                                <!-- /.form-group-->
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Voter Card Number <span style="color:red;">*</span></label>
                                    <input type="text" name="vcn" class="form-control contact-one__form-input" placeholder="Voter Number" required>
                                </div>
                                <!-- /.form-group-->
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Bank Account Number <span style="color:red;">*</span></label>
                                    <input type="number" name="ban" class="form-control contact-one__form-input" placeholder="Bank Account Number" required>
                                </div>
                                <!-- /.form-group-->
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Bank Name & Branch <span style="color:red;">*</span></label>
                                    <input type="text" name="bnb" class="form-control contact-one__form-input" placeholder="Bank Name & Branch" required>
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
                            <!-- /.col-md-6-->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Gender <span style="color:red;">*</span></label>
                                    <select name="gender" class="contact-one__form-input custom-select" required>
                                        <option value="">---Select Gender---</option>    
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                                <!-- /.form-group-->
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                <label>Category<span style="color:red;">*</span></label>
                                    <select name="category" class="contact-one__form-input custom-select" required>
                                        <option value="">Select Your Category</option>
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
                                    <label>Qualification <span style="color:red;">*</span></label>
                                    <input type="text" name="Qualification" class="form-control contact-one__form-input" placeholder="Qualification">
                                </div>
                                <!-- /.form-group-->
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Marital Status<span style="color:red;">*</span></label>
                                    <select name="martialstatus" class="contact-one__form-input custom-select" required>
                                        <option value="">-----Select-------</option>    
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
                        </div>                        
                        <!-- /.row-->
                    </div>
                    <!-- /.contact-one__form-box-->
                    <div class="contact-one__form-box">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="block-title">
                                    <h3 class="title-block">Address Details</h3>
                                </div>
                                <!-- /.block-title-->
                            </div>
                            <!-- /.col-md-12-->
                        </div>
                        <!-- /.row-->

                        <div class="row">
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
                                    <label>Street <span style="color:red;">*</span></label>
                                    <input type="text" name="street" class="form-control contact-one__form-input" placeholder="Street" required>
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
                                        <option value="">Select State</option>
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
                            <!-- /.col-md-4-->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Pin Code <span style="color:red;">*</span></label>
                                    <input type="number" name="pin" class="form-control contact-one__form-input" placeholder="Pin Code" required>
                                </div>
                                <!-- /.form-group-->
                            </div>
                            <!-- /.col-md-4-->
                        </div>
                        <!-- /.row-->
                    </div>
                    <!-- /.contact-one__form-box-->

                    <div class="contact-one__form-box">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="block-title">
                                    <h3 class="title-block">Business Details</h3>
                                </div>
                                <!-- /.block-title-->
                            </div>
                            <!-- /.col-md-12-->
                        </div>
                        <!-- /.row-->

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Shop Name <span style="color:red;">*</span></label>
                                    <input type="text" name="shopname" class="form-control contact-one__form-input" placeholder="Shop Name" required>
                                </div>
                                <!-- /.form-group-->
                            </div>
                            <!-- /.col-md-4-->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Trade License Number <span style="color:red;">*</span></label>
                                    <input type="text" name="tlnumber" class="form-control contact-one__form-input" placeholder="Trade License Number" required>
                                </div>
                                <!-- /.form-group-->
                            </div>
                            <!-- /.col-md-4-->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Business Type <span style="color:red;">*</span></label>
                                    <select name="btype" class="contact-one__form-input custom-select" required>
                                        <option value="Select">--- Select ---</option>
                                        <option value="Part Time Employed">Part Time Employed</option>
                                        <option value="Self Employed">Self Employed</option>
                                        <option value="Salaries">Salaries</option>
                                        <option value="Business">Business</option>
                                        <option value="Pensioner">Pensioner</option>
                                    </select>
                                </div>
                                <!-- /.form-group-->
                            </div>
                            <!-- /.col-md-4-->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Business Address <span style="color:red;">*</span></label>
                                    <input type="text" name="baddress" class="form-control contact-one__form-input" placeholder="Business Address" required>
                                </div>
                                <!-- /.form-group-->
                            </div>
                            <!-- /.col-md-4-->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Business Mobile Number <span style="color:red;">*</span></label>
                                    <input type="number" name="bmobilen" class="form-control contact-one__form-input" placeholder="Business Mobile Number" required>
                                </div>
                                <!-- /.form-group-->
                            </div>
                            <!-- /.col-md-4-->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Business Email Id <span style="color:red;">*</span></label>
                                    <input type="email" name="bemailid" class="form-control contact-one__form-input" placeholder="Business Email Id" required>
                                </div>
                                <!-- /.form-group-->
                            </div>
                            <!-- /.col-md-4-->
                        </div>
                        <!-- /.row-->
                    </div>
                    <!-- /.contact-one__form-box-->
                    <div class="contact-one__form-box">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="block-title">
                                    <h3 class="title-block">Ducoments Upload <span style="color:red;">(only jpeg, jpg, png)</span></h3>
                                    <p style="color: green;"><b>(Size :: 500kb to 1 MB)</b></p>                                    
                                </div>
                                <hr>
                                <!-- /.block-title-->
                            </div>
                            <!-- /.col-md-12-->
                        </div>
                        <!-- /.row-->
                        <div class="row">
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Pan Card <span style="color:red;">*</span> (jpeg, jpg, png) </label>
                                            <p style="color:red;">(size : W-3.5" to H-2.5")</p>
                                            <div style="border: 1px solid black; height: 150px; width: 250px;  background: #F5FAFF;">
                                                <img id="outputpc" width="250" height="150" / style="display:none">
                                            </div>
                                        </div>
                                        <input type="file" name="pcimage" id="pcimage" onchange="loadFilepc(event)" class="form-control" required accept="image/*" / style="width:250px;" required>

                                        <script>
                                            var loadFilepc = function(event) {
                                                var reader = new FileReader();
                                                reader.onload = function() {
                                                    var output = document.getElementById('outputpc');
                                                    output.src = reader.result;
                                                };

                                                $('#outputpc').show();
                                                reader.readAsDataURL(event.target.files[0]);
                                            };
                                        </script>
                                    </div>
                                </div>
                                <!-- /.form-group-->
                            </div>
                            <!-- /.col-md-4-->

                            <!-- /.col-md-4-->
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Aadhaar Card <span style="color:red;">*</span> (jpeg, jpg, png) </label>
                                            <p style="color:red;">(size : W-3.5" to H-2.5")</p>
                                            <div style="border: 1px solid black; height: 150px; width: 250px;  background: #F5FAFF;">
                                                <img id="outputAc" width="250" height="150" / style="display:none">
                                            </div>
                                        </div>
                                        <input type="file" name="acimage" id="acimage" onchange="loadFileAc(event)" class="form-control" required accept="image/*" / style="width:250px;" required>

                                        <script>
                                            var loadFileAc = function(event) {
                                                var reader = new FileReader();
                                                reader.onload = function() {
                                                    var output = document.getElementById('outputAc');
                                                    output.src = reader.result;
                                                };

                                                $('#outputAc').show();
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
                                            <label>Voter Card <span style="color:red;">*</span> (jpeg, jpg, png) </label>
                                            <p style="color:red;">(size : W-3.5" to H-2.5")</p>
                                            <div style="border: 1px solid black; height: 150px; width: 250px;  background: #F5FAFF;">
                                                <img id="outputv" width="250" height="150" / style="display:none">
                                            </div>
                                        </div>
                                        <input type="file" id="vimage" name="vimage" onchange="loadFilesv(event)" class="form-control" required accept="image/*" / style="width:250px;" required>
                                        <script>
                                            var loadFilesv = function(event) {
                                                var reader = new FileReader();
                                                reader.onload = function() {
                                                    var output = document.getElementById('outputv');
                                                    output.src = reader.result;
                                                };

                                                $('#outputv').show();
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
                                            <label>Bank Passbook <span style="color:red;">*</span> (jpeg, jpg, png) </label>
                                            <p style="color:red;">(size : W-3.5" to H-2.5")</p>
                                            <div style="border: 1px solid black; height: 150px; width: 250px;  background: #F5FAFF;">
                                                <img id="outputbp" width="250" height="150" / style="display:none">
                                            </div>
                                        </div>
                                        <input type="file" name="bpimage" id="bpimage" onchange="loadFilebp(event)" class="form-control" required accept="image/*" / style="width:250px;" required>

                                        <script>
                                            var loadFilebp = function(event) {
                                                var reader = new FileReader();
                                                reader.onload = function() {
                                                    var output = document.getElementById('outputbp');
                                                    output.src = reader.result;
                                                };

                                                $('#outputbp').show();
                                                reader.readAsDataURL(event.target.files[0]);
                                            };
                                        </script>
                                    </div>
                                </div>
                                <!-- /.form-group-->
                            </div>
                            <!-- /.col-md-4-->
                            <div class="col-md-3 pt-4">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Trade License <span style="color:red;">*</span> (jpeg, jpg, png) </label>
                                            <p style="color:red;">(size : W-3.5" to H-2.5")</p>
                                            <div style="border: 1px solid black; height: 150px; width: 250px;  background: #F5FAFF;">
                                                <img id="outputtrl" width="250" height="150" / style="display:none">
                                            </div>
                                        </div>
                                        <input type="file" id="trlimage" name="trlimage" onchange="loadFilestl(event)" class="form-control" required accept="image/*" / style="width:250px;" required>
                                        <script>
                                            var loadFilestl = function(event) {
                                                var reader = new FileReader();
                                                reader.onload = function() {
                                                    var output = document.getElementById('outputtrl');
                                                    output.src = reader.result;
                                                };

                                                $('#outputtrl').show();
                                                reader.readAsDataURL(event.target.files[0]);
                                            };
                                        </script>
                                    </div>
                                </div>
                                <!-- /.form-group-->
                            </div>
                            <!-- /.col-md-4-->
                            <div class="col-md-3 pt-4">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Shop Photo&Owner <span style="color:red;">*</span> (jpeg, jpg, png) </label>
                                            <p style="color:red;">(size : W-3.5" to H-2.5")</p>
                                            <div style="border: 1px solid black; height: 150px; width: 250px;  background: #F5FAFF;">
                                                <img id="outputspo" width="250" height="150" / style="display:none">
                                            </div>
                                        </div>
                                        <input type="file" id="spoimage" name="spoimage" onchange="loadFilesspo(event)" class="form-control" required accept="image/*" / style="width:250px;" required>
                                        <script>
                                            var loadFilesspo = function(event) {
                                                var reader = new FileReader();
                                                reader.onload = function() {
                                                    var output = document.getElementById('outputspo');
                                                    output.src = reader.result;
                                                };

                                                $('#outputspo').show();
                                                reader.readAsDataURL(event.target.files[0]);
                                            };
                                        </script>
                                    </div>
                                </div>
                                <!-- /.form-group-->
                            </div>
                            <!-- /.col-md-4-->
                            <div class="col-md-3 pt-4 ">
                                <div class="row  float-right">
                                    <div class="col-sm-12 ">
                                        <div class="form-group">
                                            <label>Your Phoro <span style="color:red;"> * </span> (jpeg, jpg, png) </label>
                                            <p style="color:red;">(size: W-2.5" to H-3.5")</p>
                                            <div style="border: 1px solid black; height: 150px; width: 160px;  background: #F5FAFF;">
                                                <img id="output" width="160" height="150" / style="display:none">
                                            </div>
                                        </div>
                                        <input type="file" name="ypimage" id="ypimage" onchange="loadFile(event)" class="form-control" required accept="image/*" / style="width:160px;" required>

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
                            <div class="col-md-3 pt-4">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Your Signature <span style="color:red;">*</span> (jpeg, jpg, png) </label>
                                            <p style="color:red;">(size: W-3.5" to H-1.2")</p> 
                                            <div style="border: 1px solid black; height: 110px; width: 260px;  background: #F5FAFF;">
                                                <img id="outputs" width="260" height="110" / style="display:none">
                                            </div>
                                        </div>
                                        <input type="file" id="simage" name="simage" onchange="loadFiles(event)" class="form-control" required accept="image/*" / style="width:260px;" required>
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
                        <div class="row pt-2">
                            <div class="col-md-12">
                                <div style="padding:20px; border-radius: 25px;font-size: 18px;">
                                    <label>Declaration <span style="color:red;">*</span></label>
                                    <input type="checkbox" name="declaration" class="form-control" style="width:28px;" required> 
                                    I hereby declare that all the information given above is true and correct to the best of my knowledge. 
                                    All the information shared in the Loan request is correct, and I take full responsibility for its correctness. 
                                    I solemnly declare that the information in this Loan request is true to the best of my knowledge and belief.
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.contact-one__form-box-->
                    <div class="contact-one__form-submit" style="float: right;">
                        <div class="row">
                            <div class="col-md-12">
                                <input type="submit" value="Submit" name="form_submit" class="thm-btn">
                            </div>
                            <!--/.col-md-12-->
                        </div>
                        <!--/.row-->
                    </div>
                    <!--/.contact-one__form-submit-->

                </form>
                <!-- /.contact-one__form-->
            </div>
            <!-- /.container-->
        </section>
        
        <!-- /.contact-one-->
        <?php include('pages/footer.php')?>
        <!-- /.bottom-footer -->
    </div>
    <!-- /.page-wrapper-->
    <?php include('pages/mobile_nav.php')?>
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

    <!-- template js -->
    <script src="../../assets/js/theme.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!--Add the following script at the bottom of the web page (before </body></html>)-->
    
    
    <script>
        if(window.history.replaceState){
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
        <?php
        if(isset($_SESSION['status']) && $_SESSION['status'] !='')
        {
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