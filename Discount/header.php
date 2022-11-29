<?php
if (isset($message)) {
    foreach ($message as $message) {
        echo '
      <div class="message">
         <span>' . $message . '</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
    }
}
?>

<!-- header section -->
<header class="header">
    <a href="index.php" class="logo">
        <img src="images/logo-two.jpg" alt="logo">
    </a>

    <nav class="navbar">
        <a href="index.php">home</a>
        <a href="about.php">about</a>
        <a href="shop.php">shop</a>
        <a href="services.php">services</a>
        <a href="contact.php">contact</a>
        <a href="gallery.php">gallery</a>
        <a href="reviews.php">reviews</a>
        <a href="bookings.php">bookings</a>
    </nav>

    <div class="icons">
        <a href="search_page.php">
            <div class="fas fa-search"></div>
        </a>

        <div class="fas fa-search" id="search-btn" style="display: none;"></div>

        <?php
        $select_cart_number = mysqli_query($conn, "SELECT * FROM `tblcart` WHERE user_id = '$user_id'") or die('query failed');
        $cart_rows_number = mysqli_num_rows($select_cart_number);
        ?>
        <a href="cart.php">
            <div class="fas fa-shopping-cart" id="cart-btn"></div><span style="color: #fff; font-size: 2rem;">(<?php echo $cart_rows_number; ?>)</span>
        </a>

        <div id="user-btn" class="fas fa-user"></div>
        <div class="fas fa-bars" id="menu-btn"></div>
    </div>

    <div class="search-form">
        <input type="search" id="search-box" placeholder="search here...">
        <label for="search-box" class="fas fa-search"></label>
    </div>

    <div class="account-box">
        <p>username : <span><?php echo $_SESSION['user_name']; ?></span></p>
        <p>email : <span><?php echo $_SESSION['user_email']; ?></span></p>
        <a href="logout.php" class="white-btn">logout</a>
        <a href="login.php" class="white-btn">login</a>
    </div>

</header>