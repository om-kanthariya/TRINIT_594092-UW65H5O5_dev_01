
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
   
    <?php include('nav.php'); ?>
<br><br>

    <section id="home_one_banner">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="banner_one_text">
                    <h1><span><span class="color_big">Helping</span> NGO </span></h1>
                  <h2>  Enter into the New World.</h2> 
                    
                    
                </div>
            </div>
            <div class="col-lg-6">
                <div class="banner_one_img">
                    <img src="image5.jpeg" alt="img">
                    
                </div>
            </div>
        </div>
    </div>
</section>


    <div class="row">
                <div class="col-lg-12 ">
                    <div class="author_form_area">
                        <h3>Login Details</h3>
                        <form id="register_form" action="controllers/general.php" method="POST" enctype="multipart/form-data">

                            <div class="row">
                                <div class="form-group col-md-12">
                                    <input type="text" class="form-control" name="father_name" id="father_name" placeholder="Enter Your Name" required />
                                </div>
                                <div class="form-group col-md-12">
                                    <input type="text" class="form-control" name="mobile_no" placeholder="Enter Mobile Number" pattern="[0-9]*" minlength="10" maxlength="10" onchange="check_phone_exists(this);" onkeypress="return IsNumeric(event);" required />
                                    <div id="phone-validation" class="error-new"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
                <hr>
                <div class="author_submit_form mt-3">
                                    <button type="submit" class="btn btn_theme btn_md">Login</button>
                                </div>

                                <?php include('footer.php') ?>