<?php
// Wenn Formular abgeschickt wird
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $message = $_POST['message'] ?? '';

    $data = [
        'name' => $name,
        'email' => $email,
        'phone' => $phone,
        'message' => $message,
        'date' => date("Y-m-d H:i:s")
    ];

    $file = 'messages.json';

    if (!file_exists($file)) {
        file_put_contents($file, json_encode([]));
    }

    $messages = json_decode(file_get_contents($file), true);
    $messages[] = $data;
    file_put_contents($file, json_encode($messages, JSON_PRETTY_PRINT));

    $success = "Danke $name, deine Nachricht wurde gespeichert!";
}
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Kontakt - Zoonergy</title>
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

    <!-- Kontaktbereich -->
    <div class="contact-page">
        <div class="contact-info">
            <img src="Bilder/logo.png" alt="Zoonergy Logo">
            <h3>Zoonergy GmbH</h3>
            <p>
                Favoritenstraße 6<br>
                1010 Wien, Österreich
            </p>
            <p>
                Mail: <a href="mailto:zoonergy-hotline@gmail.com">zoonergy-hotline@gmail.com</a><br>
                Telefon: +43 660 3242 435
            </p>
        </div>

        <div class="contact-form">
            <h2>JETZT ANFRAGEN!</h2>

            <?php if (!empty($success)): ?>
                <p style="color: green; font-weight: bold;"><?= $success ?></p>
            <?php endif; ?>

            <form method="POST" action="">
                <input type="text" name="name" placeholder="Name" required>
                <div class="form-row">
                    <input type="text" name="phone" placeholder="Telefonnummer">
                    <input type="email" name="email" placeholder="Email" required>
                </div>
                <textarea name="message" rows="5" placeholder="Ihre Nachricht" required></textarea>

                <div class="checkbox">
                    <input type="checkbox" id="privacy" required>
                    <label for="privacy">Ich akzeptiere die <a href="#" id="privacy-link">Datenschutzerklärung</a></label>
                </div>

                <button type="submit" class="btn">Absenden</button>
            </form>
        </div>
    </div>

    <!-- Popup -->
    <div class="popup-overlay" id="popup">
        <div class="popup">
            <h2>Datenschutzerklärung</h2>
            <p>Da würden jetzt die Datenschutzerklärung stehen! :D</p>
            <button onclick="closePopup()">Schließen</button>
        </div>
    </div>

    <script>
        const popup = document.getElementById("popup");
        const privacyLink = document.getElementById("privacy-link");

        privacyLink.addEventListener("click", function(e) {
            e.preventDefault();
            popup.style.display = "flex";
        });

        function closePopup() {
            popup.style.display = "none";
        }
    </script>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-left">
            <img src="Bilder/logo.png" alt="Zoonergy Logo">
            <p>Zoonergy GmbH<br>Favoritenstraße 6<br>1010 Wien, Österreich</p>
            <p>Mail: zoonergy-hotline@gmail.com<br>Phone: +43 660 3242 435</p>
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
                <a href="#"><img src="Bilder/instagram.png" alt="Instagram"></a>
            </div>
        </div>
    </footer>
</body>
</html>
