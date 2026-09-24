<?php
require_once "config/database.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sell - MMUST Shop</title>

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
        <a href="login.php">Login</a>
        <a href="register.php">Register</a>
    </nav>

</header>


<section class="form-section">

    <div class="form-container">

        <h1>Sell an Item</h1>

        <p>
            List your item on MMUST Shop.
        </p>


        <form>

            <label>Product Name</label>

            <input
                type="text"
                placeholder="e.g. HP Laptop"
            >


            <label>Category</label>

            <select>

                <option>Electronics</option>
                <option>Fashion</option>
                <option>Books</option>
                <option>Hostel</option>
                <option>Food</option>
                <option>Other</option>

            </select>


            <label>Price (KSh)</label>

            <input
                type="number"
                placeholder="e.g. 25000"
            >


            <label>Condition</label>

            <select>

                <option>New</option>
                <option>Like New</option>
                <option>Good</option>
                <option>Used</option>

            </select>


            <label>Location</label>

            <input
                type="text"
                placeholder="e.g. MMUST Main Campus"
            >


            <label>Description</label>

            <textarea
                placeholder="Describe your product..."
                rows="5"
            ></textarea>


            <button type="button">
                Post Item
            </button>

        </form>

    </div>

</section>


<footer>

    <p>© 2026 MMUST Shop</p>

</footer>

</body>

</html>
