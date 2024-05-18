<!DOCTYPE html>
<html>
<head>
    <?php require_once "connect.php"; ?>
    <title>CS Martienii - Echipe</title>
    <meta name="keywords" content="football,CS Martienii, soccer,basketball,#DeGanditSiLaAlteSporturi, team, matches">
    <meta name="author" content="Patrascu Radu">
    <meta charset="UTF-8">
    <link rel="icon" href="Images/logo.png" type="image">
    <link rel="stylesheet" href="styles.css">
    <meta name="description" content="Welcome to the official website of FC Cojeasca, where the passion for football meets the digital realm! Explore our virtual home to stay updated on the latest news, match schedules, player profiles, and exclusive behind-the-scenes content.">
</head>
<body>
<header>
    <h1>
        <div class="container">
            <img src="Images/logo.png" alt="Your Image" class="rotate-img">
            FC Cojeasca
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

    <div class="containerBody">


        <h1>Echipa de Fotbal Masculin</h1>

        <div class="players">
            <?php
            $query = "SELECT * FROM football_club.team_members WHERE echipa='Fotbal Masculin'";
            $result = mysqli_query($conexiune, $query);
            if (mysqli_num_rows($result) > 0) {
                // Parcurgem fiecare rând din rezultatul interogării
                while ($row = mysqli_fetch_assoc($result)) {
                    // Afisăm numele și imaginea fiecărui jucător
                    echo "<div class='player'>";
                    echo "<h3> " . $row['name']. "<br>";
                    echo  $row['position'] . " </h3>";
                    echo "<img src='" . $row['img'] . "' alt='" . $row['name'] . "'>";
                    echo "</div>";
                }
            } else {
                echo "Nu există jucători în echipa de fotbal masculin.";
            }
            ?>
        </div>
    </div>

</div>
<footer>
    <p>&copy; 2024 FC Cojeasca. Toate drepturile rezervate.</p>
</footer>
</body>
</html>