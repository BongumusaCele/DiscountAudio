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

//If send button is clicked 
if (isset($_POST['send'])) {

    $name = mysqli_real_escape_string($conn, $_POST['name']); //Declaring variable to store custmoer name
    $email = mysqli_real_escape_string($conn, $_POST['email']); //Declaring variable to store custmoer email
    $date = $_POST['date']; //Declaring variable to store custmoer number
    $time = $_POST['time']; //Declaring variable to store custmoer number
    $service = mysqli_real_escape_string($conn, $_POST['service']); //Declaring variable to store custmoer message

    //SQL query to select all records from tblmessages table
    $select_message = mysqli_query($conn, "SELECT * FROM `tblbookings` WHERE name = '$name' AND email = '$email' AND servicetype = '$service'") or die('query failed');

    //If select query contains rows greater than 0
    if (mysqli_num_rows($select_message) > 0) {
        //Display message to the user
        $message[] = 'service booked already!';
    } else {
        //SQL query to insert record on the tblmessages table
        mysqli_query($conn, "INSERT INTO `tblbookings`(user_id, name, email, date, time, servicetype) VALUES('$user_id', '$name', '$email', '$date', '$time', '$service')") or die('query failed');
        //Display message to the user
        $message[] = 'service booked successfully!';
    }
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
        <h3>bookings</h3>
        <p> <a href="index.html">home</a> / bookings </p>
    </div>

    <!-- bookings section -->
    <section class="contact" id="contact">

        <h1 class="heading"> <span>Book a car </span> Service </h1>

        <div class="row">

            <form action="" method="post">
                <h3>Set Booking</h3>
                <div class="inputBox">
                    <span class="fas fa-user"></span>
                    <input type="text" name="name" placeholder="name">
                </div>
                <div class="inputBox">
                    <span class="fas fa-envelope"></span>
                    <input type="email" name="email" placeholder="email">
                </div>
                <div class="inputBox">
                    <span class="fas fa-calendar"></span>
                    <input type="date" name="date" placeholder="date">
                </div>
                <div class="inputBox">
                    <span class="fas fa-clock"></span>
                    <input type="time" name="time" placeholder="time">
                </div>
                <div class="inputBox">
                    <span class="fas fa-car"></span>
                    <input type="text" name="service" placeholder="type of service">
                </div>
                <input type="submit" value="book now" name="send" class="btn">
            </form>

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