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
        <h3>about</h3>
        <p> <a href="index.html">home</a> / about</p>
    </div>
    <br>
    <br>
    <br>
    <!-- About section -->
    <section class="about" id="about">
        <h1 class="heading"><span>about</span> us</h1>

        <div class="row">
            <div class="image">
                <img src="images/home-img-one.jpg" alt="about image">
            </div>

            <div class="content">
                <h3>here's a bit more about us</h3>
                <p>Discount Audio And Accessories is a newly established car spares and audio shop located in Alberton. We specialize in car services such as Car Audio, Vehicle Alarm Systems, Rims and Tyre installations. </p>
                <p>We also have a range of quality Audio products which include brands like Xtc, Targa, Starsound, JVC, Kenwood, Pioneer, Paramount, MTX, ICE power, JBL and Powerbass available in store and online. Vehicle accessories or parts are also available for selected car models.</p>
                <p>In our motor spares section, we have a service kits, brake pads, clutch kits, body parts and taxi spares available in store and online for our customers.</p>
                <a href="about.html" class="btn">learn more</a>
            </div>
        </div>
    </section>
    <br>
    <br>
    <br>
    <!-- Footer section -->
    <?php include 'footer.php'; ?>

    <!-- js file link -->
    <script src="js/script.js"></script>
</body>

</html>