<?php
// karriere.php
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Karriere | Zoonergy</title>
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
        <a href="karriere.php" class="active">Karriere</a>
        <a href="team.php">Team</a>
        <a href="kontakt.php">Kontakt</a>
    </div>

    <!-- Header-Bild fullscreen -->
    <div class="career-header">
        <img src="Bilder/werbebildmitperson.png" alt="Karriere Header">
    </div>

    <!-- Karriere Content -->
    <div class="career-content">
        <h1>Deine Karriere bei Zoonergy</h1>
        <div class="career-text">
            <div>
                <p>
                    Bei ZOONERGY fließt Kreativität in jeder Dose. Schon unsere ersten Geschmacksrichtungen waren mutige Experimente - 
                    heute ist dieser Pioniergeist das Herzstück unserer Marke. Wir verbinden verrückte Ideen, einzigartige Designs und 
                    neue Geschmackserlebnisse, um immer wieder überraschende Drinks zu schaffen. ZOONERGY steht für Fantasie, Vielfalt 
                    und die Energie, jeden Tag neu zu erfinden.
                </p>
            </div>
            <div>
                <p>
                    Genauso bunt wie unsere Drinks sind auch die Chancen bei ZOONERGY:
                    Ob im Marketing, Design, in der Produktentwicklung, im Projektmanagement oder im Customer Service - bei uns warten 
                    spannende Aufgaben in den verschiedensten Bereichen. Werde Teil unseres Teams und gestalte mit uns die Zukunft der 
                    Erfrischung!
                </p>
            </div>
        </div>

        <div class="career-cta">
            <h2>Klingt spannend?</h2>
            <p>Dann gestalte mit uns die Energy-Drinks von morgen!</p>
            <!-- Button leitet auf jobsoffen.php -->
            <a href="jobsoffen.php" class="btn">Alle offenen Jobs</a>
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
