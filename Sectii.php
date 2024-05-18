<!DOCTYPE html>
<html>
<head>
    <?php require_once "connect.php"; ?>
    <title>CS Martienii - Sectii</title>
    <meta name="keywords" content="football,CS Martienii, soccer,basketball,#DeGanditSiLaAlteSporturi, team, matches">
    <meta name="author" content="Patrascu Radu">
    <meta charset="UTF-8">
    <link rel="icon" href="Images/logo.png" type="image">
    <link rel="stylesheet" href="styles.css">
    <script src="Events.js"></script>
   <script> function Zoom(img) {
    var modal = document.getElementById("ZoomedImg");
    var modalImg = document.getElementById("expandedImg");
    var captionText = document.getElementById("caption");

    modal.style.display = "block";
    modalImg.src = img.src;
    captionText.innerHTML = img.alt;
    }
   </script>
    <script>  function closeModal() {
            document.getElementById("ZoomedImg").style.display = "none";
        }</script>

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
        <div class="container">
            <div class="team-section">
                <h2><a class="NoDecoration" href="Fotbal_Masculin.php">Fotbal Masculin</a></h2>
                <p>Echipa noastră de fotbal masculin se bucură de o istorie bogată în performanțe și pasiune pentru sport. Jucătorii noștri sunt dedicați și determinați să atingă succesul pe teren.</p>
                <img class="small" src="Images/WrexhamMasculinFC.jpg" alt="4thPicture" onclick="Zoom(this);">
            </div>

            <div class="team-section">
                <h2><a class="NoDecoration" href="Fotbal_Feminin.php">Fotbal Feminin</a></h2>
                <p>Echipa noastră de fotbal feminin reprezintă cu mândrie spiritul nostru competitiv și angajamentul față de egalitatea în sport. Fiecare jucătoare aduce unicitate și talent pe teren.</p>
                <img class="small" src="Images/WomenTeamFC.jpg" alt="4thPicture" onclick="Zoom(this);">
            </div>

            <div class="team-section">
                <h2><a class="NoDecoration" href="Fotbal_Juniori.php">Fotbal Juniori</a></h2>
                <p>Echipa noastră de fotbal pentru juniori este viitorul clubului nostru. Ne străduim să oferim oportunități de dezvoltare și creștere pentru tinerii talentați care împărtășesc terenul.</p>
                <img class="small" src="Images/JunioriFC.jpg" alt="4thPicture" onclick="Zoom(this);">
            </div>

            <div class="team-section">
                <h2><a class="NoDecoration" href="Baschet_Masculin.php">Baschet Masculin</a></h2>
                <p>Echipa noastră de baschet masculin este cunoscută pentru abilitățile lor atletice și strategice pe teren. Ne dorim să inspirăm și să formăm următoarea generație de campioni.</p>
                <img class="small" src="Images/Basket.jpg" alt="4thPicture" onclick="Zoom(this);">
            </div>
        </div>

            <div id="ZoomedImg" class="modal">
                <span class="close" onclick="closeModal()">&times;</span>
                <img class="modal-content" id="expandedImg">

    </div>
</div>
<footer>
    <p>&copy; 2024 CS Martienii. Toate drepturile rezervate.</p>
</footer>
</body>
</html>