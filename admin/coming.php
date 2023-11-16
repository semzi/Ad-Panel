
<?php 
require "conn.php";
if(empty($_SESSION['email'])){
    header("Location: index.php");
}

?>

<!doctype html>
<html lang="en">

    
<!-- Mirrored from themesbrand.com/ad panel/layouts/pages-comingsoon.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Nov 2023 14:03:10 GMT -->
<head>

        <meta charset="utf-8">
        <title>Ad Panel |  <?php  echo $_SESSION['name'];  ?>  </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Ad Panel for Maxi Commerce" name="description">
        <meta content="Adekanye Semilore" name="author">
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css">
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css">

    </head>

    <body>

        <div class="home-btn d-none d-sm-block">
            <a href="onboard.php" class="text-dark"><i class="fas fa-home h2"></i></a>
        </div>
        <!-- Begin page -->
        <div class="authentication-bg d-flex align-items-center pb-0 vh-100">
            <div class="content-center w-100">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                                <div class="home-wrapper text-center">
                                    <a href="index.html" class="logo-dark">
                                        <span class="logo-lg">
                                            <img src="assets/images/logo-dark.png" alt="" height="22">
                                        </span>
                                    </a>
    
                                    <a href="index.html" class="logo-light">
                                        <span class="logo-lg">
                                            <img src="assets/images/logo-light.png" alt="" height="22">
                                        </span>
                                    </a>
                                    <h3 class="mt-4">Let's get started with Ad Panel</h3>
                                    <p class="mb-5">It will be as simple as Occidental in fact it will be Occidental.</p>
    
                                    <div class="row justify-content-center mt-5">
                                        <div class="col-md-8">
                                            <div data-countdown="2024/12/31" class="counter-number"></div>
                                        </div> <!-- end col-->
                                    </div>
                                    <!-- end row -->
                                    <div class="text-center coming-soon-search-form pt-4">
                                        <form action="#">
                                            <input type="text" placeholder="Enter email address">
                                            <button type="submit" class="btn btn-primary">Subscribe</button>
                                        </form>
                                        <!-- end form -->
                                    </div>
                                </div>
                                <!-- end home wrapper -->
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end container -->
                </div>
            </div>

        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>

        <!-- Plugins js-->
        <script src="assets/libs/jquery-countdown/jquery.countdown.min.js"></script>

        <!-- Countdown js -->
        <script src="assets/js/pages/coming-soon.init.js"></script>

        <script src="assets/js/app.js"></script>

    </body>

<!-- Mirrored from themesbrand.com/ad panel/layouts/pages-comingsoon.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Nov 2023 14:03:12 GMT -->
</html>
