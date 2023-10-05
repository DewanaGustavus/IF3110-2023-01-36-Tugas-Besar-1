<?php
$userLoggedIn = isset($_SESSION['user_username']);
$userIsAdmin = isset($_SESSION['user_category']) && $_SESSION['user_category'] === 'admin';

$title = ""; // TODO : get current page title
?>

<header>
    <nav id="site-menu">
        <ul>
            <li <?php if ($title == "home") echo 'aria-current="page"'; ?>><a href="/">Home</a></li>
            
            <!-- TODO : Remove this when development over  -->
            <li><a href="/Category.php">Category</a></li>
            <li><a href="/AddProduct.php">Add Product</a></li>

            <li class="search-bar">
                <form action="/Search.php" method="GET">
                    <input type="text" name="query" placeholder="Search...">
                    <button type="submit">Search</button>
                </form>
            </li>

            <?php if (!$userLoggedIn) : ?>
                <!-- Display "Register" and "Log in" when not logged in -->
                <li><a href="/Login.php">Log in</a></li>
                <li><a href="/Register.php">Register</a></li>
            <?php elseif ($userLoggedIn && !$userIsAdmin) : ?>
                <!-- Display "Cart", "Profile", and "Log out" when logged in as a user -->
                <li <?php if ($title == "cart") echo 'aria-current="page"'; ?>><a href="/Cart.php">Cart</a></li>
                <li <?php if ($title == "profile") echo 'aria-current="page"'; ?>><a href="/Profile.php">Profile</a></li>
                <li><a href="/Logout.php">Log out</a></li>
            <?php elseif ($userLoggedIn && $userIsAdmin) : ?>
                <!-- Display "Manage Store", "Profile", and "Log out" when logged in as admin -->
                <li><a href="/Manage.php">Manage</a></li>
                <li <?php if ($title == "profile") echo 'aria-current="page"'; ?>><a href="/Profile.php">Profile</a></li>
                <li><a href="/Logout.php">Log out</a></li>
            <?php endif; ?>
        </ul>
    </nav>
</header>