<?php
// index.php
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Zoonergy</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="glow.css">
    <script src="script.js"></script>

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
<!-- Flip-Cards Bereich -->
<div class="flip-container">
        <!-- Käfer -->
        <div class="flip-card theme-bug">
            <div class="flip-inner">
                <div class="flip-front">
                    <img src="Bilder/Dosen/Käfer.png" alt="Käfer Dose">
                </div>
                <div class="flip-back">
                    <h4>Käfer</h4>
                    <em>Klein, aber krank stark.</em>
                    <span class="badge">Für Underdogs & Overachiever</span>
                    <div class="flavor">🍏 Sour Apple + 🥝 Kiwi</div>
                    <p>Winzig, wendig, bissig – für die, die leise arbeiten und laut gewinnen:
                       Speedrunner, Mathe-Ninjas, Prüfungs-Clutcher.</p>
                    <div class="tagline">€2,99</div>
                </div>
            </div>
        </div>

        <!-- Waschbär -->
        <div class="flip-card theme-raccoon">
            <div class="flip-inner">
                <div class="flip-front">
                    <img src="Bilder/Dosen/Raccoon.png" alt="Waschbär Dose">
                </div>
                <div class="flip-back">
                    <h4>Waschbär</h4>
                    <em>Süß. Frech. Nachtaktiv.</em>
                    <span class="badge">Für Chaos-Künstler & Snack-Jäger</span>
                    <div class="flavor">🍪 Cookie Dough + 🍦 Vanilla</div>
                    <p>Meme-Lords, Night-Shift-Stars und alle mit geheimem Plan (legal 😉).
                       Weich im Taste, wild im Kopf.</p>
                    <div class="tagline">€2,99</div>
                </div>
            </div>
        </div>

        <!-- Fledermaus -->
        <div class="flip-card theme-bat">
            <div class="flip-inner">
                <div class="flip-front">
                    <img src="Bilder/Dosen/Fledermaus.png" alt="Fledermaus Dose">
                </div>
                <div class="flip-back">
                    <h4>Fledermaus</h4>
                    <em>Mystisch & ein bisschen vampirisch.</em>
                    <span class="badge">Für Nachteulen & Fokus-Beasts</span>
                    <div class="flavor">🍇 Dark Grape + 🍇 Blackberry</div>
                    <p>DJs, Horror-Marathon-Pros, Introverts mit Laserfokus – dunkel, smooth, sehr wach.</p>
                    <div class="tagline">€2,99</div>
                </div>
            </div>
        </div>

        <!-- Katze -->
        <div class="flip-card theme-cat">
            <div class="flip-inner">
                <div class="flip-front">
                    <img src="Bilder/Dosen/Cat.png" alt="Katze Dose">
                </div>
                <div class="flip-back">
                    <h4>Katze</h4>
                    <em>Verspielt, süß – aber gefährlich.</em>
                    <span class="badge">Für Freigeister & Mood-Queens</span>
                    <div class="flavor">🍑 Peach + 🥭 Lychee</div>
                    <p>Artists, Skater, Parkour-Kids – soft im Einstieg, claws out im Finish.</p>
                    <div class="tagline">€2,99</div>
                </div>
            </div>
        </div>

        <!-- Hund -->
        <div class="flip-card theme-dog">
            <div class="flip-inner">
                <div class="flip-front">
                    <img src="Bilder/Dosen/Dog.png" alt="Hund Dose">
                </div>
                <div class="flip-back">
                    <h4>Hund</h4>
                    <em>Loyal. Klassisch. Immer beliebt.</em>
                    <span class="badge">Für Teamplayer & Ride-or-Die</span>
                    <div class="flavor">🥤 Cola + 🍒 Cherry</div>
                    <p>Für die Crew, die immer auftaucht: Gaming-Duos, Turnier-Grinder, Festival-Buddies.
                       Oldschool Taste mit modernem Kick.</p>
                    <div class="tagline">€2,99</div>
                </div>
            </div>
        </div>

        <!-- Kuh -->
        <div class="flip-card theme-cow">
            <div class="flip-inner">
                <div class="flip-front">
                    <img src="Bilder/Dosen/Kuh.png" alt="Kuh Dose">
                </div>
                <div class="flip-back">
                    <h4>Kuh</h4>
                    <em>Verrückt. Creamy. Komplett anders.</em>
                    <span class="badge">Für Dessert-Lover & Rule-Breaker</span>
                    <div class="flavor">🍫 Chocolate + 🍮 Caramel (Milkshake-Style)</div>
                    <p>Cozy Sunday-Grinder, Late-Night-Lerner, Sweet-Tooth-Legenden. Dicke Comfort-Vibes, volle Energie.</p>
                    <div class="tagline">€2,99</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Extra Karte – DRACHE -->
    <div class="flip-container special">
        <div class="flip-card theme-dragon">
            <div class="flip-inner">
                <div class="flip-front">
                    <img src="Bilder/Dosen/Drache.png" alt="Drache Dose">
                </div>
                <div class="flip-back">
                    <h4>Special Edition: Drache</h4>
                    <em>Nur für die Mutigen.</em>
                    <span class="badge">Limitiert & selten</span>
                    <div class="flavor">🌶️ Chili + 🥭 Mango + ⚡ Energy-Kick</div>
                    <p>Für Speedrunner, Startup-Pyros und Boss-Fight-Seelen.
                       Scharf im Antritt, süß im Glide, brennt sich ins Gedächtnis.</p>
                    <div class="tagline">€50,00</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Über uns Abschnitt -->
    <section class="about-section">
        <div class="about-text">
            <h2>Werde mit uns zum Tier - seit 2025</h2>
            <p>
                Zoonergy ist mehr als nur ein Energy Drink - wir sind ein Unternehmen,
                das 2025 gegründet wurde, um Power und Kreativität in jeder Dose zu vereinen.
                Mit Leidenschaft, Mut und Energie arbeiten wir daran, deine wahre Stärke sichtbar zu machen.
            </p>
            <a href="team.php" class="btn">Unser Team</a>
        </div>
        <div class="about-img">
            <img src="Bilder/us.png" alt="Über uns Bild">
        </div>
    </section>


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
