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
    $number = $_POST['number']; //Declaring variable to store custmoer number
    $msg = mysqli_real_escape_string($conn, $_POST['message']); //Declaring variable to store custmoer message

    //SQL query to select all records from tblmessages table
    $select_message = mysqli_query($conn, "SELECT * FROM `tblmessages` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');

    //If select query contains rows greater than 0
    if (mysqli_num_rows($select_message) > 0) {
        //Display message to the user
        $message[] = 'message sent already!';
    } else {
        //SQL query to insert record on the tblmessages table
        mysqli_query($conn, "INSERT INTO `tblmessages`(user_id, name, email, number, message) VALUES('$user_id', '$name', '$email', '$number', '$msg')") or die('query failed');
        //Display message to the user
        $message[] = 'message sent successfully!';
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
        <h3>contact</h3>
        <p> <a href="index.html">home</a> / contact </p>
    </div>

    <!-- Contact section -->
    <section class="contact" id="contact">

        <h1 class="heading"> <span>contact</span> us </h1>

        <div class="row">
            <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3577.7949651838203!2d28.11902231471553!3d-26.268317072961846!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e95100782fc8cf1%3A0x65919c9e69d6802d!2sDiscount%20Audio!5e0!3m2!1sen!2sza!4v1663333501494!5m2!1sen!2sza" allowfullscreen="" loading="lazy"></iframe>

            <form action="" method="POST">
                <h3>get in touch</h3>
                <div class="inputBox">
                    <span class="fas fa-user"></span>
                    <input type="text" name="name" placeholder="name">
                </div>
                <div class="inputBox">
                    <span class="fas fa-envelope"></span>
                    <input type="email" name="email" placeholder="email">
                </div>
                <div class="inputBox">
                    <span class="fas fa-phone"></span>
                    <input type="number" name="number" placeholder="number">
                </div>
                <div class="inputBox">
                    <span class="fas fa-comments"></span>
                    <input type="text" name="message" placeholder="enquiry" cols="30" rows="10">
                </div>
                <input type="submit" value="contact now" name="send" class="btn">
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