<?php
require_once "config/database.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>MMUST Shop</title>

    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!-- Navigation -->
    <header class="navbar">

        <div class="logo">
            🛒 MMUST Shop
        </div>

        <nav>
            <a href="index.php">Home</a>
            <a href="buy.php">Buy</a>
            <a href="sell.php">Sell</a>
            <a href="login.php">Login</a>
            <a href="register.php">Register</a>
        </nav>

    </header>


    <!-- Hero Section -->
    <section class="hero">

        <div class="hero-content">

            <h1>MMUST Shop</h1>

            <p class="tagline">
                Buy. Sell. Connect.
            </p>

            <p>
                The student marketplace for MMUST.
            </p>


            <!-- Search -->
            <div class="search-box">

                <input
                    type="text"
                    placeholder="Search for products..."
                >

                <button>
                    Search
                </button>

            </div>


            <!-- Buttons -->
            <div class="hero-buttons">

                <a href="buy.php" class="btn">
                    Browse Products
                </a>

                <a href="sell.php" class="btn secondary">
                    Sell an Item
                </a>

            </div>

        </div>

    </section>


    <!-- Categories -->
    <section class="categories">

        <h2>Shop by Category</h2>

        <div class="category-container">

            <div class="category">
                💻
                <h3>Electronics</h3>
            </div>

            <div class="category">
                👕
                <h3>Fashion</h3>
            </div>

            <div class="category">
                📚
                <h3>Books</h3>
            </div>

            <div class="category">
                🏠
                <h3>Hostel</h3>
            </div>

            <div class="category">
                🍔
                <h3>Food</h3>
            </div>

            <div class="category">
                📦
                <h3>Other</h3>
            </div>

        </div>

    </section>


    <!-- About -->
    <section class="about">

        <h2>About MMUST Shop</h2>

        <p>
            MMUST Shop is a student marketplace designed to make
            buying and selling easier within the university community.
        </p>

    </section>


    <!-- Footer -->
    <footer>

        <p>
            © 2026 MMUST Shop
        </p>

        <p>
            Buy • Sell • Connect
        </p>

    </footer>

</body>

</html>