<?php 
require "conn.php";

$email = $_POST["email"];
$check = $_POST["check"];

if(!empty($email)){
    $sql = "INSERT INTO `leads`(`id`, `email`) VALUES ('','$email')";
    $result = mysqli_query($conn, $sql);
} else{
    header("Location: index.php");
}


?>




<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <title>CGPA Calculator by Maxi</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="modal.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body class="bg-dark" >
    
<div class="container text-light">
    <p class="text-center mt-5 fw-bold text-light fs-1 tit">CGPA Calculator</p>
    <p class="text-center text-light  par">How many course did you offer both 1 <small>st</small> and 2 <small>nd</small> semester?</p>
    <div class="cgpa p-5 justify-content-center">
        <form action="">
            <div class="input-container m-auto   done justify-content-center">
            <input type="number" id="no-co" placeholder="Number of courses you offered">
            <button onclick="listCourses()" class="button" id="done" >Add</button>
        </div>
    </form>
        
        <div class="lists">

        </div>
        <!-- <div class="course p-3 mt-5 justify-content-center">
            <h4 id="course_no" class="" >Course N/A</h4>
            <select class="form-select my-2" name="grade" id="">
                <option selected>Grade &nbsp;</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="E">E</option>
                    <option value="F">F</option>
            </select>
              <div class="input-group input-group-sm mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm">Credits</span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
              </div>
              <hr>
        </div>
        <div class="course p-3 mt-5 justify-content-center">
            <h4 id="course_no" class="" >Course N/A</h4>
            <select class="form-select my-2" name="grade" id="">
                <option selected>Grade &nbsp;</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="E">E</option>
                    <option value="F">F</option>
            </select>
              <div class="input-group input-group-sm mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm">Credits</span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
              </div>
              <hr>
        </div>
        <div class="course p-3 mt-5 justify-content-center">
            <h4 id="course_no" class="" >Course N/A</h4>
            <select class="form-select my-2" name="grade" id="">
                <option selected>Grade &nbsp;</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="E">E</option>
                    <option value="F">F</option>
            </select>
              <div class="input-group input-group-sm mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm">Credits</span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
              </div>
              <hr>
        </div> -->
        
    </div>
    <button type="submit" onclick="cgpa()" id="sumall" >Calculate CGPA</button> 
</div>


<div class="container classcard text-center">
   
</div>

<footer class="text-light text-center" >Created By <a class="text-warning text-decoration-none" href="https://wa.me/2349095335818"> Maxi</a> </footer>

<script src="modal.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> -->
</body>
</html>