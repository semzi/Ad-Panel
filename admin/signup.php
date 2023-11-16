

<?php 
require "./conn.php";



if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["btn_submit"])) {

    $email = $_POST["email"];
    $password = $_POST["password"]; // Hash the password for security
    $name = $_POST['name'];
    function entryExists($email) {
        global $conn;
    
        // Sanitize input to prevent SQL injection
        $email = mysqli_real_escape_string($conn, $email);
        $name = $_POST['name'];
    
        // Query to check if the email already exists
        $sql = "SELECT * FROM reg_admin WHERE email = '" . $email . "' OR name = '" . $name . "'";
        $result = $conn->query($sql);
    
        return ($result->num_rows > 0);
    }

    if (entryExists($email)) {
        echo '<div class="alert m-5 alert-danger mt-5" role="alert">
        Email or User Name already exist.
    </div>';
    } else {
        $sql = "INSERT INTO `reg_admin`  (id, email, password, name) VALUES ( '', '$email', '$password', '$name')";
    
        if ($conn->query($sql) === TRUE) {
            $_SESSION["email"] = $email;
            header("Location: onboard.php");
        } else {
            $error_message = "Error Signing Up";
        }
    }

}else{
    $error_message = "";
}

?>


<!doctype html>
<html lang="en">

    
<!-- Mirrored from themesbrand.com/ad panel/layouts/pages-recoverpw.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Nov 2023 14:02:42 GMT -->
<head>

        <meta charset="utf-8">
        <title>Ad Panel | Sign Up  </title>
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
                                    <h5 class="text-white font-size-20 p-2">Reset Password</h5>
                                    <a href="index.html" class="logo logo-admin">
                                        <img src="assets/images/logo-sm.png" height="24" alt="logo">
                                    </a>
                                </div>
                            </div>
    
                            <div class="card-body p-4">
                                
                                <div class="p-3">

                                


                                    <form class=" mt-4" action="#" method="post"  >
    
                                        <div class="mb-3">
                                            <label class="form-label" for="useremail">Email</label>
                                            <input type="email" class="form-control" id="useremail" required name="email" placeholder="Enter email">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="useremail">User Name</label>
                                            <input type="Text" class="form-control" id="useremail" required name="name" placeholder="e,g John Doe">
                                        </div>
                                        <div class="mb-3">
                                                <label class="form-label">Password</label>
                                                <div>
                                                    <input type="password" id="pass2" class="form-control" name="password" required
                                                           placeholder="Password">
                                                </div>
                                                <div class="mt-2">
                                                    <input type="password" class="form-control" required
                                                           data-parsley-equalto="#pass2"
                                                           placeholder="Re-Type Password">
                                                </div>
                                            </div>

                
                                        <div class="row  mb-0">
                                            <div class="col-12 text-end">
                                                <button class="btn btn-primary w-md waves-effect waves-light" name="btn_submit" type="submit">Sign Up</button>
                                            </div>
                                        </div>
    
                                    </form>
                                    
    
                                </div>
                            </div>
    
                        </div>
    
                        <div class="mt-5 text-center">
                            <p>Remember It ? <a href="index.php" class="fw-medium text-primary"> Sign In here </a> </p>
                            <p class="mb-0">© <script>document.write(new Date().getFullYear())</script> Ad Panel. </p>
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

<!-- Mirrored from themesbrand.com/ad panel/layouts/pages-recoverpw.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Nov 2023 14:02:42 GMT -->
</html>
