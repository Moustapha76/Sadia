<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senbuilder | Services</title>
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="../public/dist/css/lightbox.min.css">
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
                <li class="active"><a href="#">Projets</a></li>
                <li><a href="../pages/blog.php">Actualités</a></li>
                <li class="devis"><a href="./pages/contact.php">Devis gratuit</a></li>
            </ul>
            <a href="tel:0773957651" class="tel"><i class="fa-solid fa-phone"></i>+221 77 395 76 51</a>
            <button type="button" title="Ouvrir" class="open"><i class="fa-solid fa-bars"></i></button>
            <nav class="navbar-mobile">
                <button title="Fermer" type="button" class="close"><i class="fa-solid fa-xmark"></i></button>
                <ul class="menu">
                    <li><a href="../index.php">Accueil</a></li>
                    <li><a href="company.php">L'entreprise</a></li>
                    <li><a href="service.php">Services</a></li>
                    <li class="active"><a href="#">Projets</a></li>
                    <li><a href="../pages/blog.php">Actualités</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </div>
        <div class="banner interne">
            <img src="../images/banner/banner-4.jpg" alt="Bandeau">
            <div class="item">
                <h1>Nos projets</h1>
                <div class="btn-group">
                    <a href="#" role="button" class="btn">Contactez-nous <i class="fa-solid fa-phone-flip"></i></a>
                    <a href="#" role="button" class="btn">Nos services <i class="fa-solid fa-arrow-right-long"></i></a>
                </div>
            </div>
        </div>
    </header>
    <main>
      <section id="project">
        <h2>Nos réalisations</h2>
        <div class="gallery-list">
            <div class="filter">
                <div class="checkbox">
                    <label class="filterChecked"><input type="radio" name='check' rel="gallery" onchange="changeGalery()" checked />Tous</label>
                </div>
                <div class="checkbox">
                    <label><input type="radio" name='check' rel="gallery-1" onchange="changeGalery()" />Construction</label>
                </div>
                <div class="checkbox">
                    <label><input type="radio" name='check' rel="gallery-2" onchange="changeGalery()"/>Design intérieur</label>
                </div>
                <div class="checkbox">
                    <label><input type="radio" name='check' rel="gallery-3" onchange="changeGalery()"/>Plan architectural </label>
                </div>
                <div class="checkbox">
                    <label><input type="radio" name='check' rel="gallery-4" onchange="changeGalery()"/>Rénovation</label>
                </div>
            </div>
        </div>
        <div class="project">
            <div class="result">
                <a class="example-image-link gallery gallery-1" href="../images/gallery/construction/1.webp" data-lightbox="example-set" data-title=""><img class="example-image" src="../images/gallery/construction/1.webp" alt=""/></a>
                <a class="example-image-link gallery gallery-1" href="../images/gallery/construction/2.webp" data-lightbox="example-set" data-title=""><img class="example-image" src="../images/gallery/construction/2.webp" alt="" /></a>
                <a class="example-image-link gallery gallery-1" href="../images/gallery/construction/3.webp" data-lightbox="example-set" data-title=""><img class="example-image" src="../images/gallery/construction/3.webp" alt="" /></a>
                <a class="example-image-link gallery gallery-1" href="../images/gallery/construction/4.webp" data-lightbox="example-set" data-title=""><img class="example-image" src="../images/gallery/construction/4.webp" alt="" /></a>
                <a class="example-image-link gallery gallery-1" href="../images/gallery/construction/5.webp" data-lightbox="example-set" data-title=""><img class="example-image" src="../images/gallery/construction/5.webp" alt="" /></a>
                <a class="example-image-link gallery gallery-1" href="../images/gallery/construction/6.webp" data-lightbox="example-set" data-title=""><img class="example-image" src="../images/gallery/construction/6.webp" alt="" /></a>
                <a class="example-image-link gallery gallery-1" href="../images/gallery/construction/7.webp" data-lightbox="example-set" data-title=""><img class="example-image" src="../images/gallery/construction/7.webp" alt="" /></a>
                <a class="example-image-link gallery gallery-1" href="../images/gallery/construction/8.webp" data-lightbox="example-set" data-title=""><img class="example-image" src="../images/gallery/construction/8.webp" alt="" /></a>
                
                
                <a class="example-image-link gallery gallery-2" href="../images/gallery/design-interieur/1.webp" data-lightbox="example-set" data-title=""><img class="example-image" src="../images/gallery/design-interieur/1.webp" alt="" /></a>
                <a class="example-image-link gallery gallery-2" href="../images/gallery/design-interieur/2.webp" data-lightbox="example-set" data-title=""><img class="example-image" src="../images/gallery/design-interieur/2.webp" alt="" /></a>
                <a class="example-image-link gallery gallery-2" href="../images/gallery/design-interieur/3.webp" data-lightbox="example-set" data-title=""><img class="example-image" src="../images/gallery/design-interieur/3.webp" alt="" /></a>
                <a class="example-image-link gallery gallery-2" href="../images/gallery/design-interieur/4.webp" data-lightbox="example-set" data-title=""><img class="example-image" src="../images/gallery/design-interieur/4.webp" alt="" /></a>
                <a class="example-image-link gallery gallery-2" href="../images/gallery/design-interieur/5.webp" data-lightbox="example-set" data-title=""><img class="example-image" src="../images/gallery/design-interieur/5.webp" alt="" /></a>
                <a class="example-image-link gallery gallery-2" href="../images/gallery/design-interieur/6.webp" data-lightbox="example-set" data-title=""><img class="example-image" src="../images/gallery/design-interieur/6.webp" alt="" /></a>
                <a class="example-image-link gallery gallery-2" href="../images/gallery/design-interieur/7.webp" data-lightbox="example-set" data-title=""><img class="example-image" src="../images/gallery/design-interieur/7.webp" alt="" /></a>
                <a class="example-image-link gallery gallery-2" href="../images/gallery/design-interieur/8.webp" data-lightbox="example-set" data-title=""><img class="example-image" src="../images/gallery/design-interieur/8.webp" alt="" /></a>
                <a class="example-image-link gallery gallery-2" href="../images/gallery/design-interieur/9.webp" data-lightbox="example-set" data-title=""><img class="example-image" src="../images/gallery/design-interieur/9.webp" alt="" /></a>
                <a class="example-image-link gallery gallery-2" href="../images/gallery/design-interieur/10.webp" data-lightbox="example-set" data-title=""><img class="example-image" src="../images/gallery/design-interieur/10.webp" alt="" /></a>
                <a class="example-image-link gallery gallery-2" href="../images/gallery/design-interieur/11.webp" data-lightbox="example-set" data-title=""><img class="example-image" src="../images/gallery/design-interieur/11.webp" alt="" /></a>
                <a class="example-image-link gallery gallery-2" href="../images/gallery/design-interieur/12.webp" data-lightbox="example-set" data-title=""><img class="example-image" src="../images/gallery/design-interieur/12.webp" alt="" /></a>
                <a class="example-image-link gallery gallery-2" href="../images/gallery/design-interieur/13.webp" data-lightbox="example-set" data-title=""><img class="example-image" src="../images/gallery/design-interieur/13.webp" alt="" /></a>
                <a class="example-image-link gallery gallery-2" href="../images/gallery/design-interieur/14.webp" data-lightbox="example-set" data-title=""><img class="example-image" src="../images/gallery/design-interieur/14.webp" alt="" /></a>
                <a class="example-image-link gallery gallery-2" href="../images/gallery/design-interieur/15.webp" data-lightbox="example-set" data-title=""><img class="example-image" src="../images/gallery/design-interieur/15.webp" alt="" /></a>
                
                <a class="example-image-link gallery gallery-3" href="../images/gallery/plan-architectural/1.webp" data-lightbox="example-set" data-title=""><img class="example-image" src="../images/gallery/plan-architectural/1.webp" alt="" /></a>
                
                <a class="example-image-link gallery gallery-4" href="../images/gallery/renovation/1.webp" data-lightbox="example-set" data-title=""><img class="example-image" src="../images/gallery/renovation/1.webp" alt="" /></a>
                <a class="example-image-link gallery gallery-4" href="../images/gallery/renovation/2.webp" data-lightbox="example-set" data-title=""><img class="example-image" src="../images/gallery/renovation/2.webp" alt="" /></a>
                <a class="example-image-link gallery gallery-4" href="../images/gallery/renovation/3.webp" data-lightbox="example-set" data-title=""><img class="example-image" src="../images/gallery/renovation/3.webp" alt="" /></a>
                <a class="example-image-link gallery gallery-4" href="../images/gallery/renovation/4.webp" data-lightbox="example-set" data-title=""><img class="example-image" src="../images/gallery/renovation/4.webp" alt="" /></a>
                <a class="example-image-link gallery gallery-4" href="../images/gallery/renovation/5.webp" data-lightbox="example-set" data-title=""><img class="example-image" src="../images/gallery/renovation/5.webp" alt="" /></a>
                <a class="example-image-link gallery gallery-4" href="../images/gallery/renovation/6.webp" data-lightbox="example-set" data-title=""><img class="example-image" src="../images/gallery/renovation/6.webp" alt="" /></a>
                <a class="example-image-link gallery gallery-4" href="../images/gallery/renovation/7.webp" data-lightbox="example-set" data-title=""><img class="example-image" src="../images/gallery/renovation/7.webp" alt="" /></a>
                <a class="example-image-link gallery gallery-4" href="../images/gallery/renovation/8.webp" data-lightbox="example-set" data-title=""><img class="example-image" src="../images/gallery/renovation/8.webp" alt="" /></a>
                <a class="example-image-link gallery gallery-4" href="../images/gallery/renovation/9.webp" data-lightbox="example-set" data-title=""><img class="example-image" src="../images/gallery/renovation/9.webp" alt="" /></a>
                <a class="example-image-link gallery gallery-4" href="../images/gallery/renovation/10.webp" data-lightbox="example-set" data-title=""><img class="example-image" src="../images/gallery/renovation/10.webp" alt="" /></a>
                <a class="example-image-link gallery gallery-4" href="../images/gallery/renovation/11.webp" data-lightbox="example-set" data-title=""><img class="example-image" src="../images/gallery/renovation/11.webp" alt="" /></a>
                <a class="example-image-link gallery gallery-4" href="../images/gallery/renovation/12.webp" data-lightbox="example-set" data-title=""><img class="example-image" src="../images/gallery/renovation/12.webp" alt="" /></a>
                
            </div>
        </div>
      </section>
    </main>
    <?php include '../includes/footer.php'; ?>
    <script src="../public/dist/js/lightbox-plus-jquery.min.js"></script>
    <script src="../public/js/script.js"></script>
    </script>
</body>
</html>
