<!DOCTYPE html>
<html>
<head>
    <?php require_once "connect.php"; ?>
    <title>CS Martienii - Anunturi</title>
    <meta name="keywords" content="football, FC Cojeasca, soccer,basketball,#DeGanditSiLaAlteSporturi, team, matches">
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
    <div class="containerBody">
        <?php
        $query = "SELECT * FROM announcements";
        $result = mysqli_query($conexiune, $query);
        if(mysqli_num_rows($result)) {
            print("<table border='1' cellspacing='0'>\n");
            print("<tr>\n");
            print("<th>Data si Ora postarii</th><th width='16%'>Titlu</th><th width='74%'>Continut</th>");
            print("</tr>\n");
            while($row = mysqli_fetch_array($result)){
                print("<tr>\n");
                print("<td>" . $row['created_at']. "</td>\n");
                print("<td>" . $row['title']. "</td>\n");
                print("<td>" . $row['content']. "</td>\n");
                print("</tr>\n");
            }
            print("</table>");
        } else {
            print "Nu s-a postat niciun anunt";
        }
        ?>
    </div>
    <div class="empty">

    </div>
</div>
<footer>
    <p>&copy; 2024 CS Martienii. Toate drepturile rezervate.</p>
</footer>
</body>
</html>