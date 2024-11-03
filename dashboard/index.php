<?php 
// require_once('../setting.php');
try {
    $bdd = new PDO('mysql:host=localhost;dbname=ds1', 'root', '');
} catch (Exception $e) {
    die("Erreur lors de la connexion à la base de donnée " . $e->getMessage());
}
// leads
if(isset($_GET['deleteID']) && !empty($_GET['deleteID'])){
    $deleteID = $_GET['deleteID'];
    $del = $bdd->prepare('DELETE FROM leads WHERE id = ?');
    $del->execute(array($deleteID)); 
}
$req = $bdd->query('SELECT * FROM leads');
$leads = $req->fetchAll();
$nbrleads = $req->rowCount();
if($nbrleads<10) $nbrleads = '0'.$nbrleads;
else $nbrleads = $nbrleads;

// users
$datas = $bdd->query('SELECT * FROM users');
$users = $datas->fetchAll();
$user = $users[0];
// user infos
$user_name = $user['username'];
$user_tel = $user['tel'];
$user_email = $user['email'];
$user_pwd = $user['pwd'];
$user_adress = $user['adress'];

// Textcontent
$textContent = $bdd->query('SELECT * FROM textContent');
$pages = $textContent->fetchAll();
$home = $pages[0];
$presentation = $pages[1];
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sadia - Admin</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <script src="./public/js/jquery-2.2.1.min.js"></script>
    <!-- <script src="./public/js/materialize.min.js"></script> -->
    <script src="./public/js/pagination.js"></script>
    <!-- tableau des leads -->

      <!-- Editeur -->
      <script src="https://cdn.tiny.cloud/1/5ld0qnfhpkpso3i5ls4n3czm1jk2fhiv80gm4o6feeuh14ku/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
    

    <!-- style général -->
    <link rel="stylesheet" href="./public/css/style.css">

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        <div class="main-container">
            <header>
                <nav>
                    <a class="navbar-brand" href="#"><img width="100px" src="./assets/logo.webp" class="logo" alt="Logo du site"></a>
                </nav>
                <div class="btn-head">
                    <a href="../index.php" class="btn"><i class="fa-solid fa-eye"></i> Visiter mon site</a>    
                    <a href="#" class="btn">Déconnexion <i class="fa-solid fa-right-from-bracket"></i></a>    
                </div>
            </header>
            <aside class="filter">
                <strong>Outils</strong>
                <span role="separator" class="divider"></span>
                <div class="checkbox"><label class="filterChecked"><input type="radio" name='check' rel="item-1" onchange="change()" checked/>Leads</label></div>
                <div class="checkbox"><label class="filterChecked"><input type="radio" name='check' rel="item-2" onchange="change()"/>Statistiques</label></div>
                <div class="checkbox"><label class="filterChecked"><input type="radio" name='check' rel="item-3" onchange="change()"/>Paramètres</label></div>
                <strong>Pages</strong>
                <span role="separator" class="divider"></span>
                <div class="checkbox"><label class="filterChecked"><input type="radio" name='check' rel="item-4" onchange="change()"/>Accueil</label></div>
                <div class="checkbox"><label class="filterChecked"><input type="radio" name='check' rel="item-5" onchange="change()"/>Qui sommes-nous ?</label></div>
                <div class="checkbox"><label class="filterChecked"><input type="radio" name='check' rel="item-6" onchange="change()"/>Services</label></div>
                <div class="checkbox"><label class="filterChecked"><input type="radio" name='check' rel="item-7" onchange="change()"/>Galerie</label></div>
                <div class="checkbox"><label class="filterChecked"><input type="radio" name='check' rel="item-8" onchange="change()"/>Actualités</label></div>
                <div class="checkbox"><label class="filterChecked"><input type="radio" name='check' rel="item-9" onchange="change()"/>Contact</label></div>
                <strong>Autres</strong>
                <span role="separator" class="divider"></span>
                <div class="checkbox"><label class="filterChecked"><input type="radio" name='check' rel="item-10" onchange="change()"/>FAQ</label></div>
                <div class="checkbox"><label class="filterChecked"><input type="radio" name='check' rel="item-11" onchange="change()"/>Politique de confidentialité</label></div>
            </aside>
            <main>
                <div class="content">
                    <div class="result">
                        <div class="bloc-item item-1">
                            <div class="stats">
                                <div class="item">
                                    <i class="fa-regular fa-eye"></i>
                                    <span class="num">120</span>
                                    <span class="inf">Visiteurs/mois</span>
                                </div>
                                <div class="item">
                                    <i class="fa-regular fa-envelope"></i>
                                    <span class="num"><?= $nbrleads ?></span>
                                    <span class="inf">Leads reçus</span>
                                </div>
                                <div class="item">
                                    <i class="fa-regular fa-building"></i>
                                    <span class="num">100</span>
                                    <span class="inf">Projets réalisés</span>
                                </div>
                                <div class="item">
                                    <i class="fa-regular fa-face-smile"></i>
                                    <span class="num">300</span>
                                    <span class="inf">Clients satisfaits</span>
                                </div>
                            </div>
                            <div id="leads">
                                <div class="showmsg">
                                    <h2>Bienvenu dans votre gestionnaire de leads</h2>
                                    <p>Vous pouvez gérer tout vos leads et contacts dans cet endroit.</p>
                                    <p>Pour toute question ou demande, n'hésitez pas à cliquer sur le bouton ci-dessous.</p>
                                    <a href="#" class="btn">Service client</a>
                                </div>
                                <div class="row-lead">
                                    <!-- <input type="text" id="search" placeholder="Cliquez pour rechercher..." /> -->
                                    <table cellpadding="1" cellspacing="1" class="table" id="myTable">
                                        <thead>
                                            <tr>
                                                <th>Nom</th>
                                                <th>Téléphone</th>
                                                <th>Email</th>
                                                <th>Date</th>
                                                <th>Interessé par</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($leads as $lead) { ?>
                                            <tr>
                                                <td><?= $lead['nom'] ?></td>
                                                <td><?= $lead['tel'] ?></td>
                                                <td><?= $lead['email'] ?></td>
                                                <td><?= $lead['jour'] ?></td>
                                                <td><?= $lead['interested'] ?></td>
                                                <td class="details">
                                                    <a href="#" id="seemore" class="seemore">
                                                    <!-- <span>Voir le lead</span> -->
                                                    <i class="fa-solid fa-eye"></i>
                                                    <ul class="hidden">
                                                        <li><?= $lead['nom'] ?></li>
                                                        <li><?= $lead['tel'] ?></li>
                                                        <li><?= $lead['email'] ?></li>
                                                        <li><?= $lead['interested'] ?></li>
                                                        <li><?= $lead['msg'] ?></li>
                                                        <li><?= $lead['jour'] ?></li>
                                                    </ul>    
                                                    </a>
                                                    <a href="?deleteID=<?= $lead['id'] ?>" class="delete"><i class="fa-solid fa-trash-can"></i></a>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                    <div class="col-md-12">
                                        <span class="left" id="total_reg"></span>
                                        <ul class="pagination pager" id="myPager"></ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bloc-item item-2"></div>
                        <div class="bloc-item item-3">
                            <span class="title">Mon compte</span>
                            <div class="page">
                                <div class="jumbtron">
                                    <div class="img"><img src="./assets/profile.JPG" alt="profile"></div>
                                    <div class="infos">
                                         <span class="name">Mouhamadou Moustapha DIOUF</span>
                                         <span class="role">Web Developer</span>
                                         <span class="online">En ligne</span>
                                    </div>
                                 </div>
                                 <div class="setting-options">
                                     <div class="row">
                                         <label for="profil" class="active">Mon profil</label>
                                         <label for="securite">Sécurité</label>
                                     </div>
                                     <div class="bloc-infos">
                                         <div id="profil">
                                            <h2>Informations personnelles <a href="#">Modifier</a></h2>
                                            <div class="grid-items">
                                                <div class="input-group">
                                                    <label for="nom">Nom</label>
                                                    <input type="text" name="nom" placeholder="<?= $user_name ?>">
                                                </div>
                                                <div class="input-group">
                                                    <label for="nom">Téléphone</label>
                                                    <input type="text" name="telephone" placeholder="<?= $user_tel ?>">
                                                </div>
                                            </div>
                                            <div class="grid-items">
                                                <div class="input-group">
                                                    <label for="nom">Email</label>
                                                    <input type="text" name="email" placeholder="<?= $user_email ?>">
                                                </div>
                                                <div class="input-group">
                                                    <label for="nom">Adresse</label>
                                                    <input type="text" name="adress" placeholder="<?= $user_adress ?>">
                                                </div>
                                            </div>
                                            <input type="submit" value="Valider" id="btn-update">
                                         </div>
                                         <div id="securite">
                                            <h2>Sécurité</h2>
                                            <div class="grid-items">
                                                <div class="input-group">
                                                    <label for="nom">Login</label>
                                                    <input type="text" name="login" placeholder="<?= $user_name ?>">   
                                                </div>
                                                <div class="input-group">
                                                    <label for="nom">Mot de passe</label>
                                                    <input type="password" name="mdp" placeholder="<?= $user_pwd ?>">
                                                </div>
                                            </div>
                                         </div>
                                     </div>
                                 </div>
                            </div>
                        </div>
                        <div class="bloc-item item-4">
                            <span class="title"><?= $home['page'] ?></span>
                            <div class="page">
                                <form action="#" id="accueil">
                                    <div class="input-group">
                                        <label for="title1">Titre de la page</label>
                                        <input type="text" id="title1" name="title1" value="<?= $home['title'] ?>">
                                    </div>
                                    <div class="input-group">
                                        <label for="subtitle1">Sous-titre de la page</label>
                                        <input type="text" id="subtitle1" value="<?= $home['subtitle'] ?>">
                                    </div>
                                    <div class="input-group">
                                        <label for="premiumskinsandicons-fluent">Contenu</label>
                                        <div class="my-custom-editor-container">
                                            <textarea id="premiumskinsandicons-fluent"><?= $home['contenu'] ?></textarea>
                                        </div>
                                    </div>
                                    <input type="submit" class="btn" value="Valider">
                                </form>
                                <div class="showmsg">
                                    <h2>Le saviez-vous ?</h2>
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis sint sunt quod fugit at illo. Nostrum itaque qui neque exercitationem aliquam totam eligendi repellendus cupiditate temporibus, reiciendis adipisci maiores culpa!</p>
                                </div>
                            </div>
                        </div>
                        <div class="bloc-item item-5">
                            <span class="title"><?= $presentation['page'] ?></span>
                            <div class="page">
                                <form action="#" id="qsn">
                                    <div class="input-group">
                                        <label for="title2">Titre de la page</label>
                                        <input type="text" id="title2" name="title2" value="<?= $presentation['title'] ?>">
                                    </div>
                                    <div class="input-group">
                                        <label for="subtitle2">Sous-titre de la page</label>
                                        <input type="text" id="subtitle2" value="<?= $presentation['subtitle'] ?>">
                                    </div>
                                    <div class="input-group">
                                        <label for="premiumskinsandicons-fluent2">Contenu</label>
                                        <div class="my-custom-editor-container">
                                            <textarea id="premiumskinsandicons-fluent2"><?= $presentation['contenu'] ?></textarea>
                                        </div>
                                    </div>
                                    <input type="submit" class="btn" id="ok2" value="Valider">
                                </form>
                                <div class="showmsg">
                                    <h2>Le saviez-vous ?</h2>
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis sint sunt quod fugit at illo. Nostrum itaque qui neque exercitationem aliquam totam eligendi repellendus cupiditate temporibus, reiciendis adipisci maiores culpa!</p>
                                </div>
                            </div>
                        </div>
                        <div class="bloc-item item-6">
                            
                        </div>
                        <div class="bloc-item item-7"></div>
                        <div class="bloc-item item-8">
                            <span class="title">Actualités</span>
                            <div class="page">
                                <div class="panel">
                                    <span class="active">Actualités</span>
                                    <span>Rédiger une actualité</span>
                                    <span>Commentaires</span>
                                </div>
                                <h2>Liste des Actualités</h2>
                                <div class="row-lead">
                                    <!-- <input type="text" id="search" placeholder="Cliquez pour rechercher..." /> -->
                                    <table cellpadding="1" cellspacing="1" class="table" id="myTable">
                                        <thead>
                                            <tr>
                                                <th>Titre</th>
                                                <th>Auteur</th>
                                                <th>Date de publication</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Mise en ligne de notre nouveau site internet</td>
                                                <td>Laurent</td>
                                                <td>04 - 01 - 2024</td>
                                                <td class="details">
                                                    <a href="#" class="seemore"><i class="fa-solid fa-eye"></i></a>
                                                    <a href="#" class="delete"><i class="fa-solid fa-trash-can"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>L'importance d'avoir un site internet pour son entreprise</td>
                                                <td>Admin</td>
                                                <td>20 - 06 - 2024</td>
                                                <td class="details">
                                                    <a href="#" class="seemore"><i class="fa-solid fa-eye"></i></a>
                                                    <a href="#" class="delete"><i class="fa-solid fa-trash-can"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Comment acquérir plus de prospects</td>
                                                <td>Alphonse</td>
                                                <td>20 - 10 - 2024</td>
                                                <td class="details">
                                                    <a href="#" class="seemore"><i class="fa-solid fa-eye"></i></a>
                                                    <a href="#" class="delete"><i class="fa-solid fa-trash-can"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="col-md-12">
                                        <span class="left" id="total_reg"></span>
                                        <ul class="pagination pager" id="myPager"></ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bloc-item item-9"></div>
                        <div class="bloc-item item-10">
                            <h2>Questions fréquemment posées</h2>
                            <div class="text-content">
                                <div class="container">
                                    <div class="accordion">
                                        <div class="accordion-left">
                                            <div class="accordion-item">
                                                <button id="accordion-button-1" aria-expanded="false"><span class="accordion-title"></span><span class="icon" aria-hidden="true"></span></button>
                                                <div class="accordion-content">
                                                    <p></p>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <button id="accordion-button-2" aria-expanded="false"><span class="accordion-title"></span><span class="icon" aria-hidden="true"></span></button>
                                                <div class="accordion-content">
                                                    <p></p>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <button id="accordion-button-3" aria-expanded="false"><span class="accordion-title"></span><span class="icon" aria-hidden="true"></span></button>
                                                <div class="accordion-content">
                                                    <p></p>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <button id="accordion-button-4" aria-expanded="false"><span class="accordion-title"></span><span class="icon" aria-hidden="true"></span></button>
                                                <div class="accordion-content">
                                                    <p></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bloc-item item-11">
                            <span class="title">Politique de confidentialité</span>
                            <div class="content">
                                <div class="copyright"> 
                                    <h3>1. Objet de cette politique de confidentialité</h3>
                                    <p>Cette déclaration de confidentialité concerne uniquement les traitements des données à caractère personnel des visiteurs du site internet www.lafabrique-automobile35.fr. Elle ne couvre pas les activités de traitement effectuées par LA FABRIQUE AUTOMOBILE en dehors du présent site internet.</p>
                                    <p>Le site contient des liens hypertextes qui vous permettent d’accéder à d’autres sites internet. Les informations fournies ci-après ne concernent pas les traitements de données à caractère personnel et cookies qui peuvent être mis en œuvre sur ces sites internet, quel qu’en soit l’éditeur. Nous vous invitons à vous reporter aux mentions sur la confidentialité sur chaque site que vous visitez afin de prendre connaissance des conditions de traitement qui y sont applicables.</p>
                                    <p>La navigation sur le site www.lafabrique-automobile35.fr entraîne le traitement de données à caractère personnel de l’utilisateur du site internet :</p>
                                    <ul>
                                    <li>D’une part, en fonction des moyens utilisés pour accéder au site et des paramètres du navigateur, la seule navigation sur le site peut entraîner le traitement de données à caractère personnel vous concernant via la journalisation des accès, ainsi que les cookies utilisés sur le site.</li>
                                    <li>D’autre part, si vous entrez en relation avec nous grâce aux fonctionnalités présentes sur le site à cette fin, notamment le formulaire de contact, nous traiterons les données à caractère personnel que vous nous aurez communiquées à cette occasion.<br>Sauf mention expresse contraire, nous sommes responsables du traitement pour les différentes activités de traitement de données à caractère personnel décrites ci-après. Dans certains cas, nous partageons le rôle de responsable de traitement avec un autre organisme. La liste à jour des responsables de traitement peut être consultée <a href="https://www.futurdigital.fr/sites/futurdigital.fr/files/docs/responsables-traitement-client.pdf" target="_blank" rel="noopener">ici</a>.</li>
                                    </ul>
                                    <h3>2. Journalisation des accès au serveur</h3>
                                    <p>Lorsque vous visitez notre site, votre navigateur internet effectue des demandes aux serveurs sur lesquels le site est hébergé, afin de vous permettre de recevoir le contenu du site internet sur votre dispositif. Ces demandes sont journalisées par le serveur. Dans ce cadre, l’adresse IP de votre dispositif ainsi que certaines de ses caractéristiques, notamment le navigateur utilisé, seront consignées au sein du journal. Notre prestataire pour l’hébergement du site, la société Futur Digital, ainsi que ses sous-traitants, traitent ces données pour notre compte à la seule fin de protéger le site contre des accès frauduleux. La base légale de ce traitement est l’intérêt légitime que nous avons à garantir la sécurité de notre site.<br>Ces données sont conservées pendant une durée de 1 an.</p>
                                    <h3>3. Cookies</h3>
                                    <h4>3.1. Que sont les cookies ?</h4>
                                    <p>La navigation sur le site peut entraîner le stockage de cookies sur votre dispositif (ordinateur, tablette, smartphone, etc.). Un cookie est un fichier textuel de petite taille permettant de conserver des informations issues de votre navigation sur le site internet, qui seront réutilisées lors d’une consultation ultérieure du site. <br>Par exemple, un cookie sauvegarde votre préférence quant à la langue du site internet et communique cette information au site lors de toute connexion ultérieure à celui-ci, assurant que la version dans la langue de votre choix s’affiche.</p>
                                    <h4>3.2. Comment exercer vos choix sur les cookies ?</h4>
                                    <p>Afin d’exercer vos choix en matière de cookies, vous disposez d’une interface dédiée, accessible depuis les différentes pages du site internet à travers le lien « Gérer mes cookies » en bas de page.<br>Les cookies utilisés sur ce site sont répertoriés ci-après.</p>
                                    <h4>3.3. Cookies fonctionnels :</h4>
                                    <p>Tout d’abord, nous utilisons des cookies ayant pour finalité d’assurer le bon fonctionnement du site internet et de permettre l’enregistrement de vos préférences de navigation.</p>
                                    <ul>
                                    <li>Identifiant de session : Utilisé pour l’authentification des utilisateurs autorisés.<br>Durée du cookie : celle de la session de navigation</li>
                                    <li>Catalogue : Utilisé pour sauvegarder les produits ajoutés à la liste de souhaits.<br>Durée du cookie : 1 an</li>
                                    <li>Langue : Utilisé pour sauvegarder la langue dans laquelle vous souhaitez que le site s’affiche.<br>Durée du cookie : celle de la session de navigation.</li>
                                    <li>Bannière d’annuaire : Utilisé pour afficher le lien vers notre page sur l’annuaire Youfindme.<br>Durée du cookie : 1 an.</li>
                                    <li>Gestion des cookies : Utilisé pour conserver vos préférences en matière de cookies.<br>Durée du cookie : 6 mois.</li>
                                    <li>Dispositif anti-spam : Le service reCAPTCHA de Google nous permet de lutter contre l’usage abusif du formulaire de contact intégré à notre site, en distinguant les utilisateurs humains des robots spammeurs. La mise en œuvre de cette protection implique le dépôt et la lecture de cookies par Google. Google est susceptible de transférer les données à caractère personnel concernées vers les Etats-Unis et de les traiter à ses propres finalités, notamment pour l’amélioration de ses produits. Vous pouvez consulter la politique de confidentialité de Google derrière le lien suivant : <a href="https://www.google.com/intl/fr/policies/privacy/" target="_blank" rel="nofollow noopener">https://www.google.com/intl/fr/policies/privacy/</a> et demander communication des clauses contractuelles type de la Commission européenne encadrant le transfert de vos données ici : <a href="https://support.google.com/policies/contact/general_privacy_form" target="_blank" rel="nofollow noopener">https://support.google.com/policies/contact/general_privacy_form</a></li>
                                    </ul>
                                    <p>Ces différents cookies fonctionnels, conformément à la loi Informatique et libertés et aux recommandations de la CNIL, sont exemptés du recueil de votre consentement et automatiquement activés, sans possibilité de les désactiver depuis notre interface de gestion des cookies.</p>
                                    <p>Si vous faites le choix de bloquer ou désactiver ces cookies au niveau de votre navigateur internet ou dispositif, certaines parties du site et de ses sous-domaines pourraient être inaccessibles ou leur fonctionnement pourrait être affecté.</p>
                                    <h4>3.4. Cookies optionnels :</h4>
                                    <p>Les traceurs énumérés dans la liste suivante peuvent être activés ou désactivés par l’intermédiaire de l’interface de gestion des cookies. Si vous désactivez ces cookies, les fonctionnalités correspondantes seront alors inaccessibles. Vous pouvez modifier votre choix à tout moment.</p>
                                    <p class="texte"><strong>Statistiques de visite :</strong></p>
                                    <p>Nous utilisons des cookies pour effectuer des mesures d’audience sur notre site internet, afin de déterminer quelles pages sont visitées. Ceci nous permet de détecter d’éventuels dysfonctionnements et d’optimiser la visibilité de notre site.<br>Des données vous concernant sont donc traitées afin de compiler des statistiques anonymes. Ces données ne sont reliées à aucun moment dans le cadre de ce traitement à votre nom ou à d’autres informations à votre sujet nous permettant de vous identifier. <br>Durée des cookies : Durée de la session, durée de 13 mois.</p>
                                    <p class="texte"><strong>Services Google :</strong></p>
                                    <ul>
                                    <li><span style="text-decoration: underline;">Google Analytics</span><br>Nous utilisons Google Analytics afin de disposer de statistiques détaillées sur les visites effectuées sur notre site internet, et notamment de savoir depuis quelle page internet nos visiteurs ont accédé à notre site.</li>
                                    <li><span style="text-decoration: underline;">Google Ads</span><br>Nous utilisons Google Ads afin de promouvoir notre site internet sur le moteur de recherche Google.</li>
                                    <li><span style="text-decoration: underline;">Google Maps</span><br>Nous utilisons Google Maps afin d’afficher sur notre site internet une carte montrant la position de nos locaux.</li>
                                    <li><span style="text-decoration: underline;">Google Fonts</span><br>Nous utilisons Google Fonts afin de permettre l’affichage uniforme de polices de caractères originales sur les dispositifs de tous les visiteurs de notre site.<br>La mise en œuvre des services fournis par Google implique le dépôt et la lecture de cookies par celle-ci. Google est susceptible de transférer les données à caractère personnel concernées vers les Etats-Unis et de les traiter à ses propres finalités, notamment pour l’amélioration de ses produits et pour la publicité ciblée. Vous pouvez consulter la politique de confidentialité de Google derrière le lien suivant : <a href="https://www.google.com/intl/fr/policies/privacy/" target="_blank" rel="nofollow noopener">https://www.google.com/intl/fr/policies/privacy/</a> et demander communication des clauses contractuelles type de la Commission européenne encadrant le transfert de vos données ici : <a href="https://support.google.com/policies/contact/general_privacy_form" target="_blank" rel="nofollow noopener">https://support.google.com/policies/contact/general_privacy_form</a></li>
                                    </ul>
                                    <p class="texte"><strong>Réseaux sociaux :</strong></p>
                                    <ul>
                                    <li><span style="text-decoration: underline;">Facebook</span><br>Nous pouvons incorporer à notre site un bouton vous permettant de promouvoir notre activité sur Facebook (bouton « J’aime »), ou encore afficher sur notre site des publications présentes sur Facebook. Ces fonctionnalités entraînent le dépôt et la lecture de cookies par Facebook, qui est susceptible de transférer les données à caractère personnel ainsi collectées vers les Etats-Unis et de les traiter à ses propres finalités. Vous pouvez consulter la politique de confidentialité de Facebook derrière le lien suivant : <div data-type="placeholder" data-name="facebook" style="display: none;"><div lang="fr" class="klaro cm-as-context-notice" style="display:none;"><div class="context-notice"><p>Cet élément utilise des cookies et requiert votre consentement pour être affiché.</p><p class="cm-buttons"><button class="cm-btn cm-btn-success" type="button">Afficher seulement maintenant</button><button class="cm-btn cm-btn-success-var" type="button">Toujours afficher</button></p></div></div></div><div data-name="facebook" style="display:inline;" data-modified-by-klaro="yes"><a href="https://fr-fr.facebook.com/privacy/explanation/" target="_blank" rel="nofollow noopener">https://fr-fr.facebook.com/privacy/explanation/</a></div></li>
                                    <li><span style="text-decoration: underline;">Twitter</span><br>Nous pouvons incorporer à notre site un bouton vous proposant de suivre notre activité sur Twitter, ou encore afficher sur notre site des publications que nous avons faites sur Twitter. Ces fonctionnalités entraînent le dépôt et la lecture de cookies par Twitter, qui est susceptible de transférer les données à caractère personnel ainsi collectées vers les Etats-Unis et de les traiter à ses propres finalités. Vous pouvez consulter la politique de confidentialité de Twitter derrière le lien suivant : <div data-type="placeholder" data-name="twitter" style="display: none;"><div lang="fr" class="klaro cm-as-context-notice" style="display:none;"><div class="context-notice"><p>Cet élément utilise des cookies et requiert votre consentement pour être affiché.</p><p class="cm-buttons"><button class="cm-btn cm-btn-success" type="button">Afficher seulement maintenant</button><button class="cm-btn cm-btn-success-var" type="button">Toujours afficher</button></p></div></div></div><div data-name="twitter" style="display:inline;" data-modified-by-klaro="yes"><a href="https://twitter.com/fr/privacy" target="_blank" rel="nofollow noopener">https://twitter.com/fr/privacy</a></div></li>
                                    <li><span style="text-decoration: underline;">LinkedIn</span><br>Nous pouvons incorporer à notre site un bouton vous permettant de partager des contenus de notre site via votre compte LinkedIn, ou encore afficher sur notre site des publications que nous avons faites sur LinkedIn. Ces fonctionnalités entraînent le dépôt et la lecture de cookies par LinkedIn, qui est susceptible de transférer les données à caractère personnel ainsi collectées vers les Etats-Unis et de les traiter à ses propres finalités. Vous pouvez consulter la politique de confidentialité de LinkedIn derrière le lien suivant : <div data-type="placeholder" data-name="linkedin" style="display: none;"><div lang="fr" class="klaro cm-as-context-notice" style="display:none;"><div class="context-notice"><p>Cet élément utilise des cookies et requiert votre consentement pour être affiché.</p><p class="cm-buttons"><button class="cm-btn cm-btn-success" type="button">Afficher seulement maintenant</button><button class="cm-btn cm-btn-success-var" type="button">Toujours afficher</button></p></div></div></div><div data-name="linkedin" style="display:inline;" data-modified-by-klaro="yes"><a href="https://www.linkedin.com/legal/privacy-policy" target="_blank" rel="nofollow noopener">https://www.linkedin.com/legal/privacy-policy</a></div></li>
                                    </ul>
                                    <p class="texte"><strong>Vidéos :</strong></p>
                                    <ul>
                                    <li><span style="text-decoration: underline;">Vimeo</span><br>Nous pouvons intégrer à notre site du contenu audiovisuel hébergé sur la plateforme Vimeo. Cette fonctionnalité entraîne le dépôt et la lecture de cookies par Vimeo, qui est susceptible de transférer les données à caractère personnel ainsi collectées vers les Etats-Unis et de les traiter à ses propres finalités. Vous pouvez consulter la politique de confidentialité de Vimeo derrière le lien suivant : <a href="https://vimeo.com/privacy" target="_blank" rel="nofollow noopener">https://vimeo.com/privacy</a></li>
                                    <li><span style="text-decoration: underline;">Youtube</span><br>Nous pouvons intégrer à notre site du contenu audiovisuel hébergé sur la plateforme Youtube. Cette fonctionnalité entraîne le dépôt et la lecture de cookies par Youtube, qui est susceptible de transférer les données à caractère personnel ainsi collectées vers les Etats-Unis et de les traiter à ses propres finalités, y compris à des fins de publicité ciblée. Vous pouvez consulter la politique de confidentialité de Google, applicable aux services Youtube, derrière le lien suivant : <a href="https://policies.google.com/privacy?hl=fr" target="_blank" rel="nofollow noopener">https://policies.google.com/privacy?hl=fr</a></li>
                                    </ul>
                                    <p class="texte"><strong>Autres cookies :</strong></p>
                                    <ul>
                                    <li><span style="text-decoration: underline;">Bing</span><br>Nous utilisons le service Webmaster Tools de Microsoft Bing afin d’optimiser le référencement de notre site internet sur les moteurs de recherche. La mise en œuvre de ce service implique le dépôt et la lecture de cookies par Microsoft, qui est susceptible de transférer les données à caractère personnel ainsi collectées vers les Etats-Unis et de les traiter à ses propres finalités. Vous pouvez consulter la politique de confidentialité de Microsoft derrière le lien suivant : <a href="https://privacy.microsoft.com/fr-fr/privacystatement" target="_blank" rel="nofollow noopener">https://privacy.microsoft.com/fr-fr/privacystatement</a></li>
                                    </ul>
                                    <h3>4. Paiement sur le site avec Paypal</h3>
                                    <p>Pour le règlement des transactions réalisées sur notre site, nous utilisons les services de paiement de la société Paypal. Les données relatives à la commande ainsi que les informations que vous saisissez via l’interface de paiement sont transmises à Paypal afin de traiter le paiement. La base légale de ce traitement est sa nécessité pour l’exécution d’un contrat auquel vous êtes partie (article 6(1)(b) du RGPD).</p>
                                    <p>Ces données sont susceptibles d’être transférées aux Etats-Unis et traitées par Paypal à ses propres finalités. Vous pouvez consulter la politique de confidentialité de Paypal derrière le lient suivant : <a href="https://www.paypal.com/fr/webapps/mpp/ua/privacy-full" target="_blank" rel="nofollow noopener">https://www.paypal.com/fr/webapps/mpp/ua/privacy-full</a>.</p>
                                    <p>L’utilisation des services de Paypal sur notre site entraîne également le dépôt et la lecture de cookies par Paypal afin de stocker les informations de compte ainsi que lutter contre la fraude. Ces cookies fonctionnels, nécessaires à la fourniture du service, ne peuvent faire l’objet d’une sélection de votre part via l’interface de gestion des cookies. Pour en savoir plus, vous pouvez consulter l’avis sur les cookies de Paypal derrière le lien suivant : <a href="https://www.paypal.com/fr/webapps/mpp/ua/cookie-full/" target="_blank" rel="nofollow noopener">https://www.paypal.com/fr/webapps/mpp/ua/cookie-full/</a></p>
                                    <h3>5. Formulaire de contact</h3>
                                    <p>Vous pouvez prendre contact avec nous par l’intermédiaire du formulaire prévu à cet effet, accessible notamment depuis la page « Contact » du site internet.</p>
                                    <p>La validation de ce formulaire implique le traitement par nos soins des données à caractère personnel recueillies à cette occasion.</p>
                                    <p>Afin de valider le formulaire, nous vous demandons de nous fournir les informations suivantes : un nom, un numéro de téléphone et une adresse mail. Faute de remplir ces champs du formulaire, votre demande ne nous parviendra pas et ne sera donc pas traitée. Vous êtes libre de nous fournir ou non d’autres informations dans le cadre de votre demande. <br>Les données ainsi recueillies sont traitées afin de vous identifier, de prendre connaissance de votre correspondance et d’y donner suite. La base légale de ce traitement peut donc dépendre de la nature de votre démarche. S’agissant d’un traitement qui intervient à votre initiative, en règle générale, le traitement sera fondé sur l'exécution d'un contrat avec nous ou sur l'exécution de mesures précontractuelles prises à votre demande (article 6(1)(b) du RGPD).</p>
                                    <p>Si votre demande concerne nos produits et services, vos données à caractère personnel seront traitées pour donner suite à votre demande d’informations. Dans le cas où cet échange ne donnerait pas lieu à la conclusion d’un contrat, vos données ne seront pas utilisées afin de vous recontacter ultérieurement à des fins de prospection commerciale.<br>Si votre demande n’a pas pour objet nos produits et services, nous n’utiliserons pas vos données à caractère personnel à des fins commerciales.</p>
                                    <p>Notre prestataire pour l’hébergement du présent site internet, Futur Digital, ainsi que ses sous-traitants, sont également destinataires de ces données dans le cadre de la réalisation de leurs missions pour notre compte. Ces données font l’objet d’un transfert hors de l’Union européenne, encadré par les clauses contractuelles type de la Commission européenne. Pour obtenir plus d’informations sur ce transfert ou communication de cet instrument juridique, vous pouvez écrire à Futur Digital, 696 rue Yves Kermen, 92100 Boulogne-Billancourt.<br>Nous conservons votre demande de contact pendant une durée de 3 ans.<br>Notre sous-traitant Futur Digital pourra conserver ces données en archivage pendant une durée n’excédant pas 5 ans à compter de la fin de notre relation commerciale avec lui, dans son intérêt légitime de permettre l’exercice ou la défense de ses droits en justice (article 6(1)(f) du RGPD).</p>
                                    <h3>6. Discussion instantanée</h3>
                                    <p>Notre site propose une fonctionnalité de discussion instantanée, vous permettant de prendre contact avec nous par l’intermédiaire d’une fenêtre s’ouvrant en bas de l’écran.</p>
                                    <p>L’utilisation de cette fonction implique le traitement de données vous concernant.</p>
                                    <p>D’une part, des cookies sont installés sur votre dispositif afin de permettre le fonctionnement du service. Ces cookies ne sont activés que lorsque vous cliquez sur le bouton ouvrant l’interface de discussion.</p>
                                    <p>D’autre part, toutes les informations à caractère personnel que vous décidez de nous transmettre dans le cadre de l’échange seront traitées afin de donner suite à votre demande, et le cas échéant de vous recontacter aux coordonnées que vous nous aurez communiquées.</p>
                                    <p>Puisque nous traitons vos données à votre initiative afin de prendre en compte et donner suite à votre demande, la base légale de ce traitement peut dépendre de la nature de votre démarche, mais il s’agira le plus souvent de l’exécution d’un contrat auquel vous êtes partie ou de mesures précontractuelles à votre demande (article 6(1)(b) du RGPD).</p>
                                    <p>Les messages échangés, ainsi que des données techniques sur votre dispositif (comme votre adresse I.P.) sont enregistrés. Ces données sont traitées par notre sous-traitant Futur Digital ainsi que par ses propres sous-traitants afin de fournir ce service de discussion. Ces données font donc l’objet d’un transfert vers des pays tiers à l’Union européenne. Pour obtenir plus d’informations sur ce transfert ou communication des clauses qui l’encadrent, vous pouvez écrire à Futur Digital, 696 rue Yves Kermen, 92100 Boulogne-Billancourt.</p>
                                    <p>Les données transmises lors de la conversation seront conservées pendant une durée de 3 ans.</p>
                                    <h3>7. Droits et recours</h3>
                                    <p>Vos droits sur les données à caractère personnel vous concernant</p>
                                    <p>Vous disposez de droits d’accès et de rectification quant aux données vous concernant que nous traitons, conformément aux articles 15 et 16 du RGPD. Dans la limite des conditions prévues aux articles 17 à 20 du RGPD, vous disposez de droits à l’effacement, à la limitation du traitement, à la portabilité de vos données.</p>
                                    <p>Où adresser vos demandes et réclamations ou exercer vos droits ?</p>
                                    <p>Pour toute demande ou réclamation relative aux traitements de données à caractère personnel réalisés sur le site internet www.lafabrique-automobile35.fr, tels qu’ils ont été décrits ci-avant, vous pouvez écrire à l’adresse rgpd[at]futurdigital.fr.</p>
                                    <p>Pour toute demande, question ou difficulté concernant d’autres traitements de vos données à caractère personnel par LA FABRIQUE AUTOMOBILE, nous vous invitons à :</p>
                                    <ul>
                                    <li>Nous écrire à l’aide du formulaire de contact <a href="/contact.html" target="_self">suivant</a> ;</li>
                                    <li>Nous écrire à l’adresse suivante : 26 Rue des Usines, 35440 Montreuil-sur-Ille.</li>
                                    </ul>
                                    <p>Nous ne manquerons pas de répondre à votre demande dans les plus brefs délais.<br>Si vous estimez, après nous avoir contactés, que vos droits au regard de vos données à caractère personnel ne sont pas respectés, vous pouvez introduire une réclamation auprès de la CNIL.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <footer>
                <p>Copyright - 2024</p>
                <p><a href="#"><img src="./assets/logo.webp" alt="Logo du site" class="logo"></a></p>
                <p>Tous droits réservés</p>
            </footer>
            <div class="modal">
                <div class="modal-content">
                    <a href="#" class="btn-close"><i class="fa-solid fa-circle-xmark"></i></a>
                    <h2>Détails du lead</h2>
                    <div class="group">
                        <span class="attr">Nom :</span>
                        <span id="name"></span>
                    </div>
                    <div class="group">
                        <span class="attr">Téléphone :</span>
                        <span id="tel"></span>
                    </div>
                    <div class="group">
                        <span class="attr">Email :</span>
                        <span id="mail"></span>
                    </div>
                    <div class="group">
                        <span class="attr">Interessé par :</span>
                        <span id="service"></span>
                    </div>
                    <div class="group">
                        <span class="attr">Message :</span>
                        <span id="msg"></span>
                    </div>
                    <div class="group">
                        <span class="attr">Envoyé le :</span>
                        <span id="jour"></span>
                    </div>
                </div>
            </div>
        </div>
        <!-- <script src="./public/js/script.js"></script> -->
        <script>
            let seemore = document.querySelector('#seemore');
            let closeBtn = document.querySelector('.btn-close');
            let modal = document.querySelector('.modal');
            seemore.addEventListener('click', function(e){
                let datas = [];
                datas = seemore.children[1].children;
                modal.classList.add('opened')
                document.querySelector('#name').innerHTML = datas[0].innerHTML;
                document.querySelector('#tel').innerHTML = datas[1].innerHTML;
                document.querySelector('#mail').innerHTML = datas[2].innerHTML;
                document.querySelector('#service').innerHTML = datas[3].innerHTML;
                document.querySelector('#msg').innerHTML = datas[4].innerHTML;
                document.querySelector('#jour').innerHTML = datas[5].innerHTML;
            })
            closeBtn.addEventListener('click', function(){
                modal.classList.remove('opened')
            })
            
            // tableau des leads
            $(document).ready(function(){
            $('#myTable').pageMe({
                pagerSelector:'#myPager',
                activeColor: 'blue',
                prevText:'Précédent',
                nextText:'Suivant',
                showPrevNext:true,
                hidePageNumbers:false,
                perPage:5
            });
            });
        </script>
        <script>
            tinymce.init({
                selector: 'textarea#premiumskinsandicons-fluent',
                language: 'fr_FR',  // Spécifiez la langue française
                skin: 'fluent',
                content_css: 'fluent',
                toolbar_mode: 'floating',
                plugins: 'advlist anchor autolink charmap code codesample directionality help image editimage insertdatetime link lists media nonbreaking pagebreak preview searchreplace table tableofcontents visualblocks visualchars wordcount',
                toolbar: 'undo redo | blocks | bold italic strikethrough forecolor backcolor blockquote | link image media | alignleft aligncenter alignright alignjustify | numlist bullist outdent indent | removeformat | code | table ',
                height: 400
            });
            tinymce.init({
                selector: 'textarea#premiumskinsandicons-fluent2',
                language: 'fr_FR',  // Spécifiez la langue française
                skin: 'fluent',
                content_css: 'fluent',
                toolbar_mode: 'floating',
                plugins: 'advlist anchor autolink charmap code codesample directionality help image editimage insertdatetime link lists media nonbreaking pagebreak preview searchreplace table tableofcontents visualblocks visualchars wordcount',
                toolbar: 'undo redo | blocks | bold italic strikethrough forecolor backcolor blockquote | link image media | alignleft aligncenter alignright alignjustify | numlist bullist outdent indent | removeformat | code | table ',
                height: 400
            });
        </script>
    </body>
</html>