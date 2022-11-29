<?php
//Embedding DBConn.php
include 'dbconn.php';

//If submit button is clicked
if (isset($_POST['submit'])) {
    $fisrtname = mysqli_real_escape_string($conn, $_POST['firstname']); //Declaring variable to store firstname
    $surname = mysqli_real_escape_string($conn, $_POST['surname']); //Declaring variable to store surname
    $username = mysqli_real_escape_string($conn, $_POST['username']); //Declaring variable to store username
    $pass = mysqli_real_escape_string($conn, md5($_POST['password'])); //Declaring variable to store password
    $cpass = mysqli_real_escape_string($conn, md5($_POST['cpassword'])); //Declaring variable to store confirm password

    //SQL query to select verify value from table user
    $select_users = mysqli_query($conn, "SELECT * FROM `tbluser` WHERE email = '$username' AND password = '$pass'") or die('select user in register query failed');

    //If select users query has contains rows greater than 0
    if (mysqli_num_rows($select_users) > 0) {
        //Displaying message to the user
        $message[] = 'user already exist!';
    } else {
        //if password does not match cornfirm password 
        if ($pass != $cpass) {
            //Displaying message to the user
            $message[] = 'confirm password not matched!';
        } else {
            //SQL query to insert values into user table
            mysqli_query($conn, "INSERT INTO `tbluser`(firstname, surname, email, password) VALUES('$fisrtname', '$surname','$username','$cpass')") or die('insert into register query failed');
            $message[] = 'registered successfully!';
            (header('location:login.php'));
        }
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
    <title>Register</title>
    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <!-- css file link -->
    <link rel="stylesheet" href="css/styletwo.css">
</head>

<body>
    <?php
    //if statement to display sticky message
    if (isset($message)) {
        //foreach loop to loop through message
        foreach ($message as $message) {
            echo '
        <div class="message">
            <span>' . $message . '</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
        </div>';
        }
    }

    ?>

    <!-- Container-->
    <div class="container">
        <!-- Container for form-->
        <div class="form-container">
            <form action="" method="post">
                <h3>register now</h3>
                <input type="text" name="firstname" placeholder="enter your first name" class="box" required>
                <input type="text" name="surname" placeholder="enter your surname" class="box" required>
                <input type="text" name="username" placeholder="enter your email" class="box" required>
                <input type="password" name="password" placeholder="enter your password" class="box" required>
                <input type="password" name="cpassword" placeholder="confirm your password" class="box" required>
                <input type="submit" name="submit" value="register now" class="btn">
                <p>already have an account? <a href="login.php">login now</a></p>
            </form>
        </div>

        <!-- Container for logo-->
        <div class="logo_container" style="display: none;">
            <img src="images/logo-one.jpg" style="height: 8rem;">
        </div>

    </div>
    <!-- js file link -->
    <script src="js/script.js"></script>
</body>

</html>