<?php
function getBaseUrl() {
    // Déterminer le protocole (HTTP ou HTTPS)
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";

    // Récupérer le nom de l'hôte (domaine)
    $host = $_SERVER['HTTP_HOST'];

    // Récupérer le chemin du script
    $script = $_SERVER['SCRIPT_NAME'];

    // Extraire le chemin du répertoire racine
    $path = rtrim(dirname($script), '/\\');

    // Combiner tous les éléments pour obtenir l'URL de base
    $baseUrl = $protocol . $host . $path;

    return $baseUrl;
}
?>

<footer>
    <div class="bande0">
        <div class="newsletter">
            <h4>Newsletter</h4>
            <p>Inscrivez-vous pour recevoir les alertes et actualités de Sadia Travaux</p>
            <form action="#">
                <input type="text" name="newsletter" placeholder="Entrez votre email">
                <i class="fa-solid fa-circle-chevron-right"></i>
            </form>
        </div>
    </div>
    <div class="bande1">
        <div class="bloc">
            <h4>Nous joindre</h4>
            <p>
                <span>20280 Mostaqbal</span>
                <span>Sidi maarouf, Casablanca</span>
            </p>
            <p>
                <span>Email : sadiatravaux@gmail.com</span>
                <span>Téléphone : +221 77 395 76 51</span>
            </p>
            <ul class="social">
                <li>
                    <a href="https://www.facebook.com"><i class="fa-brands fa-facebook-f"></i></a>
                </li>
                <li>
                    <a href="https://www.twitter.com"><i class="fa-brands fa-twitter"></i></a>
                </li>
                <li>
                    <a href="https://www.instagram.com"><i class="fa-brands fa-instagram"></i></a>
                </li>
            </ul>
        </div>
        <div class="bloc">
            <h4>Services</h4>
            <ul>
                <li>
                    <a href="#">Construction</a>
                </li>
                <li>
                    <a href="#">Etude architecturale</a>
                </li>
                <li>
                    <a href="#">Maitrise d'oeuvre</a>
                </li>
                <li>
                    <a href="#">Rénovation</a>
                </li>
                <li>
                    <a href="#">Etude de prix</a>
                </li>
                <li>
                    <a href="#">Vente de biens immobiliers</a>
                </li>

            </ul>
        </div>
        <div class="bloc">
            <h4>L'entreprise</h4>
            <ul>
                <li>
                    <a href="#">Qui sommes nous ?</a>
                </li>
                <li>
                    <a href="#">Notre équipe</a>
                </li>
                <li>
                    <a href="#">Actualités</a>
                </li>
                <li>
                    <a href="#">Références</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
        </div>
        <div class="bloc">
            <p>Le référence des constructeurs au Sénégal.</p>
            <p>Vous avez une question ?<a href="contact.html"><b>clickez ici</b></a></p>
            <img src="../images/logo.png" alt="Logo du site">
        </div>
    </div>
    <div class="bande2">
        <p>Conditions d’utilisation - Politique de confidentialité - Plan du site</p>
        <p>@Copyright 2024 - Sadia Travaux, par <b><a href="https://www.digitasen.com" target="__blank">Digitasen</a></b></p>
    </div>
</footer>