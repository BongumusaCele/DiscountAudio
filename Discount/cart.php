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

//update cart button is clicked
if (isset($_POST['update_cart'])) {
    $cart_id = $_POST['cart_id']; //Declaring variable to store cart id
    $cart_quantity = $_POST['cart_quantity']; //Declaring variable to store cart quantity

    //SQL query to update record on the tblcart table
    mysqli_query($conn, "UPDATE `tblcart` SET quantity = '$cart_quantity' WHERE id = '$cart_id'") or die('query failed');
    //Display message to the user 
    $message[] = 'cart quantity updated!';
}

//delete cart button is clicked
if (isset($_GET['delete'])) {
    $delete_id = $_GET['delete']; //Declaring variable to store delete id

    //SQL query to delete record on the tblcart table
    mysqli_query($conn, "DELETE FROM `tblcart` WHERE id = '$delete_id'") or die('query failed');
    //Redirect user to cart page
    header('location:cart.php');
}

//delete all cart button is clicked
if (isset($_GET['delete_all'])) {
    //SQL query to delete all record from cart on the tblcart table
    mysqli_query($conn, "DELETE FROM `tblcart` WHERE user_id = '$user_id'") or die('query failed');
    //Redirect user to cart page
    header('location:cart.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/logo-two.jpg" type="image/x-icon">
    <title>Shopping Cart</title>
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
        <h3>cart</h3>
        <p> <a href="index.html">home</a> / cart</p>
    </div>
    <br>
    <br>
    <br>

    <section class="shopping-cart">

        <h1 class="title">products added</h1>

        <div class="box-container">
            <?php
            $grand_total = 0;
            $select_cart = mysqli_query($conn, "SELECT * FROM `tblcart` WHERE user_id = '$user_id'") or die('query failed');
            if (mysqli_num_rows($select_cart) > 0) {
                while ($fetch_cart = mysqli_fetch_assoc($select_cart)) {
            ?>
                    <div class="box">
                        <a href="cart.php?delete=<?php echo $fetch_cart['id']; ?>" class="fas fa-times" onclick="return confirm('delete this from cart?');"></a>
                        <img src="uploaded_img/<?php echo $fetch_cart['image']; ?>" alt="">
                        <div class="name"><?php echo $fetch_cart['name']; ?></div>
                        <div class="price">R<?php echo $fetch_cart['price']; ?></div>
                        <form action="" method="post">
                            <input type="hidden" name="cart_id" value="<?php echo $fetch_cart['id']; ?>">
                            <input type="number" min="1" name="cart_quantity" value="<?php echo $fetch_cart['quantity']; ?>">
                            <input type="submit" name="update_cart" value="update" class="option-btn">
                        </form>
                        <div class="sub-total"> sub total : <span>R<?php echo $sub_total = ($fetch_cart['quantity'] * $fetch_cart['price']); ?></span> </div>
                    </div>
            <?php
                    $grand_total += $sub_total;
                }
            } else {
                echo '<p class="empty">your cart is empty</p>';
            }
            ?>
        </div>

        <div style="margin-top: 2rem; text-align:center;">
            <a href="cart.php?delete_all" class="delete-btn <?php echo ($grand_total > 1) ? '' : 'disabled'; ?>" onclick="return confirm('delete all from cart?');">delete all</a>
        </div>

        <div class="cart-total">
            <p>grand total : <span>R<?php echo $grand_total; ?></span></p>
            <div class="flex">
                <a href="shop.php" class="option-btn">continue shopping</a>
                <a href="checkout.php" class="btn <?php echo ($grand_total > 1) ? '' : 'disabled'; ?>">proceed to checkout</a>
            </div>
        </div>

    </section>

    <!-- js file link -->
    <script src="js/script.js"></script>
</body>

</html>