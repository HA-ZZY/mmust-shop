<?php
require_once "config/database.php";

$sql = "SELECT products.*, users.name AS seller_name
        FROM products
        JOIN users ON products.seller_id = users.id
        ORDER BY products.created_at DESC";

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Buy - MMUST Shop</title>

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


<section class="page-section">

    <h1>Buy Products</h1>

    <p>Find products being sold by MMUST students.</p>


    <div class="products-container">

        <?php if ($result->num_rows > 0): ?>

            <?php while ($product = $result->fetch_assoc()): ?>

                <div class="product-card">

                    <div class="product-image">
                        📦
                    </div>

                    <h2>
                        <?php echo htmlspecialchars($product['name']); ?>
                    </h2>

                    <p class="price">
                        KSh <?php echo number_format($product['price']); ?>
                    </p>

                    <p>
                        Category:
                        <?php echo htmlspecialchars($product['category']); ?>
                    </p>

                    <p>
                        Seller:
                        <?php echo htmlspecialchars($product['seller_name']); ?>
                    </p>

                    <a
                        href="product.php?id=<?php echo $product['id']; ?>"
                        class="btn"
                    >
                        View Product
                    </a>

                </div>

            <?php endwhile; ?>

        <?php else: ?>

            <div class="empty-message">

                <h2>No products yet</h2>

                <p>
                    There are currently no products listed for sale.
                </p>

                <a href="sell.php" class="btn">
                    Sell an Item
                </a>

            </div>

        <?php endif; ?>

    </div>

</section>


<footer>

    <p>© 2026 MMUST Shop</p>

</footer>

</body>

</html>