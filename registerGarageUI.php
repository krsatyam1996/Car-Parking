<?php
session_start();
include('config.php');
include('sessioncheck.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Register Garage</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
    <meta property="og:title" content="">
    <meta property="og:image" content="">
    <meta property="og:url" content="">
    <meta property="og:site_name" content="">
    <meta property="og:description" content="">

    <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="">

    <!-- Place your favicon.ico and apple-touch-icon.png in the template root directory -->
    <link href="img/favicon.png" rel="shortcut icon" type="image/png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate-css/animate.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/mainSU.css">
    <link rel="stylesheet" type="text/css" href="css/utilSU.css">

</head>

<body>
<div id="preloader"></div>

<?php include('header.php') ?>
<!-- #header -->

<div class="limiter">
    <div class="container-login100">
        <div class="login100-more" style="background-image: url('img/carbgdash1.jpg');"></div>

        <div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
            <form class="login100-form validate-form" method="post" action="registerGarage.php">
            <span class="login100-form-title p-b-59">
                Register New Garage
            </span>

                <div class="wrap-input100 validate-input" data-validate="Garage Name is required">
                    <span class="label-input100">Garage Name</span>
                    <input class="input100" type="text" name="name" placeholder="Garage Name..." required="required"/>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Total Lots is required">
                    <span class="label-input100">Total Number of Lots</span>
                    <input class="input100" type="number" name="lots" placeholder="Number of lots...." required="required"/>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Address is required">
                    <span class="label-input100">Address of Garage</span>
                    <input class="input100" type="text" name="address" placeholder="Enter Address...." required="required"/>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Latitude is required">
                    <span class="label-input100">Latitude</span>
                    <input class="input100" type="text" name="lat" placeholder="Enter Latitude...." required="required"/>
                    <span class="focus-input100"></span>
                </div>
				
				<div class="wrap-input100 validate-input" data-validate="Longitude is required">
                    <span class="label-input100">Longitude</span>
                    <input class="input100" type="text" name="long" placeholder="Enter Longitude...." required="required"/>
                    <span class="focus-input100"></span>
                </div>


                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button class="login100-form-btn">
                            Register Garage
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!--===============================================================================================-->
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/daterangepicker/moment.min.js"></script>
<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="js/main.js"></script>

<?php include('footer.php'); ?>
<!-- #footer -->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<!-- Required JavaScript Libraries -->
<script src="lib/jquery/jquery.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.min.js"></script>
<script src="lib/superfish/hoverIntent.js"></script>
<script src="lib/superfish/superfish.min.js"></script>
<script src="lib/morphext/morphext.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/stickyjs/sticky.js"></script>
<script src="lib/easing/easing.js"></script>

<!-- Template Specisifc Custom Javascript File -->
<script src="js/custom.js"></script>

<script src="contactform/contactform.js"></script>


</body>

</html>
