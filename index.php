<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
   <link rel="stylesheet" href="css/test.css">
   <link rel="stylesheet" href="login.php">
   <link rel="stylesheet" href="register.php">
   <link rel="stylesheet" href="logout.php">
   <link rel="stylesheet" href="img">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lalezar&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
</head>
<body>
<div class="header">
    <div class="logo">SKY FLIGHTS</div>
        <div class="header-row">
            <div class="home-button">
                <div class="home-button-text"><a>HOME</a></div>
            </div>
        <div class="row1">
            <div class="logout-button">
                <div class="logout-button-text">
                    <a href="pages/logout.php">LOGOUT</a></div>
            </div>
            <div class="login-button">
                <div class="login-button-text">
                <a href="pages/login.php">LOGIN
                </div>
            </div>
            <div class="register-button">
                <div class="register-button-text">
                    <a href="pages/register.php">REGISTER HERE</a></div>
            </div>
        </div>
    </div>
</div>

<div class="info-page">
    <div class="row2">
        <div class="tabel1">
        <form action='vakantie.php'  name='vakantie_logic' method="POST">
            <div class="label_reisgezelschap">
                <label>Reisgezelschap: </label>
            </div>
            <div class="input_reisgezelschap">
                <input type="number" name="reisgezelschap" placeholder="Aantal personen" required>
            </div>
            <div class="label_bestemming">
                <label>Bestemming: </label>
            </div>
            <div class="input_bestemming">
            <input type="text" name="bestemming" placeholder="Kies een land" required>
            </div>
            <div class="label_datum">
            <label>Vertrek datum: </label>
            </div>
            <div class="input_vertrekdatum">
            <input type="date" name="datum" placeholder="Kies een datum" required>
            </div>
            <div class="label_terugreis-datum">
            <label>Terugreis datum: </label>
            </div>
            <div class="input_datum">
            <input type="date" name="datum" placeholder="Kies een datum" required>
            </div>
            <div class="label_vervoerstype">
            <label>Vervoerstype: </label>
            </div>
            <div class="input_vervoerstype">
            <input type="text" name="vervoerstype" placeholder="Kies een vervoerstype" required>
            </div>
            <div class="input_login">
            <input type="submit" value="Zoek een vakantie">
            </div>
        </form>
            </div>

<div class="column1">
    <div class="last-minute-deal-text">LAST MINUTE DEAL</div>
        <div class="tabel2">
            <div class="mini-info-text5">BESPAAR t/m €300 korting!</div>
        </div>
    </div>
</div>
</div>
    
<div class="footer">
    <div class="footer-row">
        <div class="row3">
            <div class="copyright">© 2024 SKYFLIGHTS</div>
            <div class="social-icons">
            <div class="socials1"></div>
            <div class="socials2"></div>
            <div class="socials3"></div>
            </div>
        </div>
    </div>
</div>
</body>
</html>