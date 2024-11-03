<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senbuilder - Actualités</title>
    <link rel="stylesheet" href="./public/style.css">
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
</head>
<body>
    <header class="service">
        <div class="rail"></div>
        <div class="navbar">
            <a href="#" class="logo"><img src="../images/logo.png" alt="logo"></a>
            <ul class="menu-list">
                <li><a href="../index.php">Accueil</a></li>
                <li><a href="company.php">L'entreprise</a></li>
                <li><a href="service.php">Services</a></li>
                <li><a href="projects.php">Projets</a></li>
                <li class="active"><a href="../blog/index.php">Actualités</a></li>
                <li class="devis"><a href="./pages/contact.php">Devis gratuit</a></li>

            </ul>
            <a href="tel:0221773957651" class="tel"><i class="fa-solid fa-phone"></i>+221 77 395 76 51</a>
            <button type="button" title="Ouvrir" class="open"><i class="fa-solid fa-bars"></i></button>
            <nav class="navbar-mobile">
                <button title="Fermer" type="button" class="close"><i class="fa-solid fa-xmark"></i></button>
                <ul class="menu">
                    <li><a href="../index.php">Accueil</a></li>
                    <li><a href="company.php">L'entreprise</a></li>
                    <li><a href="service.php">Services</a></li>
                    <li><a href="projects.php">Projets</a></li>
                    <li class="active"><a href="#">Actualités</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </div>
        <div class="banner interne">
            <img src="../images/banner/banner-4.jpg" alt="Bandeau">
            <div class="item">
                <h1>Actualités</h1>
                <span></span>
                <div class="btn-group">
                    <a href="#" role="button" class="btn">Contactez-nous <i class="fa-solid fa-phone-flip"></i></a>
                    <a href="#" role="button" class="btn">Nos services <i class="fa-solid fa-arrow-right-long"></i></a>
                </div>
            </div>
        </div>
    </header>
    <main>
        <section class="articleview">
            <?php include "./ArticleView.php"; ?>
        </section>
    </main>
    <?php include '../includes/footer.php'; ?>
    <script src="../public/js/script.js"></script>
</body>
</html>
