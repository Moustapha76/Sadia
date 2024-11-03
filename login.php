<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/blog.css">
    <title>Sadia - Login</title>
</head>
<body>
    <div class="form-container">
        <div class="img"><img src="./public/img/login.jpg" alt="Login"></div>
        <div class="form">
            <form action="confirm.php" id="login">
                <!-- <img src="../../images/logo.png" alt="logo du site"> -->
                <h3>Bienvenu dans votre espace admin</h3>
                <p>Veuillez s'il vous plait entrer vos identifiants pour vous connecter.</p>
                <!-- <label for="username">Login</label> -->
                <input type="text" placeholder="Votre login">
                <!-- <label for="pwd">Mot de passe</label> -->
                <input type="password" placeholder="Votre mot de passe">
                <input type="submit" value="Se connecter">
            </form>
        </div>
    </div>
</body>
</html>