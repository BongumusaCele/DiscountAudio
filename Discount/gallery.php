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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css">
    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <!-- css file link -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<style type="text/css">
    .item {
        transition: .5s ease-in-out;
    }

    .item:hover {
        filter: brightness(80%);
    }
</style>

<body>
    <?php include 'header.php'; ?>
    <br>
    <br>
    <br>
    <div class="heading2">
        <h3>gallery</h3>
        <p> <a href="index.html">home</a> / gallery</p>
    </div>

    <div class="container-fluid">
        <div class="row mt-4">
            <div class="item col-sm-6 col-md-4 mb-3">
                <a href="images/gallery1.jpg" class="fancybox" data-fancybox="gallery1">
                    <img src="images/gallery1.jpg" width="100%" height="100%">
                </a>
            </div>

            <div class="item col-sm-6 col-md-4 mb-3">
                <a href="images/gallery2.jpg" class="fancybox" data-fancybox="gallery1">
                    <img src="images/gallery2.jpg" width="100%" height="100%">
                </a>
            </div>

            <div class="item col-sm-6 col-md-4 mb-3">
                <a href="images/gallery3.jpg" class="fancybox" data-fancybox="gallery1">
                    <img src="images/gallery3.jpg" width="100%" height="100%">
                </a>
            </div>

            <div class="item col-sm-6 col-md-4 mb-3">
                <a href="images/gallery4.jpg" class="fancybox" data-fancybox="gallery1">
                    <img src="images/gallery4.jpg" width="100%" height="100%">
                </a>
            </div>

            <div class="item col-sm-6 col-md-4 mb-3">
                <a href="images/gallery5.jpg" class="fancybox" data-fancybox="gallery1">
                    <img src="images/gallery5.jpg" width="100%" height="100%">
                </a>
            </div>

            <div class="item col-sm-6 col-md-4 mb-3">
                <a href="images/gallery6.jpg" class="fancybox" data-fancybox="gallery1">
                    <img src="images/gallery6.jpg" width="100%" height="100%">
                </a>
            </div>

            <div class="item col-sm-6 col-md-4 mb-3">
                <a href="images/gallery18.jpg" class="fancybox" data-fancybox="gallery1">
                    <img src="images/gallery18.jpg" width="100%" height="100%">
                </a>
            </div>

            <div class="item col-sm-6 col-md-4 mb-3">
                <a href="images/gallery8.jpg" class="fancybox" data-fancybox="gallery1">
                    <img src="images/gallery8.jpg" width="100%" height="100%">
                </a>
            </div>

            <div class="item col-sm-6 col-md-4 mb-3">
                <a href="images/gallery9.jpg" class="fancybox" data-fancybox="gallery1">
                    <img src="images/gallery9.jpg" width="100%" height="100%">
                </a>
            </div>

            <div class="item col-sm-6 col-md-4 mb-3">
                <a href="images/gallery10.jpg" class="fancybox" data-fancybox="gallery1">
                    <img src="images/gallery10.jpg" width="100%" height="100%">
                </a>
            </div>

            <div class="item col-sm-6 col-md-4 mb-3">
                <a href="images/gallery11.jpg" class="fancybox" data-fancybox="gallery1">
                    <img src="images/gallery11.jpg" width="100%" height="100%">
                </a>
            </div>

            <div class="item col-sm-6 col-md-4 mb-3">
                <a href="images/gallery12.jpg" class="fancybox" data-fancybox="gallery1">
                    <img src="images/gallery12.jpg" width="100%" height="100%">
                </a>
            </div>

            <div class="item col-sm-6 col-md-4 mb-3">
                <a href="images/gallery13.jpg" class="fancybox" data-fancybox="gallery1">
                    <img src="images/gallery13.jpg" width="100%" height="100%">
                </a>
            </div>

            <div class="item col-sm-6 col-md-4 mb-3">
                <a href="images/gallery14.jpg" class="fancybox" data-fancybox="gallery1">
                    <img src="images/gallery14.jpg" width="100%" height="100%">
                </a>
            </div>

            <div class="item col-sm-6 col-md-4 mb-3">
                <a href="images/gallery15.jpg" class="fancybox" data-fancybox="gallery1">
                    <img src="images/gallery15.jpg" width="100%" height="100%">
                </a>
            </div>

            <div class="item col-sm-6 col-md-4 mb-3">
                <a href="images/gallery16.jpg" class="fancybox" data-fancybox="gallery1">
                    <img src="images/gallery16.jpg" width="100%" height="100%">
                </a>
            </div>

            <div class="item col-sm-6 col-md-4 mb-3">
                <a href="images/gallery17.jpg" class="fancybox" data-fancybox="gallery1">
                    <img src="images/gallery17.jpg" width="100%" height="100%">
                </a>
            </div>

            <div class="item col-sm-6 col-md-4 mb-3">
                <a href="images/gallery19.jpg" class="fancybox" data-fancybox="gallery1">
                    <img src="images/gallery19.jpg" width="100%" height="100%">
                </a>
            </div>
        </div>
    </div>

    <br>
    <br>
    <br>

    <!-- Footer section -->
    <?php include 'footer.php'; ?>

    <!-- js file link -->
    <script src="js/script.js"></script>
    <!-- bootstrap cdn-->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <!--Fancybox js cdn-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
</body>

</html>