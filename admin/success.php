<?php
// success.php
require "./conn.php";

if (empty($_SESSION['email'])) {
    header("Location: index.php");
    exit(); // Make sure to exit after a header redirect
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit_btn"])) {
    // Prepare data for insertion
    $ad_title = $_POST["ad_title"];
    $ad_desc = $_POST["ad_desc"];
    $ad_link = $_POST["ad_link"];
    $id_tag = "ad_" . rand(000000001, 999999999);
    $date = date("Y-m-d H:i:s");
    $acc_name = $_SESSION["name"];

    // File upload handling
    $targetDir = "./ads_images/";
    $targetFile = $targetDir . basename($_FILES["image"]["name"]);

    if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
        // Insert data into the "ads" table using prepared statement
        $image_path = $targetFile; // Use the complete path
        $sql = $conn->prepare("INSERT INTO `ads`(`idtag`, `title`, `description`, `image`, `link`, `date`, `acc_name`) 
        VALUES (?, ?, ?, ?, ?, ?, ?)");

        $sql->bind_param("sssssss", $id_tag, $ad_title, $ad_desc, $image_path, $ad_link, $date, $acc_name);

        if ($sql->execute()) {
            // Success
            
        } else {
            // Failure
            
        }

        $sql->close();
    } else {
        
    }
}
?>




<!doctype html>
<html lang="en">

    
<!-- Mirrored from themesbrand.com/ad panel/layouts/pages-500.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Nov 2023 14:02:44 GMT -->
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
        <!-- Begin page -->
        <div class="authentication-bg d-flex align-items-center pb-0 vh-100">
            <div class="content-center w-100">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-10">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-lg-5 mx-auto">
                                                <img src="verified.gif" alt="" class="img-fluid mx-auto d-block">
                                            </div>
                                            <div class="col-lg-4 ms-auto">
                                                <div class="ex-page-content">
                                                    <h3 class="text-dark  mt-4"> <?php  echo $id_tag  ?>     </h3>
                                                    <hz class="mb-4">   <?php  echo $ad_title  ?>     Ad Created</h4>
                                                    <p class="mb-5"><?php  echo $ad_desc  ?></p>
                                                    <a class="btn btn-primary mb-5 waves-effect waves-light" href="onboard.php"><i class="mdi mdi-home"></i> Back to Dashboard</a>
                                                </div>
                                    
                                            </div>
                                        </div>
                                    </div><!-- end cardbody -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                        </div><!-- end row -->
                    </div>
                    <!-- end container -->
            </div>

        </div>
        <!-- end error page -->

        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>

        <script src="assets/js/app.js"></script>

    </body>

<!-- Mirrored from themesbrand.com/ad panel/layouts/pages-500.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Nov 2023 14:02:44 GMT -->
</html>
