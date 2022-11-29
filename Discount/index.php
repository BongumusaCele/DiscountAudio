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

//If add to cart button is clicked
if (isset($_POST['add_to_cart'])) {

    $product_name = $_POST['product_name']; //Declaring variable to store book name
    $product_price = $_POST['product_price']; //Declaring variable to store book price
    $product_image = $_POST['product_image']; //Declaring variable to store book image
    $product_quantity = $_POST['product_quantity']; //Declaring variable to store book quantity

    //SQL query to select all records from tblcart table 
    $check_cart_numbers = mysqli_query($conn, "SELECT * FROM `tblcart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('select from cart failed');

    //If select query contains rows greater than 0
    if (mysqli_num_rows($check_cart_numbers) > 0) {
        //Display message to the user
        $message[] = 'already added to cart!';
    } else {
        //SQL query to insert record on the tblcart table 
        mysqli_query($conn, "INSERT INTO `tblcart`(user_id, name, price, quantity, image) VALUES('$user_id', '$product_name', '$product_price', '$product_quantity', '$product_image')") or die('insert into cart failed');
        //Display message to the user
        $message[] = 'item added to cart!';
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

    <!-- Home section -->
    <section class="home" id="home">
        <div class="content">
            <h3>discount motor audio and spares</h3>
            <p>Browse our latest deals available, and shop our catalogue of audio products and car accessories at an affordable price. Delivered safely straight to your door. </p>
            <a href="shop.php" class="btn">shop now</a>
        </div>
    </section>

    <!-- Menu section -->
    <section class="menu" id="menu">

        <h1 class="heading"> our latest <span>audio products</span> </h1>

        <div class="box-container">
            <div>
                <?php
                $select_products = mysqli_query($conn, "SELECT * FROM `tblaudioproducts` LIMIT 6") or die('query failed');
                if (mysqli_num_rows($select_products) > 0) {
                    while ($fetch_products = mysqli_fetch_assoc($select_products)) {
                ?>
                        <form action="" method="post" class="box">
                            <img class="image" src="uploaded_img/<?php echo $fetch_products['image']; ?>" alt="">
                            <h3><?php echo $fetch_products['name']; ?></h3>
                            <div class="price">R<?php echo $fetch_products['price']; ?> <span>720.99</span></div>
                            <input type="number" min="1" name="product_quantity" value="1" class="qty">
                            <input type="hidden" name="product_name" value="<?php echo $fetch_products['name']; ?>">
                            <input type="hidden" name="product_price" value="<?php echo $fetch_products['price']; ?>">
                            <input type="hidden" name="product_image" value="<?php echo $fetch_products['image']; ?>">
                            <input type="submit" value="add to cart" name="add_to_cart" class="btn">
                        </form>

                <?php
                    }
                } else {
                    echo '<p class="empty">no products added yet!</p>';
                }
                ?>
            </div>
        </div>
    </section>
    <br>
    <br>
    <br>
    <h1 class="heading"> Brands <span>available</span> </h1>

    <div class="slider">
        <div class="slide-track">
            <div class="slide">
                <img src="images/jbllogo.png" height="100">
            </div>
            <div class="slide">
                <img src="images/JVClogo.png" height="100">
            </div>
            <div class="slide">
                <img src="images/Kenwoodlogo.jpg" height="100">
            </div>
            <div class="slide">
                <img src="images/mtxlogo.png" height="100">
            </div>
            <div class="slide">
                <img src="images/Pioneerlogo.jpg" height="100">
            </div>
            <div class="slide">
                <img src="images/powerbasslogo.png" height="100">
            </div>
            <div class="slide">
                <img src="images/starsoundlogo.png" height="100">
            </div>
            <div class="slide">
                <img src="images/targalogo.jpg" height="100">
            </div>
            <div class="slide">
                <img src="images/xtclogo.png" height="100">
            </div>
        </div>
    </div>


    <!-- Products section -->
    <section class="products" id="products">

        <h1 class="heading"> our <span>car accessories</span> </h1>

        <div class="box-container">

            <div class="box">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="images/carpart1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>car accessorie</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">R115.99 <span>920.99</span></div>
                </div>
            </div>

            <div class="box">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="images/carpart2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>car accessorie</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">R215.99 <span>110.99</span></div>
                </div>
            </div>

            <div class="box">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="images/cartpart3.jpg" alt="">
                </div>
                <div class="content">
                    <h3>car accessorie</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">R915.99 <span>520.99</span></div>
                </div>
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