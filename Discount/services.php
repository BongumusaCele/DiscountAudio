<?php
//Embedding DBConn.php
include 'dbconn.php';

//Starting session
session_start();

//Declaring variable to store user_id from session
$user_id = $_SESSION['user_id'];

//If user_id is null
if (!isset($user_id)) {
    //Redirect user to login page
    header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/logo-two.jpg" type="image/x-icon">
    <title>Discount</title>
    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <!-- css file link -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <?php include 'header.php'; ?>

    <br>
    <br>
    <br>
    <div class="heading2">
        <h3>services</h3>
        <p> <a href="index.html">home</a> / services</p>
    </div>
    <br>
    <br>
    <br>

    <section class="contact" id="contact">

        <h1 class="heading"> <span>Our </span> Services </h1>

    </section>
    <!-- Services -->
    <section class="services container">
        <!-- Services Content -->
        <div class="services-content">
            <div class="services-box">
                <h2>Car Audio</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel, dolorem.</p>
            </div>
            <div class="services-box">
                <h2>Alarm System</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel, dolorem.</p>
            </div>
            <div class="services-box">
                <h2>Rims & Tyres</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel, dolorem.</p>
            </div>
            <div class="services-box">
                <h2>Installations</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel, dolorem.</p>
            </div>
            <div class="services-box">
                <h2>Service Kits</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel, dolorem.</p>
            </div>
            <div class="services-box">
                <h2>Brake Pads</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel, dolorem.</p>
            </div>
            <div class="services-box">
                <h2>Clutch Kits</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel, dolorem.</p>
            </div>
            <div class="services-box">
                <h2>Body Parts</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel, dolorem.</p>
            </div>
            <div class="services-box">
                <h2>Taxi Parts</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel, dolorem.</p>
            </div>
        </div>
    </section>
    <!-- Footer section -->
    <?php include 'footer.php'; ?>

    <!-- js file link -->
    <script src="js/script.js"></script>
</body>

</html>