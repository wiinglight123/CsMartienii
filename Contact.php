<!DOCTYPE html>
<html>
<head>
    <?php require_once "connect.php"; ?>
    <title>CS Martienii - Contact</title>
    <meta name="keywords" content="football, CS Martienii, soccer,basketball,#DeGanditSiLaAlteSporturi, team, matches">
    <meta name="author" content="Patrascu Radu">
    <meta charset="UTF-8">
    <link rel="icon" href="Images/logo.png" type="image">
    <link rel="stylesheet" href="styles.css">
    <meta name="description" content="Welcome to the official website of FC Cojeasca, where the passion for football meets the digital realm! Explore our virtual home to stay updated on the latest news, match schedules, player profiles, and exclusive behind-the-scenes content.">
</head>
<body>
<header>
    <script>
        function validateForm() {
            var name = document.getElementById("name").value;
            var email = document.getElementById("email").value;
            var message = document.getElementById("message").value;
            var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

            if (name.trim() == "") {
                alert("Numele este obligatoriu.");
                return false;
            }

            if (email.trim() == "") {
                alert("Emailul este obligatoriu.");
                return false;
            }

            if (!emailPattern.test(email)) {
                alert("Introduceți un email valid.");
                return false;
            }

            if (message.trim() == "") {
                alert("Mesajul este obligatoriu.");
                return false;
            }

            return true;
        }
    </script>
    <h1>
        <div class="container">
            <img src="Images/logo.png" alt="Your Image" class="rotate-img">
            CS Martienii
        </div></h1>
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
    <div class="empty">

    </div>
    <div class="containerBodyContact">
    <h1>Contactați-ne</h1>

    <div class="contact-info">
        <h2>Informații de contact</h2>
        <p><strong>Adresa:</strong> Strada Timpului , Nr. 28, Pompeii, Romania</p>
        <p><strong>Telefon:</strong> +40 297 175 068</p>
        <p><strong>Email:</strong> contact@martieniisports.com</p>
    </div>

    <div class="contact-form">
        <h2>Trimiteți-ne un mesaj</h2>
        <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = htmlspecialchars($_POST["name"]);
            $email = htmlspecialchars($_POST["email"]);
            $message = htmlspecialchars($_POST["message"]);

            if (!empty($name) && !empty($email) && !empty($message)) {
                $name = mysqli_real_escape_string($conexiune, $name);
                $email = mysqli_real_escape_string($conexiune, $email);
                $message = mysqli_real_escape_string($conexiune, $message);

                // Inserăm mesajul în baza de date
                $sql = "INSERT INTO football_club.contact_messages (name, email, message) VALUES ('$name', '$email', '$message')";
                if (mysqli_query($conexiune, $sql)) {
                    echo "<div class='success'>Mesajul dumneavoastră a fost trimis cu succes!</div>";
                } else {
                    echo "<div class='error'>Eroare: " . mysqli_error($conexiune) . "</div>";
                }
            } else {
                echo "<div class='error'>Toate câmpurile sunt obligatorii.</div>";
            }
        }
        ?>
        <form action="Contact.php" method="post" onsubmit="return validateForm()">
            <label for="name">Nume:</label>
            <input type="text" name="name" id="name" required>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
            <label for="message">Mesaj:</label>
            <textarea name="message" id="message" rows="5" required></textarea>
            <input type="submit" value="Trimite">
        </form>
    </div>
    </div>
    <div class="empty">

    </div>
</div>
<footer>
    <p>&copy; 2024 FC Cojeasca. Toate drepturile rezervate.</p>
</footer>
</body>
</html>