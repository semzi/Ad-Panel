
<?php 
require "./conn.php";
if(empty($_SESSION['email'])){
    header("Location: index.php");
}

$email = $_SESSION["email"];
$sql = "SELECT * FROM reg_admin WHERE email = '$email'";
$result = $conn->query($sql);

$row = $result->fetch_assoc();

$_SESSION['name'] = $row['name'];
$name = $_SESSION['name'];

?>

<!doctype html>
<html lang="en">

    
<!-- Mirrored from themesbrand.com/ad panel/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Nov 2023 14:01:54 GMT -->
<head>
    
        <meta charset="utf-8">
        <title>Ad Panel |  <?php  echo $_SESSION['name'];  ?>  </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Ad Panel for Maxi Commerce" name="description">
        <meta content="Adekanye Semilore" name="author">

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
    
        <link href="assets/libs/chartist/chartist.min.css" rel="stylesheet">
    
        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css">
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css">
    
    </head>

    <body data-sidebar="dark">

        <!-- Begin page -->
        <div id="layout-wrapper">

            
            <?php
            include "./temp.php";
            ?>


  <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="page-title-box">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h3 class="page-title fs-2"> Dear, <?php  echo $_SESSION['name']  ?>  </h3>
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item active">Welcome to your Ad Panel</li>
                                    </ol>
                                </div>
                                <div class="col-md-4">
                                    <div class="float-end d-none d-md-block">
                                        <div class="dropdown">
                                            <a href="logout.php" class="text-decoration-none"><button class="btn btn-danger  dropdown-toggle" type="button" id="" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="mdi mdi-logout me-2"></i> Log Out
                                            </button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card mini-stat bg-primary text-white">
                                    <div class="card-body">
                                        <div class="mb-4">
                                            <div class="float-start mini-stat-img me-4">
                                                <img src="assets/images/services-icon/01.png" alt="">
                                            </div>
                                            <h5 class="font-size-16 text-uppercase text-white-50">Ads Created</h5>
                                            <h4 class="fw-medium font-size-24">
                                            <?php 
                                            
                                            $sql = "SELECT COUNT(*) AS num_rows FROM ads WHERE acc_name = '$name'";

                                                $result = $conn->query($sql);

                                                if ($result) {
                                                    // Fetch the result as an associative array
                                                    $row = $result->fetch_assoc();

                                                    // Echo the number of rows
                                                    echo $row['num_rows'];
                                                } else {
                                                    echo "NaN";
                                                }

                                            ?>
                                            </h4>
                                        </div>
                                        <div class="pt-2">
                                            <div class="float-end">
                                                <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5 text-white-50"></i></a>
                                            </div>

                                            <p class="text-white-50 mb-0 mt-1">All Time</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card mini-stat bg-primary text-white">
                                    <div class="card-body">
                                        <div class="mb-4">
                                            <div class="float-start mini-stat-img me-4">
                                                <img src="assets/images/services-icon/02.png" alt="">
                                            </div>
                                            <h5 class="font-size-16 text-uppercase text-white-50">Sites</h5>
                                            <h4 class="fw-medium font-size-24">0</h4>
                                        </div>
                                        <div class="pt-2">
                                            <div class="float-end">
                                                <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5 text-white-50"></i></a>
                                            </div>

                                            <p class="text-white-50 mb-0 mt-1"> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card mini-stat bg-primary text-white">
                                    <div class="card-body">
                                        <div class="mb-4">
                                            <div class="float-start mini-stat-img me-4">
                                                <img src="assets/images/services-icon/03.png" alt="">
                                            </div>
                                            <h5 class="font-size-16 text-uppercase text-white-50">Views</h5>
                                            <h4 class="fw-medium font-size-24">
                                            <?php
                                                    // Query to get the total clicks for all rows
                                                    $totalClicksSql = "SELECT SUM(click) AS totalClicks FROM ads WHERE acc_name = '$name'";

                                                    // Execute the query
                                                    $result = $conn->query($totalClicksSql);

                                                    // Check if the query was successful
                                                    if ($result) {
                                                        // Fetch the result as an associative array
                                                        $row = $result->fetch_assoc();

                                                        // Retrieve the total clicks
                                                        $totalClicks = $row['totalClicks'];

                                                        if ($totalClicks == ''){
                                                            echo "0";
                                                        }else {
                                                        echo $totalClicks;
                                                    }
                                                    } else {
                                                        // Handle the case where the query fails
                                                        echo "NaN";
                                                    }
                                                    ?>    
                                           </h4>
                                            
                                        </div>
                                        <div class="pt-2">
                                            <div class="float-end">
                                                <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5 text-white-50"></i></a>
                                            </div>

                                            <p class="text-white-50 mb-0 mt-1"> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card mini-stat bg-primary text-white">
                                    <div class="card-body">
                                        <div class="mb-4">
                                            <div class="float-start mini-stat-img me-4">
                                                <img src="assets/images/services-icon/04.png" alt="">
                                            </div>
                                            <h5 class="font-size-16 text-uppercase text-white-50">Clicks</h5>
                                            <h4 class="fw-medium font-size-24">
                                            <?php
                                                    // Query to get the total clicks for all rows
                                                    $totalClicksSql = "SELECT SUM(click) AS totalClicks FROM ads WHERE acc_name = '$name'";

                                                    // Execute the query
                                                    $result = $conn->query($totalClicksSql);

                                                    // Check if the query was successful
                                                    if ($result) {
                                                        // Fetch the result as an associative array
                                                        $row = $result->fetch_assoc();

                                                        // Retrieve the total clicks
                                                        $totalClicks = $row['totalClicks'];

                                                        if ($totalClicks == ''){
                                                            echo "0";
                                                        }else {
                                                        echo $totalClicks;
                                                    }
                                                    } else {
                                                        // Handle the case where the query fails
                                                        echo "NaN";
                                                    }
                                                    ?>
    
                                           </h4>
                                            
                                        </div>
                                        <div class="pt-2">
                                            <div class="float-end">
                                                <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5 text-white-50"></i></a>
                                            </div>

                                            <p class="text-white-50 mb-0 mt-1"> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                        <div class="mb-4 align-self-center">
                            <a href="upload.php" class="btn btn-lg  px-5 btn-secondary ">Create New Ad &nbsp; <i class="ti ti-plus"></i>   </a>
                        </div>

                     

                        <div class="row">
                        <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="card-title text-center fs-1">Created Ads</h4>
                                        <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                                            <thead>
                                            <tr>
                                                <th>(#)Id</th>
                                                <th>Title</th>
                                                <th>Link</th>
                                                <th>Start date</th>
                                                <th>Views</th>
                                                <th>Clicks</th>
                                                <th>Actions</th>
                                            </tr>
                                            </thead>


                                            <tbody>
                                            <?php 

                                                $sql = "SELECT * FROM ads WHERE acc_name = '$name'";
                                                $result = $conn->query($sql);

                                                if ($result->num_rows > 0) {
                                                // Loop through the rows and output each one in the specified format
                                                while ($row = $result->fetch_assoc()) {
                                                echo "<tr>
                                                        <td>{$row['idtag']}</td>
                                                        <td>{$row['title']}</td>
                                                        <td><a href='https://{$row['link']}' target='_blank''>{$row['link']}</a></td>
                                                        <td>{$row['date']}</td>
                                                        <td>{$row['click']}</td>
                                                        <td>{$row['click']}</td>
                                                        <td class='d-flex' >
                                                        <a href='delete.php?idtag={$row['idtag']}'><button class='btn btn-danger btn-sm me-2'><i class='ti ti-trash'></i></button></a>
                                                        <a href='edit.php?idtag={$row['idtag']}'><button class='btn btn-success btn-sm'><i class='ti ti-pencil'></i></button></a>
                                                        </td>
                                                    </tr>";
                                                }

                                                }

                                            ?>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div> <!-- end col -->
                            
                        <!-- end row -->



                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->


                
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                © <script>document.write(new Date().getFullYear())</script> Ads Panel<span class="d-none d-sm-inline-block"> </span>
                            </div>
                        </div>
                    </div>
                </footer>

            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

       

       

                <!-- JAVASCRIPT -->
                <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>

        <!-- Required datatable js -->
        <script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
        <script src="assets/libs/jszip/jszip.min.js"></script>
        <script src="assets/libs/pdfmake/build/pdfmake.min.js"></script>
        <script src="assets/libs/pdfmake/build/vfs_fonts.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
        <!-- Responsive examples -->
        <script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

        <!-- Datatable init js -->
        <script src="assets/js/pages/datatables.init.js"></script> 

        <script src="assets/js/app.js"></script>

    </body>


<!-- Mirrored from themesbrand.com/ad panel/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Nov 2023 14:01:54 GMT -->
</html>



