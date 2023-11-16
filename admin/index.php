<?php
// Assuming you have a database connection in $conn
require "./conn.php";

if(!empty($_SESSION['email'])){
    header("Location: onboard.php");
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["btn_login"])) {
    $email = $_POST["email"];
    $password = trim($_POST["password"]);

    // Retrieve the user with the given email from the database
    $sql = "SELECT * FROM reg_admin WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Verify the password
        if ($password === $row["password"]) {
            // Password is correct, create a session and redirect
            $_SESSION["email"] = $email;
            header("Location: onboard.php");
            exit();
        } else {
            echo '<div class="alert m-5 alert-danger mt-5" role="alert">
        Invalid Password
    </div>';
        }
    } else {
        echo '<div class="alert m-5 alert-danger mt-5" role="alert">
        User does not exist
    </div>';
    }
}
?>



<!doctype html>
<html lang="en">

    
<!-- Mirrored from themesbrand.com/ad panel/layouts/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Nov 2023 14:02:42 GMT -->
<head>

        <meta charset="utf-8">
        <title>Ad Panel |  Login  </title>
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

    
    <div class="account-pages my-5 pt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-4">
                    <div class="card overflow-hidden">
                        <div class="bg-primary">
                            <div class="text-primary text-center p-4">
                                
                                <h5 class="text-white font-size-20">Welcome Back !</h5>
                                <p class="text-white-50">Sign in to continue to Ad Panel.</p>
                                <a href="index.html" class="logo logo-admin">
                                    <img src="assets/images/logo-sm.png" height="24" alt="logo">
                                </a>
                            </div>
                        </div>
                            
                            
                        <div class="card-body p-4">
                            <div class="p-3">
                                <form class="mt-4" action="#" method="post" >

                                    <div class="mb-3">
                                        <label class="form-label" for="username">Email</label>
                                        <input type="email" class="form-control" id="username" name="email" placeholder="hello@example.com">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="userpassword">Password</label>
                                        <input type="password" class="form-control" name="password" id="userpassword" placeholder="Enter password">
                                    </div>

                                    <div class="mb-3 row">
                                        <div class="col-sm-6">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input"  id="customControlInline">
                                                <label class="form-check-label" for="customControlInline">Remember me</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 text-end">
                                            <button class="btn btn-primary w-md waves-effect waves-light" name="btn_login" type="submit">Log In</button>
                                        </div>
                                    </div>

                                    <div class="mt-2 mb-0 row">
                                        <div class="col-12 mt-4">
                                            <a href="recover.php"><i class="mdi mdi-lock"></i> Forgot your password?</a>
                                        </div>
                                    </div>

                                </form>

                            </div>
                        </div>

                    </div>

                    <div class="mt-5 text-center">
                        <p>Don't have an account ? <a href="signup.php" class="fw-medium text-primary"> Signup now </a> </p>
                        <p class="mb-0">© <script>document.write(new Date().getFullYear())</script> </p>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>

    <script src="assets/js/app.js"></script>

</body>


<!-- Mirrored from themesbrand.com/ad panel/layouts/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Nov 2023 14:02:42 GMT -->
</html>