<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER</title>
   <link rel="stylesheet" href="../css/test.css">
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
                <div class="home-button-text"><a href = "../index.php">HOME<a></div>
            </div>       
        </div>
    </div>
</div>       
<div class="loggin_block2">
    <div class="loggin_2block2">
        <h1> Register </h1>
        <div class="register-form">
                        <form class="form-extra" action='register_logic.php' name='register_logic' method="post">
                        <label class="coloring"> Username: </label>  
                        <input class="username-log" type="text" name="username" placeholder="Username" required>
                        <label class="coloring"> Password: </label>  
                        <input class="password-log" type="password" name="password" placeholder="Password" required>
                        <label class="coloring"> email: </label>  
                        <input class="type-log-workout2" type="email" name="email" placeholder="email" required>
                        <input class="button-log" type="submit" value="Login">
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