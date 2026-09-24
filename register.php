<?php

require_once "config/database.php";

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $password = $_POST["password"];

    $hashed_password = password_hash(
        $password,
        PASSWORD_DEFAULT
    );

    $sql = "INSERT INTO users
            (name, email, phone, password)
            VALUES (?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);

    $stmt->bind_param(
        "ssss",
        $name,
        $email,
        $phone,
        $hashed_password
    );

    if ($stmt->execute()) {

        $message = "Account created successfully!";

    } else {

        $message = "Error: " . $stmt->error;

    }

    $stmt->close();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Register - MMUST Shop</title>

    <link rel="stylesheet"
          href="css/style.css">

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

    </nav>

</header>


<section class="form-section">

    <div class="form-container">

        <h1>Create Account</h1>

        <p>
            Join the MMUST Shop marketplace.
        </p>


        <?php if ($message != ""): ?>

            <p class="message">
                <?php echo htmlspecialchars($message); ?>
            </p>

        <?php endif; ?>


        <form method="POST">

            <label>Full Name</label>

            <input
                type="text"
                name="name"
                required
            >


            <label>Email</label>

            <input
                type="email"
                name="email"
                required
            >


            <label>Phone Number</label>

            <input
                type="text"
                name="phone"
                required
            >


            <label>Password</label>

            <input
                type="password"
                name="password"
                required
            >


            <button type="submit">
                Create Account
            </button>

        </form>


        <p class="form-link">

            Already have an account?

            <a href="login.php">
                Login
            </a>

        </p>

    </div>

</section>


<footer>

    <p>© 2026 MMUST Shop</p>

</footer>

</body>

</html>