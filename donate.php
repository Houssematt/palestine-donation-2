<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["category"])) {
    $category = $_GET["category"];
} else {
    // Redirect to the main page if the category is not set
    header("Location: index.html");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Donate - <?php echo ucfirst($category); ?></title>
</head>
<body>
    <header>
        <h1>Save People - <?php echo ucfirst($category); ?> Donation</h1>
    </header>

    <section class="container">
        <h2>Registration for <?php echo ucfirst($category); ?> Donation</h2>
        <form action="donation_process.php" method="post">
            <input type="hidden" name="category" value="<?php echo $category; ?>">

            <label for="name">Your Name:</label>
            <input type="text" name="name" id="name" required>

            <label for="contact">Contact Information:</label>
            <input type="text" name="contact" id="contact" required>

            <button type="submit">Donate</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2023 Save People. All rights reserved.</p>
    </footer>
</body>
</html>
