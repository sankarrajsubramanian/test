<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate username and password (this is just a simple example, not secure for production)
    $username = $_POST["username"];
    $password = $_POST["password"];

    // In a real-world scenario, you should check credentials against a database
    // For simplicity, let's assume valid credentials are "user" and "password"
    $valid_username = "user";
    $valid_password = "password";

    if ($username === $valid_username && $password === $valid_password) {
        // Redirect to a welcome page on successful login
        header("Location: welcome.php");
        exit();
    } else {
        $error_message = "Invalid username or password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login Page</title>
</head>
<body>
    <div class="container">
        <form action="login.php" method="post">
            <h2>Login</h2>
            <?php if (isset($error_message)): ?>
                <p style="color: red;"><?php echo $error_message; ?></p>
            <?php endif; ?>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
