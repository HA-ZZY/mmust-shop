<?php
require_once "config/database.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login - MMUST Shop</title>

    <link rel="stylesheet" href="css/style.css">

</head>

<body>

<header class="navbar">

    <div class="logo">
        🛒 MMUST Shop
    </div>

    <nav>

        <a href="index.php">Home</a>

        <a href="buy.php">Buy</a>

        <a href="sell.php">Sell</a>

        <a href="register.php">Register</a>

    </nav>

</header>


<section class="form-section">

    <div class="form-container">

        <h1>Welcome Back</h1>

        <p>Login to your MMUST Shop account.</p>


        <form>

            <label>Email</label>

            <input
                type="email"
                placeholder="Enter your email"
            >


            <label>Password</label>

            <input
                type="password"
                placeholder="Enter your password"
            >


            <button type="button">
                Login
            </button>

        </form>


        <p class="form-link">

            Don't have an account?

            <a href="register.php">
                Create Account
            </a>

        </p>

    </div>

</section>


<footer>

    <p>© 2026 MMUST Shop</p>

</footer>

</body>

</html>