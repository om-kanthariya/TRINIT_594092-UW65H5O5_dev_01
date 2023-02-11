<?php
include_once('config.php');

// print_r($_SESSION);exit;

?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title -->
    <title><?php echo SITE_NAME ?> | Register</title>
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <!-- animate css -->
    <link rel="stylesheet" href="assets/css/animate.min.css" />
    <!-- Fontawesome css -->
    <link rel="stylesheet" href="assets/css/fontawesome.all.min.css" />
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
    <!-- owl.theme.default css -->
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css" />
    <!-- navber css -->
    <link rel="stylesheet" href="assets/css/navber.css" />
    <!-- meanmenu css -->
    <link rel="stylesheet" href="assets/css/meanmenu.css" />
    <!-- Style css -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <!-- Responsive css -->
    <link rel="stylesheet" href="assets/css/responsive.css" />
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="image1.jpg">
</head>

<body>
    <!-- Preloader Area
    <div class="preloader">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="lds-spinner">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
    </div>
    <div class="preloader2">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="lds-spinner">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Header Area -->
    <?php include('nav.php'); ?>
    <!-- Header Area -->

    <!-- search -->
    <!-- <div class="search-overlay">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="search-overlay-layer"></div>
                <div class="search-overlay-layer"></div>
                <div class="search-overlay-layer"></div>
                <div class="search-overlay-close">
                    <span class="search-overlay-close-line"></span>
                    <span class="search-overlay-close-line"></span>
                </div>
                <div class="search-overlay-form">
                    <form>
                        <input type="text" class="input-search" placeholder="Search here...">
                        <button type="button"><i class="fas fa-search"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div> -->

    <!-- Banner Area -->
    <!-- <section id="common_banner_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="commn_banner_page">
                        <h2><span class="color_big_heading">Register</span></h2>
                        <ul class="breadcrumb_wrapper">
                            <li class="breadcrumb_item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb_item"><img src="assets/img/icon/arrow.png" alt="img"></li>
                            <li class="breadcrumb_item active">Register</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Error Area -->
    
    <section id="login_arae" class="section_padding mb-5">
        <div class="container">
            <div class="row" id="register">
                <div class="col-lg-6 offset-lg-3 col-md-12 col-sm-12 col-12">
                    <div class="section_heading">
                        <h3>Register your account</h3>
                        <h2>Become a Part of our team
                            <span class="color_big_heading">Applicant</span>
                            can apply for a Job.
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 ">
                    <div class="author_form_area">
                        <h3>Applicant Details</h3>
                        <form id="register_form" action="controllers/general.php" method="POST" enctype="multipart/form-data">

                            <div class="row">
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" name="father_name" id="father_name" placeholder="Enter Your Name" required />
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" name="mobile_no" placeholder="Enter Mobile Number" pattern="[0-9]*" minlength="10" maxlength="10" onchange="check_phone_exists(this);" onkeypress="return IsNumeric(event);" required />
                                    <div id="phone-validation" class="error-new"></div>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="email" class="form-control" placeholder="Enter Email" name="email" required onchange="check_email_exists(this);" />
                                    <div id="email-validation" class="error-new"></div>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" id="Profession" name="profession" placeholder="Profession" required />
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" placeholder="Number of Cases Solved" name="aadhar_number" minlength="12" maxlength="12" onkeypress="return IsNumeric(event);" required />
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" placeholder="Alternate Number" name="pan_number" required />
                                </div>

                                <div class="form-group col-md-12 mb-5">
                                    <input type="text" class="form-control" placeholder="Full Address" name="address" required />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
                <hr>
                <div class="author_submit_form mt-3">
                                    <button type="submit" class="btn btn_theme btn_md">Register</button>
                                </div>



                                <!-- <div class="row">
                                    <h3>Daughter's Details</h3>
                                    <div id="dummy_item">

                                        <section>
                                            <span class="d-flex p-3 trash">
                                                <p style="margin-right:20px;"><b> Add More Daughter </b></p>
                                                <button type="button" class="btn btn-danger btn-sm remove" style="width: 50px;"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                            </span>
                                            <div class="row border-bottom mt-3">
                                                <div class="form-group col-md-6 length">
                                                    <input type="text" class="form-control" id="daughter_name" name="daughter_name[]" placeholder="Enter Daughter Name " required />
                                                </div>
                                                <div class="form-group col-md-6" style="margin-top: -10px;">
                                                    <label for="dob">Enter Date of birth</label>
                                                    <input type="date" class="form-control mt-0" id="dob" placeholder="Enter Age" name="dob[]" required />
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <input type="text" class="form-control" placeholder="Enter Aadhar Number" name="d_aadhar_no[]" required />
                                                </div>
                                                <div class="form-group col-md-6 ">
                                                    <select class="form-control" name="register_for[]">
                                                        <option selected disabled value="">Registration For</option>
                                                        <option value="1">New Born Baby</option>
                                                        <option value="2">Child Education</option>
                                                        <option value="3">Marriage</option>
                                                        <option value="4">Health & Delivery</option>
                                                        <option value="5">Father Expire</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6 mb-4 mt-2">
                                                    <label for="daughter_img">Upload Daughter Photo</label>
                                                    <input type="file" name="daughter_photo[]" class="form-control mt-0" id="daughter_img" placeholder="Enter Aadhar Number" required />
                                                </div>
                                                <div class="form-group col-md-6 mt-2">
                                                    <label for="aadhar_img">Upload Aadhar Image</label>
                                                    <input type="file" name="d_aadhar[]" id="aadhar_img" class="form-control mt-0" placeholder="Enter Aadhar Number" required />
                                                </div>

                                            </div>
                                        </section>
                                    </div>
                                    <div class="col-md-12" id="items">

                                    </div>
                                    <span class="d-flex p-3">
                                        <p style="margin-right:20px;"><b> Add More Daughter </b></p>
                                        <button type="button" class="btn btn-primary btn-sm" onclick="add_more();" style="width: 50px;"><i class="fa fa-plus" aria-hidden="true"></i></button>
                                    </span>
                                </div>
                                <hr>
                                <div class="form-group col-md-6">
                                    <input type="text" name="samagra_id" class="form-control" placeholder="Samagar ID Number" required />
                                </div>

                                <div class="form-group col-md-6">
                                    <input type="password" name="password" class="form-control" placeholder="Enter password" required />
                                </div>
                                <input type="hidden" name="c1e7c5cfd3d06ee8ef28b5c807d50f3b" value="<?php echo base64_encode("register") ?>">
                                <div class="author_submit_form mt-3">
                                    <button type="submit" class="btn btn_theme btn_md">Register</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Counter  Area -->
    <!-- <section id="counter_area ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="counter_area_wrapper">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="counter_item">
                                    <img src="assets/img/icon/camp2.png" alt="icon">
                                    <h2 class="counter">2348</h2>
                                    <p>Total campaign</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="counter_item">
                                    <img src="assets/img/icon/hand.png" alt="icon">
                                    <h2 class="counter">1785</h2>
                                    <p>Satisfied donors</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="counter_item">
                                    <img src="assets/img/icon/mone.png" alt="icon">
                                    <h2 class="counter">4287</h2>
                                    <p>Fund raised</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="counter_item">
                                    <img src="assets/img/icon/camp.png" alt="icon">
                                    <h2 class="counter">1294</h2>
                                    <p>Happy volunteers</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->


    <?php include('footer.php') ?>
    <!-- <script>
        function add_more() {
            $("#items").append($("#dummy_item").html());
            $("#items").find("section:last").find(".index").html($("#items section").length);

            if ($("#dummy_item").find(".chosen-select-dd").length) {
                $("#items").find("section:last").find(".chosen-select-dd").chosen({
                    "allow_single_deselect": true,
                    width: "100%"
                });
            }
        }
        $(document).on("click", ".remove", function() {
            console.log($("#items section").length);
            if ($("#items section").length > 0) {
                $(this).closest("section").remove();
                var x = 1;
                $("#items section").each(function() {
                    $(this).find(".index").html(x);
                    x++;
                });
            }
        });
    </script>

    <style>
        .error {
            color: red;
        }

        .error-new {
            color: red;
        }
    </style> -->