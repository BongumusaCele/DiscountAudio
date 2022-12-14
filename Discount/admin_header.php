<?php
//if statement to display sticky message
if (isset($message)) {
    //foreach loop to loop through message
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
<!--Header for navigation-->
<header class="header">
    <div class="flex">
        <a href="admin_page.php" class="logo">
            <img src="images/logo-two.jpg" alt="logo" style="height: 4rem;">
        </a>

        <nav class="navbar">
            <a href="admin_page.php">home</a>
            <a href="admin_products.php">shop</a>
            <a href="admin_orders.php">orders</a>
            <a href="admin_users.php">users</a>
            <a href="admin_bookings.php">bookings</a>
            <a href="admin_contacts.php">messages</a>
        </nav>

        <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <div id="user-btn" class="fas fa-user"></div>
        </div>

        <div class="account-box">
            <p>username : <span><?php echo $_SESSION['admin_name']; ?></span></p>
            <p>email : <span><?php echo $_SESSION['admin_email']; ?></span></p>
            <a href="logout.php" class="delete-btn">logout</a>
        </div>
    </div>
</header>