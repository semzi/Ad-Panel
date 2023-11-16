<<?php

require "conn.php";
if(empty($_SESSION['email'])){
    header("Location: index.php");
}

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

<style>
        .drop-container {
            border: 2px dashed #3498db;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
            cursor: pointer;
        }

        .drop-container:hover {
            background-color: #f8f9fa;
        }

        .file-input {
            display: none;
        }

        .file-label {
            font-weight: 700;
        }

        .file-list {
            margin-top: 10px;
        }

        .file-preview {
            display: inline-block;
            margin: 5px;
            max-width: 100px;
            max-height: 100px;
        }
    </style>




                <div class="main-content">

                    <div class="page-content">
                        <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="card-title fs-1 text-center">Create Ad</h4>
                                        
                                        <form class="custom-validation" action="success.php" enctype="multipart/form-data" method="post" >
                                        <div class="my-3">
                                        <div class="drop-container" id="dropContainer" onclick="triggerFileInput()">
                                                <label for="fileInput" class="file-label">Drag & Drop or Click to Upload</label>
                                                <input type="file" class="file-input" accept="image/*" id="fileInput" name="image" multiple onchange="handleFiles(this.files)">
                                            </div>
                                            <div id="fileList" class="file-list"></div>
                                        </div>
                                            <div class="mb-3">
                                                <label class="form-label">Ad Title</label>
                                                <div>
                                                    <input data-parsley-type="alphanum" type="text"
                                                           class="form-control" required name="ad_title"
                                                           placeholder="Title">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Ad Description</label>
                                                <div>
                                                    <textarea required class="form-control" name="ad_desc" maxlength="320"  rows="5" placeholder="Description"></textarea>
                                                </div>
                                                <p class="form-text text-muted">
                                                    Maximum of 320 Characters for better performance.
                                                </p>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Ad Destination</label>
                                                <div>
                                                    <input data-parsley-type="alphanum" type="link"
                                                           class="form-control" required name="ad_link"
                                                           placeholder="https://">
                                                </div>
                                            </div>
                                            <div class="mb-0">
                                                <div>
                                                    <button type="submit" name="submit_btn" class="btn btn-primary waves-effect waves-light me-1">
                                                        Submit
                                                    </button>
                                                    <button type="reset" class="btn btn-secondary waves-effect">
                                                        Cancel
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- end form -->
                                    </div><!-- end cardbody -->
                                </div><!-- end card -->
                            </div> <!-- end col -->


                        </div>
                    </div>
                </div>





        </div>
        <!-- END layout-wrapper -->

       

       

                <!-- JAVASCRIPT -->
            
  <script>
    function triggerFileInput() {
        document.getElementById('fileInput').click();
    }

    function handleFiles(files) {
        var fileList = document.getElementById('fileList');
        fileList.innerHTML = ''; // Clear previous entries

        for (var i = 0; i < files.length; i++) {
            var listItem = document.createElement('div');
            var img = document.createElement('img');
            img.src = URL.createObjectURL(files[i]);
            img.className = 'file-preview';
            listItem.appendChild(img);
            fileList.appendChild(listItem);
        }
    }
</script>

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