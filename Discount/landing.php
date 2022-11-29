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

    <div class="box2">
        <div class="split left">
            <h1>Audio Products</h1>
            <a href="#" class="btn btn1">Shop Now</a>
        </div>
        <div class="split right">
            <h1>Car Accessories</h1>
            <a href="#" class="btn btn2">Shop Now</a>
        </div>
    </div>

    <!-- js file link -->
    <script src="js/script.js"></script>
</body>

</html>