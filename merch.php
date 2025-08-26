<?php
// merch.php
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Merch | Zoonergy</title>
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
        <a href="index.php">leer 1</a>
        <a href="merch.php" class="active">Merch</a>
        <a href="karriere.php">Karriere</a>
        <a href="team.php">Team</a>
        <a href="kontakt.php">Kontakt</a>
    </div>

    <!-- Merch Content -->
    <div class="merch-page">
        <h1>Unser Merch</h1>
        <div class="merch-grid">
            
            <!-- Produkt 1 -->
            <div class="merch-card">
                <img src="Bilder/Merch/merch1.png" alt="Merch 1">
                <div class="merch-info">
                    <h2>leer 1</h2>
                    <p class="price">€25,00</p>
                    <button>Kaufen</button>
                </div>
            </div>

            <!-- Produkt 2 -->
            <div class="merch-card">
                <img src="Bilder/Merch/merch2.png" alt="Merch 2">
                <div class="merch-info">
                    <h2>leer 2</h2>
                    <p class="price">€45,00</p>
                    <button>Kaufen</button>
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
