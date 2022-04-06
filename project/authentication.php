<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>micalocode</title>
    <link rel="stylesheet" href="../project/css/bootstrap.min.css">
    <link rel="stylesheet" href="../project/css/style2.css">
</head>
<?php
include "assets/sessions.php";

?>

<body class="dg-dark mnm">
<nav class="text-center">
<div id="page-content-wrapper">
                <marquee behavior="scroll" direction="left"><h1 class="text-primary"> Micalocode, code for your succsess.</h1></marquee>
            <div class="mx-w w-100 bg-primary d-flex text-center">
                <a href="index"> <h2 class="text-center  text-light nav-link d-flex">home</h2></a>
                <a href="news"> <h2 class="text-center  text-light nav-link d-flex"> support</h2></a>
                <a class="nav-link text-light" href="tel:+2347056353611"> or call 07056353611<i class="fas float-end fa-phone"></i></a>
            </div>


    <div class="container pt-4 ">
        <div class="card mx-auto w-50 p-2 log mnm">
            <img  class="container img-fluid"  src="assets/login.jpg" height="300px" width="450px" class="m-3" class="container img-fluid"> Log In
            <form action="assets/login_control.php" method="post">
                <input type="email" name="email" placeholder="Email*"  class="form-control mb-3 ">
                <input type="password" name="password" placeholder="Password*"  class="form-control mb-2 ">
                <a class="nav-link text-light float-end" onclick="change()">
                   Click here to Register
                </a>

                <button type="submit" name="login" class="btn btn-primary">Login</button>
            </form>
        </div>

        <div class="card mx-auto w-75 d-none p-2 reg mnm">
        <img  class="container img-fluid"  src="assets/nicon.jpg" height="300px" width="450px" class="m-3"> Register
            <form action="assets/register_control.php" method="post">
                <input type="text" name="fname" placeholder="First Name*"  class="form-control mb-3" required>
                <input type="text" name="lname" placeholder="Last Name*"  class="form-control mb-3" required>
                <input type="text" name="dob" onfocus="(this.type = 'date')"  placeholder="Date of Birth*"  class="form-control mb-3" required>
                <input type="email" name="email" placeholder="Email*"  class="form-control mb-3" required>
                <input type="tel" name="phone" placeholder="Phone Number*"  class="form-control mb-3" required>
                <input type="password" name="password" placeholder="Password*"  class="form-control mb-2" required>
                <input type="password" name="cpass" placeholder="Confirm Password*"  class="form-control mb-2" required>

                <button type="submit" name="register" class="btn btn-primary">Sign Up</button>

                <a class="nav-link text-light float-end" onclick="change()">
                   Click here to Login
                </a>
            </form>
        </div>
        
    <div class="bg-dark text-primary mt-5">
    <marquee behavior="scroll" direction="left"><h1 class="text-primary"> Micalocode, code for succsess.</h1></marquee>
    <h4 class="text-center">This website was made by micalocode</h4>
    </div>
    </div>

    <style>
        a:hover{
            cursor: pointer;
            font-weight: bold;
            color: yellow;
        }
    </style>
    <script>
        function change(){
            document.querySelector('.reg').classList.toggle('d-none');
            document.querySelector('.log').classList.toggle('d-none');
        }
    </script>

<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<script src="../project/js/bootstrap.bundle.min.js"></script>

</html>
<script src="../ass"></script>
 