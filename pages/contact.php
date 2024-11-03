<?php
if(isset($_POST['validate'])){
    require_once('../setting.php');
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $msg = $_POST['msg'];
    $industry = $_POST['industry'];
    $lead = $bdd->prepare('INSERT INTO leads (nom, tel, email, interested, msg, jour) VALUES (?, ?, ?, ?, ?, NOW())');
    $lead->execute(array($name, $phone, $email, $industry, $msg));
    header("location: #?success=1");
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senbuilder - Contact</title>
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
                <li><a href="../pages/company.php">L'entreprise</a></li>
                <li><a href="../pages/service.php">Services</a></li>
                <li><a href="../pages/projects.php">Projets</a></li>
                <li><a href="../pages/blog.php">Actualités</a></li>
                <li class="devis"><a href="#">Devis gratuit</a></li>

            </ul>
            <a href="tel:0656716530" class="tel"><i class="fa-solid fa-phone"></i>+221 77 395 76 51</a>
            <button type="button" title="Ouvrir" class="open"><i class="fa-solid fa-bars"></i></button>
            <nav class="navbar-mobile">
                <button title="Fermer" type="button" class="close"><i class="fa-solid fa-xmark"></i></button>
                <ul class="menu">
                    <li><a href="../index.php">Accueil</a></li>
                    <li><a href="../pages/company.php">L'entreprise</a></li>
                    <li><a href="../pages/service.php">Services</a></li>
                    <li><a href="../pages/projects.php">Projets</a></li>
                    <li><a href="../pages/blog.php">Actualités</a></li>
                    <li class="active"><a href="#">Contact</a></li>
                </ul>
            </nav>
        </div>
        <div class="banner interne">
            <img src="../images/banner/banner-4.jpg" alt="Bandeau">
            <div class="item">
                <h1>Contactez-nous</h1>
                <span></span>
                <div class="btn-group">
                    <a href="#" role="button" class="btn">Contactez-nous <i class="fa-solid fa-phone-flip"></i></a>
                    <a href="#" role="button" class="btn">Nos services <i class="fa-solid fa-arrow-right-long"></i></a>
                </div>
            </div>
        </div>
    </header>
    <main>
        <section id="contact-form">
            <form action="#" method="post">
                <h3>Formulaire de contact</h3>
                <div class="input-group">
                    <input type="text" name="name" placeholder="Name">
                    <input type="email" name="email" placeholder="Email">
                </div>
                <div class="input-group">
                    <input type="text" name="phone" placeholder="Phone">
                    <select name="industry" id="industry">
                        <option value="">Service</option>
                        <option value="Construction">Construction</option>
                        <option value="Maitrise d'oeuvre">Maitrise d'oeuvre</option>
                        <option value="Etude de cas">Etude de cas</option>
                        <option value="Batiment">Bâtiment</option>
                        <option value="Autres">Autres</option>
                    </select>
                    <i class="fa-solid fa-chevron-down"></i>
                </div>
                <textarea name="msg" id="" cols="30" rows="5" placeholder="Additional details"></textarea>
                <div class="submit-group">
                    <input type="submit" class="btn" value="Envoyer" name="validate">
                    <!-- Envoyer <i class="fa-solid fa-paper-plane"></i></a> -->
                    <!-- <div class="accept">
                        <input type="checkbox" name="accept" id="accept"><label for="accept">J’accepte la confidentialité et les conditions.</label>
                    </div> -->
                </div>
            </form>
            <div class="map">
                <address>
                <h4>Adresse</h4>
                <p class="adress">Cité Gadaye Billionaire <br> Guédiawaye, Sénégal</p>
                <p class="tel">+221 77 395 76 51</p>
                <h4>Horaires</h4>
                <table>
                    <tbody>
                        <tr><td>Lundi</td><td>09:00 - 17:00</td></tr>
                        <tr><td>Mardi</td><td>09:00 - 17:00</td></tr>
                        <tr><td>Mercredi</td><td>09:00 - 17:00</td></tr>
                        <tr><td>Jeudi</td><td>09:00 - 17:00</td></tr>
                        <tr><td>Vendredi</td><td>09:00 - 17:00</td></tr>
                        <tr><td>Samedi</td><td>Fermé</td></tr>
                        <tr><td>Dimanche</td><td>Fermé</td></tr>
                    </tbody>
                </table>
                </address>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30860.82662242716!2d-17.40162562568358!3d14.79135920000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xec10d5ce05f789d%3A0xf8a57740a44048dd!2sSensys%20Afric!5e0!3m2!1sfr!2sus!4v1716760582596!5m2!1sfr!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>
    </main>
    <?php include '../includes/footer.php'; ?>
    <script src="../public/js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tilt.js/1.0.3/tilt.jquery.min.js" integrity="sha512-14AZ/DxUrlF26z6v7egDkpJHKyJRn/7ue2BgpWZ/fmqrqVzf4PrQnToy99sHmKwzKev/VZ1tjPxusuTV/n8CcQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tilt.js/1.0.3/tilt.jquery.js" integrity="sha512-S2JCciTJc71f1kRG8qFmU1jryXH/mhfYlLvn7XJEwTcD9EJQTRr6gfMtnU6L/nnaodDgbazrmhdCRwbUuiRNQQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tilt.js/1.0.3/tilt.jquery.js.map"></script>
    <script>
        $('.flip-bx').tilt({
            glare: true,
            maxGlare: 1
        })
        $('.tips').tilt({
            glare: true,
            maxGlare: 1
        })
        $('.testimony').tilt({
            glare: true,
            maxGlare: 1
        })
        $('.img-bloc').tilt({
            glare: true,
            maxGlare: 1
        })
    </script>
</body>
</html>
