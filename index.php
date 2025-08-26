<?php
// index.php
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Zoonergy</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Navbar -->
    <div class="navbar">
        <div class="logo">
            <a href="index.php">
                <img src="Bilder/logo.png" alt="Logo">
            </a>
        </div>
        <a href="merch.php">Merch</a>
        <a href="karriere.php">Karriere</a>
        <a href="team.php">Team</a>
        <a href="kontakt.php">Kontakt</a>
    </div>

    <!-- Content -->
    <div class="content">
        <div class="center-logo">
            <img src="Bilder/logo.png" alt="Zoonergy Logo">
        </div>
        <h2>Entfessle dein Tier.</h2>
        <p>
            Zoonergy ist eine Wiener Energy Drink Brand, die Tiere und Geschmack vereint. 
            Jede Dose steht für ein Tier vom Käfer bis zum Drachen und gibt dir die 
            Energie, dein wahres Tier zu entfesseln.
        </p>
    </div>

    <!-- Bilder-Bereich -->
    <div class="image-row">
        <img src="Bilder/abfüllen1.png" alt="Bild 1">
        <img src="Bilder/einpacken.png" alt="Bild 2">
        <img src="Bilder/LKFFahrt.png" alt="Bild 3">
    </div>

    <!-- Flip-Cards Bereich -->
    <div class="flip-container">
        <div class="flip-card">
            <div class="flip-inner">
                <div class="flip-front">
                    <img src="Bilder/Dosen/Käfer.png" alt="Bild 1">
                </div>
                <div class="flip-back">
                    <p>leer</p>
                </div>
            </div>
        </div>
        <div class="flip-card">
            <div class="flip-inner">
                <div class="flip-front">
                    <img src="Bilder/Dosen/Raccoon.png" alt="Bild 2">
                </div>
                <div class="flip-back">
                    <p>leer</p>
                </div>
            </div>
        </div>
        <div class="flip-card">
            <div class="flip-inner">
                <div class="flip-front">
                    <img src="Bilder/Dosen/Fledermaus.png" alt="Bild 3">
                </div>
                <div class="flip-back">
                    <p>leer</p>
                </div>
            </div>
        </div>
        <div class="flip-card">
            <div class="flip-inner">
                <div class="flip-front">
                    <img src="Bilder/Dosen/Cat.png" alt="Bild 4">
                </div>
                <div class="flip-back">
                    <p>leer</p>
                </div>
            </div>
        </div>
        <div class="flip-card">
            <div class="flip-inner">
                <div class="flip-front">
                    <img src="Bilder/Dosen/Dog.png" alt="Bild 5">
                </div>
                <div class="flip-back">
                    <p>leer</p>
                </div>
            </div>
        </div>
        <div class="flip-card">
            <div class="flip-inner">
                <div class="flip-front">
                    <img src="Bilder/Dosen/Kuh.png" alt="Bild 6">
                </div>
                <div class="flip-back">
                    <p>leer</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Extra Karte -->
    <div class="flip-container extra">
        <div class="flip-card">
            <div class="flip-inner">
                <div class="flip-front">
                    <img src="Bilder/Dosen/Drache.png">
                </div>
                <div class="flip-back">
                    <p>leer</p>
                </div>
            </div>
        </div>
    </div>

<!-- Footer -->
<footer class="footer">
    <div class="footer-left">
        <img src="Bilder/logo.png" alt="Zoonergy Logo">
        <p>
            Zoonergy GmbH<br>
            Favoritenstraße 6<br>
            1010 Wien, Österreich
        </p>
        <p>
            Mail: <a href="mailto:zoonergy-hotline@gmail.com">zoonergy-hotline@gmail.com</a><br>
            Phone: +43 660 3242 435
        </p>
    </div>

    <div class="footer-center">
        <h3>Entfessle dein Tier!</h3>
        <p>Wir machen deine Energie sichtbar.</p>
    </div>

    <div class="footer-right">
        <ul>
            <li><a href="#">Impressum</a></li>
            <li><a href="#">Datenschutz</a></li>
            <li><a href="#">AGB</a></li>
            <li><a href="team.php">Team</a></li>
            <li><a href="karriere.php">Karriere</a></li>
        </ul>
        <div class="socials">
            <a href="#" class="social-icon">
                <img src="Bilder/instagram.png" alt="Instagram">
            </a>
        </div>
    </div>
</footer>


</body>
</html>