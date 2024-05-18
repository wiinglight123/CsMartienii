<!DOCTYPE html>
<html>
<head>
    <title>FC Cojeasca - Homepage</title>
    <meta name="keywords" content="football, FC Cojeasca, soccer,basketball,#DeGanditSiLaAlteSporturi, team, matches">
    <meta name="author" content="Patrascu Radu">
    <meta charset="UTF-8">
    <link rel="icon" href="Images/logo.png" type="image">
    <link rel="stylesheet" href="styles.css">
    <meta name="description" content="Welcome to the official website of FC Cojeasca, where the passion for football meets the digital realm! Explore our virtual home to stay updated on the latest news, match schedules, player profiles, and exclusive behind-the-scenes content.">
</head>
<body>
<?php
require_once "connect.php";
?>
<header>
    <h1>
        <div class="container">
            <img src="Images/logo.png" alt="Your Image" class="rotate-img">
            CS Martienii
        </div>
    </h1>

    <nav>
        <ul>
            <li><a href="Home.php">Acasă</a></li>
            <li><a href="Sectii.php">Secții</a></li>
            <li><a href="Anunturi.php">Anunțuri</a></li>
            <li><a href="Galerie.php">Galerie</a></li>
            <li><a href="Contact.php">Contact</a></li>
            <li><a href="Login.php">Admin</a></li>
        </ul>
    </nav>
</header>
<div class="container">
    <div class="containerBodyLogin">
        <div id="login">
            <form method="post" action="Login.php">
                <div>
                <label for="username">Username:</label>
                <input type="text" id="username" name="username">
                </div>
                <div>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password">
                </div>
                <button type="submit">Login</button>
            </form>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_POST["username"]) && isset($_POST["password"])) {
                    $username = $_POST["username"];
                    $password = $_POST["password"];
            $sql = "SELECT * FROM football_club.users WHERE username='$username'";
            $result = mysqli_query($conexiune, $sql);
            if ($row = mysqli_fetch_array($result)) {
                if($password==$row['password'] && $username==$row['username']){
                    header("Location: Admin.php");
                exit; // Stop further execution of the script
                    } else {
                        // If username or password is incorrect, display an error message
                        echo "Invalid username or password. Please try again.";
                    }}
                } else {
                    // If username or password is not set, display an error message
                    echo "Username and password are required.";
                }
            }
            ?>
        </div>
    </div>

