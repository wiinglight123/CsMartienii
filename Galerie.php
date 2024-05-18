<!DOCTYPE html>
<html>
<head>
    <title>CS Martienii - Galerie</title>
    <meta name="keywords" content="football,CS Martienii, soccer,basketball,#DeGanditSiLaAlteSporturi, team, matches">
    <meta name="author" content="Patrascu Radu">
    <meta charset="UTF-8">
    <link rel="icon" href="Images/logo.png" type="image">
    <link rel="stylesheet" href="styles.css">
    <script src="Events.js"></script>
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

    <div class="containerBodyGalerie">
        <div class="row">
            <div class="column">
                <img class="small" src="Images/Galerie1.jpg" alt="1stPicture" onclick="Zoom(this);">
            </div>
            <div class="column">
                <img class="small" src="Images/Galerie2.jpg" alt="2ndPicture" onclick="Zoom(this);">
            </div>
            <div class="column">
                <img class="small" src="Images/Galerie3.jpg" alt="3rdPicture" onclick="Zoom(this);">
            </div>
            <div class="column">
                <img class="small" src="Images/Galerie4.jpg" alt="4thPicture" onclick="Zoom(this);">
            </div>
            <div class="column">
                <img class="small" src="Images/Galerie5.jpg" alt="5thPicture" onclick="Zoom(this);">
            </div>
            <div class="column">
                <img class="small" src="Images/Women1.jpg" alt="6thPicture" onclick="Zoom(this);">
            </div>
            <div class="column">
                <img class="small" src="Images/Women2.jpg" alt="7thPicture" onclick="Zoom(this);">
            </div>
            <div class="column">
                <img class="small" src="Images/Galerie6.jpg" alt="8thPicture" onclick="Zoom(this);">
            </div>
            <div class="column">
                <img class="small" src="Images/background2.jpg" alt="9thPicture" onclick="Zoom(this);">
            </div>
            <div class="column">
                <img class="small" src="Images/TOTW.jpg" alt="10thPicture" onclick="Zoom(this);">
            </div>
        </div>

        <!-- The expanding image container -->
        <div id="ZoomedImg" class="modal">
            <span class="close" onclick="closeModal()">&times;</span>
            <img class="modal-content" id="expandedImg">
        </div>

        <script>
            function Zoom(img) {
                var modal = document.getElementById("ZoomedImg");
                var modalImg = document.getElementById("expandedImg");
                var captionText = document.getElementById("caption");

                modal.style.display = "block";
                modalImg.src = img.src;
                captionText.innerHTML = img.alt;
            }

            function closeModal() {
                document.getElementById("ZoomedImg").style.display = "none";
            }
        </script>
    </div>
    <footer>
        <p>&copy; 2024 FC Cojeasca. Toate drepturile rezervate.</p>
    </footer>
</body>
</html>