
<!DOCTYPE html>
<html>
<head>
    <?php
    require_once "connect.php";
    ?>

    </style>
    <title>CS Martienii - Homepage</title>
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
        <script>
            function validateFormPlayer() {
                var team = document.getElementById("team").value;
                var player_name = document.getElementById("player_name").value;
                var player_position = document.getElementById("player_position").value;

                console.log("Validating form..."); // Mesaj de debug pentru a verifica dacă funcția este apelată

                if (player_name.trim() == "") {
                    alert("Numele este obligatoriu.");
                    return false;
                }
                if (player_position.trim() == "") {
                    alert("Poziția este obligatorie.");
                    return false;
                }
                if (team.trim() == "") {
                    alert("Echipa este obligatorie.");
                    return false;
                }

                if (player_position.length > 50) {
                    alert("Poziția jucătorului conține prea multe caractere.");
                    return false;
                }
                if (player_name.length > 50) {
                    alert("Numele conține prea multe caractere.");
                    return false;
                }
                if (team.length > 20) {
                    alert("Echipa pentru care joacă conține prea multe caractere.");
                    return false;
                }

                console.log("Validation passed!"); // Mesaj de debug pentru a verifica dacă validarea a trecut

                return true; // Adăugăm această linie pentru a permite trimiterea formularului
            }
        </script>
        <script>
            function validateFormAnnouncements() {
                var title = document.getElementById("titlu").value;
                var content = document.getElementById("content").value;

                if (title.trim() == "") {
                    alert("Titlul este obligatoriu.");
                    return false;
                }

                if (content.trim() == "") {
                    alert("Continutul este obligatoriu.");
                    return false;
                }

                if (title.length > 100) {
                    alert("Titlul contine prea multe caractere.");
                    return false;
                }

                if (content.length > 150 ) {
                    alert("Postarea contine prea multe caractere.");
                    return false;
                }

                return true;
            }
        </script>
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
    <div class="empty">

    </div>
    <div class="containerBodyAdmin" style="height:auto;">

        <?php
        require_once "connect.php"; // Includeti fisierul de conectare la baza de date

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Verificați dacă toate datele sunt trimise prin POST
        if(isset($_POST["announcements"]) && $_POST["announcements"] == "adauga") {
            if(isset($_POST["title"], $_POST["content"])) {
                // Escapati datele postate pentru a preveni injectia SQL
                $title = mysqli_real_escape_string($conexiune, $_POST["title"]);
                $content = mysqli_real_escape_string($conexiune, $_POST["content"]);

                // Verificare dacă câmpurile sunt completate
                if(empty($title) || empty($content)) {
                    die('Error: Titlul și continutul anuntului sunt obligatorii.');
                }

                // Introducere anunț în baza de date
                $sql = "INSERT INTO football_club.announcements(title, content) VALUES ('$title','$content')";
                if (!mysqli_query($conexiune, $sql)) {
                    die('Error: ' . mysqli_error($conexiune));
                } else {
                    // Afișare alertă JavaScript
                    echo "<div class='success'>Anunțul a fost postat cu succes!</div>";
                }
            } else {
                // Afișați un mesaj de eroare dacă nu toate datele sunt trimise prin POST
                echo "<div class='error'> Eroare: Toate câmpurile sunt obligatorii.</div>";
            }
        }}
        ?>
        <h4>Adaugare Anunturi</h4>
        <form action="Admin.php" method="post" onsubmit="return validateFormAnnouncements()">
            <input name="announcements" type="hidden" value="adauga" />
            <label for="titlu">Titlu:</label>
            <input id="titlu" type="text" name="title" required />
            <label for="content">Continut:</label>
            <input name="content" id="content" required />
            <input type="submit" value="Adauga"/>
        </form>
        <br>
        <?php
        require_once "connect.php"; // Includeti fisierul de conectare la baza de date

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Verifică dacă s-a trimis o cerere de ștergere a unui anunț după titlu
            if(isset($_POST["announcements"]) && $_POST["announcements"] == "delete") {
                // Verifică dacă titlul anunțului de șters a fost trimis prin POST
                if(isset($_POST["delete_title"])) {
                    // Escapare titlu pentru a preveni injectia SQL
                    $delete_title = mysqli_real_escape_string($conexiune, $_POST["delete_title"]);

                    // Șterge anunțurile cu titlul specificat din baza de date
                    $sql = "DELETE FROM football_club.announcements WHERE title='$delete_title'";
                    if (!mysqli_query($conexiune, $sql)) {
                        die('Error: ' . mysqli_error($conexiune));
                    } else {
                        // Afișează un mesaj de succes sau o alertă JavaScript
                        echo "<div class='success'>Anunțurile cu titlul '$delete_title' au fost șterse cu succes.</div>";
                    }
                } else {
                    // Afișează un mesaj de eroare dacă titlul anunțului de șters lipsește
                    echo "Eroare: Titlul anunțului pentru ștergere lipsește.";
                }
            }
        }
        ?>
        <h4>Stergere Anunturi</h4>
        <form action="Admin.php" method="post">
            <input name="announcements" type="hidden" value="delete" />
            <label for="delete_titlu">Titlu:</label>
            <input id="delete_titlu" type="text" name="delete_title" />
            <input type="submit" value="Sterge"/>
        </form>
        <?php
        require_once "connect.php"; // Includem fișierul de conectare la baza de date

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Verificăm dacă titlul și conținutul sunt trimise prin metoda POST
        if(isset($_POST["announcements"]) && $_POST["announcements"] == "modifica") {
            if (isset($_POST["title_modify"], $_POST["content_modify"])) {
                // Scăpăm de caracterele speciale din titlu și conținut pentru a preveni SQL injection
                $title_modify = mysqli_real_escape_string($conexiune, $_POST["title_modify"]);
                $content_modify = mysqli_real_escape_string($conexiune, $_POST["content_modify"]);

                // Interogăm baza de date pentru a actualiza conținutul anunțului cu titlul specificat
                $sql = "UPDATE football_club.announcements SET content='$content_modify' WHERE title='$title_modify'";
                if (!mysqli_query($conexiune, $sql)) {
                    die('Error: ' . mysqli_error($conexiune));
                } else {
                    echo "<div class='success'>Conținutul anunțului cu titlul '$title_modify' a fost actualizat cu succes!</div>";
                }
            } else {
                // Mesaj de eroare dacă titlul și conținutul nu sunt setate în metoda POST
                echo "<div class='error'>Titlul și conținutul anunțului sunt necesare.</div>";
            }
        }}
        ?>
        <br>
        <h4>Modifica Anunturi</h4>
        <form action="Admin.php" method="post">
            <input name="announcements" type="hidden" value="modifica" onsubmit="return validateFormAnnouncements()" />
            <label id="titlu_modify" for="Titlu">Titlu:</label>
            <input id="titlu_modify" type="text" name="title_modify" value="<?php echo isset($title) ? $title : ''; ?>" required/>
            <label for="Continut">Continut:</label> <input id="content" type="text" name="content_modify" value="<?php echo isset($content) ? $content : ''; ?>" required/>
            <input type="submit" value="Modifica"/>
        </form>

    </div>
        <div class="containerBodyAdmin">
            <h4>Adaugare Jucator</h4>
            <?php
            require_once "connect.php";

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_POST["add_player"])) {
                    if (isset($_POST["player_name"], $_POST["player_position"])) {
                        $player_name = mysqli_real_escape_string($conexiune, $_POST["player_name"]);
                        $player_position = mysqli_real_escape_string($conexiune, $_POST["player_position"]);
                        $team = mysqli_real_escape_string($conexiune, $_POST["team"]);

                        if (empty($player_name) || empty($player_position)) {
                            echo "<div class='error'>Numele și poziția jucătorului sunt obligatorii.</div>";
                        } else {
                            $img = "Images/" . preg_replace('/\s+/', '', $player_name) . ".jpg";
                            $sql = "INSERT INTO football_club.team_members(name, position, echipa, img) VALUES ('$player_name', '$player_position','$team','$img')";
                            if (!mysqli_query($conexiune, $sql)) {
                                echo "<div class='error'>Eroare: " . mysqli_error($conexiune) . "</div>";
                            } else {
                                echo "<div class='success'>Jucătorul a fost adăugat cu succes!</div>";
                            }
                        }
                    } else {
                        echo "<div class='error'>Eroare: Toate câmpurile sunt obligatorii.</div>";
                    }
                }
            }
            ?>
            <form action="Admin.php" method="post" onsubmit="return validateFormPlayer()">
                <input type="hidden" name="add_player" value="true">
                <label for="player_name">Numele jucătorului:</label>
                <input type="text" name="player_name" id="player_name">
                <label for="player_position">Poziția jucătorului:</label>
                <input type="text" name="player_position" id="player_position">
                <label for="team">Echipa:</label>
                <input type="text" name="team" id="team">
                <input type="submit" value="Adauga">
            </form>
        <?php
        require_once "connect.php"; // Includeți fișierul de conectare la baza de date

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST["edit_player"])) {
                if (isset($_POST["player_id"], $_POST["new_player_name"], $_POST["new_player_position"])) {
                    $player_id = mysqli_real_escape_string($conexiune, $_POST["player_id"]);
                    $new_player_name = mysqli_real_escape_string($conexiune, $_POST["new_player_name"]);
                    $new_player_position = mysqli_real_escape_string($conexiune, $_POST["new_player_position"]);

                    if (empty($new_player_name) || empty($new_player_position)) {
                        echo "<div class='error'>Noul nume și noua poziție ale jucătorului sunt obligatorii.</div>";
                    } else {
                        $sql = "UPDATE football_club.team_members SET name='$new_player_name', position='$new_player_position' WHERE id='$player_id'";
                        if (!mysqli_query($conexiune, $sql)) {
                            echo "<div class='error'>Eroare: " . mysqli_error($conexiune) . "</div>";
                        } else {
                            echo "<div class='success'>Jucătorul a fost modificat cu succes!</div>";
                        }
                    }
                } else {
                    echo "<div class='error'>Eroare: Toate câmpurile sunt obligatorii.</div>";
                }
            }
        }
        ?>
            <h4>Modifica Jucatorii</h4>

        <form action="Admin.php" method="post">
            <input type="hidden" name="edit_player" value="true">
            <label for="player_id">ID Jucator:</label>
            <input type="text" name="player_id" id="player_id">
            <label for="new_player_name">Noul nume:</label>
            <input type="text" name="new_player_name" id="new_player_name">
            <label for="new_player_position">Noua poziție:</label>
            <input type="text" name="new_player_position" id="new_player_position">
            <input type="submit" value="Modifica Jucator">
        </form>
        <h4>Ștergere Jucator</h4>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_POST["delete_player"])) {
                    if (isset($_POST["player_id"])) {
                        $player_id = mysqli_real_escape_string($conexiune, $_POST["player_id"]);
                        $sql = "DELETE FROM football_club.team_members WHERE id='$player_id'";
                        if (!mysqli_query($conexiune, $sql)) {
                            echo "<div class='error'>Eroare: " . mysqli_error($conexiune) . "</div>";
                        } else {
                            echo "<div class='success'>Jucătorul a fost șters cu succes!</div>";
                        }
                    } else {
                        echo "<div class='error'>Eroare: ID-ul jucătorului este necesar.</div>";
                    }
                }
            }
            ?>
            <!-- Formularul de ștergere a jucătorului -->
            <form action="Admin.php" method="post">
                <input type="hidden" name="delete_player" value="true">
                <label for="delete_player">ID Jucator:</label>
                <input type="text" name="player_id" id="player_id">
                <input type="submit" value="Sterge Jucator">
            </form>

    </div>
    <div class="empty">
    </div>
</div>
