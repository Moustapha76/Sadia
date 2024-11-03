<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senbuilder | Services</title>
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
                <li class="active"><a href="../pages/service.php">Services</a></li>
                <li><a href="../pages/projects.php">Projets</a></li>
                <li><a href="../pages/blog.php">Actualités</a></li>
                <li class="devis"><a href="./pages/contact.php">Devis gratuit</a></li>

            </ul>
            <a href="tel:0773957651" class="tel"><i class="fa-solid fa-phone"></i>+221 77 395 76 51</a>
            <button type="button" title="Ouvrir" class="open"><i class="fa-solid fa-bars"></i></button>
            <nav class="navbar-mobile">
                <button title="Fermer" type="button" class="close"><i class="fa-solid fa-xmark"></i></button>
                <ul class="menu">
                    <li><a href="../index.php">Accueil</a></li>
                    <li><a href="./pages/company.php">L'entreprise</a></li>
                    <li class="active"><a href="./pages/service.php">Services</a></li>
                    <li><a href="./pages/projects.php">Projets</a></li>
                    <li><a href="../pages/blog.php">Actualités</a></li>
                    <li><a href="./pages/contact.php">Contact</a></li>
                </ul>
            </nav>
        </div>
        <div class="banner interne">
            <img src="../images/banner/banner-4.jpg" alt="Bandeau">
            <div class="item">
                <h1>Nos services</h1>
                <span></span>
                <div class="btn-group">
                    <a href="#" role="button" class="btn">Contactez-nous <i class="fa-solid fa-phone-flip"></i></a>
                    <a href="#" role="button" class="btn">Nos services <i class="fa-solid fa-arrow-right-long"></i></a>
                </div>
            </div>
        </div>
    </header>
    <main>
        <section id="service-list">
            <div class="service-menu">
                <div class="filter">
                    <h4>Services</h4>
                    <div class="checkbox">
                        <label class="filterChecked"><input type="radio" name='check' rel="service-1" onchange="change()" checked/>Construction <i class="fa-solid fa-arrow-right"></i></label>
                    </div>
                    <div class="checkbox">
                        <label><input type="radio" name='check' rel="service-2" onchange="change()"/>Etude architecturale <i class="fa-solid fa-arrow-right"></i></label>
                    </div>
                    <div class="checkbox">
                        <label><input type="radio" name='check' rel="service-3" onchange="change()"/>Maitrise d'oeuvre <i class="fa-solid fa-arrow-right"></i></label>
                    </div>
                    <div class="checkbox">
                        <label><input type="radio" name='check' rel="service-4" onchange="change()"/>Rénovation <i class="fa-solid fa-arrow-right"></i></label>
                    </div>
                    <div class="checkbox">
                        <label><input type="radio" name='check' rel="service-5" onchange="change()"/>Etude de prix <i class="fa-solid fa-arrow-right"></i></label>
                    </div>
                    <div class="checkbox">
                        <label><input type="radio" name='check' rel="service-6" onchange="change()"/>Vente de biens immobiliers <i class="fa-solid fa-arrow-right"></i></label>
                    </div>
                </div>
            </div>
            <div class="service-container">
                <div class="result">
                    <div class="service service-1">
                        <h3>SERVICES GROS/SECOND OEUVRE BATIMENT</h3>
                        <p>Vous avez un projet de construction , d’extention ou de renovation, Sadia Travaux est votre interlociteur ideal. Du fort de son expertise et de son experiences , Sadia Travaux vous accompagne tout au long de votre projet :</p>
                        <div class="accordion">
                            <div class="comment_part1">
                                <div class="accordion-item">
                                <button id="accordion-button-1" aria-expanded="false">
                                    <span class="accordion-title"><span class="numerotation">01</span>Définir un budget</span>
                                    <span class="icon" aria-hidden="true"></span>
                                </button>
                                <div class="accordion-content">
                                    <p>Votre conseiller SADIA est disponible pour répondre à vos questions. Il vous donnera toutes les informations nécessaires</p>
                                </div>
                                </div>
                    
                                <div class="accordion-item">
                                <button id="accordion-button-2" aria-expanded="false">
                                    <span class="accordion-title"><span class="numerotation">02</span>Élaboration du projet</span>
                                    <span class="icon" aria-hidden="true"></span>
                                </button>
                                <div class="accordion-content">
                                    <p>Notre bureau d’étude a conçu plusieurs design d’habitations. Pour répondre à votre demande sur mesure,Sadia Travaux personnalise et adapte votre plan en fonction de la typologie du terrain en prenant compte des nouvelles normes et de l’orientation. Par ailleurs, certains modèles sont modulables et peuvent donc s’adapter à votre convenance</p>
                                </div>
                                </div>
                    
                                <div class="accordion-item">
                                <button id="accordion-button-3" aria-expanded="false">
                                    <span class="accordion-title"><span class="numerotation">03</span>Permis de construire</span>
                                    <span class="icon" aria-hidden="true"></span>
                                </button>
                                <div class="accordion-content">
                                    <p>Le contrat signé, le bureau d’étude se charge de réaliser toutes les pièces et de constituer votre doossier de permis de construire. Par la suite, vous pouvez faire la demande à la mairie de la commune où se trouve le terrain. Le délai administratif pour obtenir un permis de construire depend des services administratives.</p>
                                </div>
                                </div>
                    
                                <div class="accordion-item">
                                <button id="accordion-button-4" aria-expanded="false">
                                    <span class="accordion-title"><span class="numerotation">04</span>Travaux</span>
                                    <span class="icon" aria-hidden="true"></span>
                                </button>
                                <div class="accordion-content">
                                    <p>Le conducteur des travaux supervise le chantier et coordonne les équipes. Vous pouvez communiquer avec lui durant la période de construction. Il est responsable de la qualité, de la sécurité et veille aussi à l’avancée des travaux dans les délais fixés. Un seul interlocuteur, Sadia Travaux.</p>
                                </div>
                                </div>
                    
                            </div>
                            <div class="comment_part2">
                    
                                <div class="accordion-item">
                                <button id="accordion-button-5" aria-expanded="false">
                                    <span class="accordion-title"><span class="numerotation">05</span>Recherche foncière et achat du terrain</span>
                                    <span class="icon" aria-hidden="true"></span>
                                </button>
                                <div class="accordion-content">
                                    <p>Le choix du terrain est crucial dans un tel projet. Le conseillerSADIA vous offre un vaste choix de terrains dans lcertains secteurs grâce à nos partenaires fonciers. Vous pourrez signer la promesse de vente en toute confiance une fois votre décision prise…</p>
                                </div>
                                </div>
                    
                                <div class="accordion-item">
                                <button id="accordion-button-6" aria-expanded="false">
                                    <span class="accordion-title"><span class="numerotation">06</span>Signature du contrat</span>
                                    <span class="icon" aria-hidden="true"></span>
                                </button>
                                <div class="accordion-content">
                                    <p>Nos contrats travaux représente un respect des règles de déontologie des constructeurs de maisons individuelles ainsi qu’un bon nombre de garanties.</p>
                                </div>
                                </div>
                    
                                <div class="accordion-item">
                                <button id="accordion-button-7" aria-expanded="false">
                                    <span class="accordion-title"><span class="numerotation">07</span>Mise au point technique</span>
                                    <span class="icon" aria-hidden="true"></span>
                                </button>
                                <div class="accordion-content">
                                    <p>La mise au point technique intervient avant le début du chantier. C’est là où nous vous présentons le conducteur de travaux, une réunion chantier est prévue de façon à officialiser les caractéristiques techniques et les choix, ainsi que la personnalisation de votre maison.</p>
                                </div>
                                </div>
                    
                                <div class="accordion-item hide">
                                    <button id="accordion-button-8" aria-expanded="false">
                                        <span class="accordion-title"><span class="numerotation">08</span>Livraison et suivi</span>
                                        <span class="icon" aria-hidden="true"></span>
                                    </button>
                                    <div class="accordion-content">
                                        <p>La remise des clés marque l’aboutissement de votre projet et un nouveau départ. Nous devrons faire un état des lieux avant réception de façon à régler tous les éventuels problèmes. Un PV de réception sera signé afin de constater la réception de votre maison en toute tranquillité. Nous continuons de vous accompagner par la suite grâce à notre SAV.</p>
                                    </div>
                                </div>
                      
                            </div>
                        </div>
                    </div>
                    <div class="service service-2">
                        <h3>ARCHITECTURE D’INTÉRIEUR AU SÉNÉGAL</h3>
                        <p>Sadia Travaux vous offre ses services d’Architecture d’intérieur en 3D avec des finitions très détaillées.</p>
                        <h4>SERVICES BÂTIMENT</h4>
                        <p>Au Sénégal, avoir une belle architecture d’intérieur est important. L’identité architecturale doit trouver son territoire de légitimité à tous les niveaux d’expression de l’entreprise : la communication publicitaire, le style de ses produits, l’image de son siège social, le style de ses bureaux, l’ambiance et l’attractivité des magasins. Consciente de ces enjeux, Sensys Afric est à votre service pour analyser avec vous les éléments signifiants de votre identité architecturale et la méthode de déploiement de votre image. Ainsi, pour transformer votre conception intérieure à un design avec de très bonnes finitions.</p>
                        <h4>SERVICES GROS/SECOND OEUVRE BÂTIMENT</h4>
                        <p>Sadia Travaux abrite une équipe de concepteurs qui fournissent des rénovations intérieures complètes. Aussi, des services de finition pour les clients des secteurs privé et public. Nos capacités internes de design d’intérieur comprennent la planification de l’espace, le flux, les finitions et les agencements. Des designs et conceptions en 3D de votre maison ou lieu de travail. Nous concevons une architecture à l’échelle intime de la vie quotidienne. Nous travaillons avec nos Maitres d’Ouvrages sur les notions d’espace, de lumière, de couleurs, de matières, de mobiliers, d’équipements, et de design le tout sur mesure, en prenant compte de l’individualité du commanditaire, afin de créer des lieux non seulement fonctionnels, mais reflétant la personnalité du client. Consciente de ces enjeux, Sadia Travaux est à votre service pour analyser avec vous les éléments signifiants de votre identité architecturale et la méthode de déploiement de votre image. Ainsi, pour transformer votre conception intérieure à un design avec de très bonnes finitions.</p>
                        <h4>POURQUOI FAIRE APPEL À UN ARCHITECTE D’INTÉRIEUR ?</h4>
                        <p>Faire appel à un architecte d’intérieur, un professionnel de la décoration d’intérieur est souvent considéré comme un luxe. Un luxe réservé à une clientèle privilégiée. Ainsi, on mise alors sur ses connaissances personnelles pour gérer « gros travaux » et « décoration » afin de limiter ses dépenses.  Et pourtant, faire appel à un architecte d’intérieur pour vos travaux s’avère moins onéreux que lorsque vous les gérer par vous-même.</p>
                        <p>Votre maison est un véritable refuge contre le stress de la ville et du monde professionnel. Afin de profiter pleinement de vos journées et de votre famille il est primordial de soigner votre intérieur. Un professionnel vous offre la garantie d’une parfaite harmonie de votre habitat mais aussi un espace totalement optimisé pour l’utilisation que vous en ferez.</p>
                        <h4>NOS SERVICES EN ARCHITECTURE D’INTÉRIEUR, AMÉNAGEMENT ET DÉCORATION.</h4>
                        <p>Vous souhaitez des conseils pour l’aménagement et la décoration de votre intérieur ? Cette prestation est idéale pour vous. Lors d’un rendez-vous, nous échangeons sur vos envies, votre projet, vos désirs afin de réaliser une décoration qui vous ressemble. Nous définissons ensemble vos besoins et nous vous donnons alors des idées d’aménagement. Aussi, des astuces pour optimiser votre espace intérieur et des conseils sur le choix des couleurs :</p>
                        <ul><li>Analyse de vos besoins, de vos envies, de votre budget.</li><li>Moment d’échange afin de trouver des solutions à vos problématiques d’espace.</li><li>Préconisation sur le choix des couleurs, des revêtements, du mobilier, des accessoires décoration.</li><li>Conseils sur le choix des fournisseurs.</li><li>Optimisation des espaces, mise en avant du potentiel de votre lieu et possibilités d’agencement du mobilier dans votre intérieur.</li><li>Création d’une ambiance en adéquation avec vos goûts.</li></ul>
                        <p>Ces conseils vous permettront de vous aider à exploiter au mieux votre surface habitable. Nous vous proposons des idées d’ambiances, des solutions pratiques et personnalisées en adéquation avec votre personnalité afin d’harmoniser votre nouvel intérieur.</p>
                    </div>
                    <div class="service service-3">
                        <h3>En quoi consiste la maitrise d’oeuvre ?</h3>
                        <p>La mission suivi de chantier Sadia Travaux comprends 4 grands volets :</p>
                        <div class="accordion">
                            <div class="accordion-item">
                                <button id="accordion-button-1" aria-expanded="false">
                                    <span class="accordion-title"><span class="numerotation">01</span>La Planification Du Chantier</span>
                                    <span class="icon" aria-hidden="true"></span>
                                </button>
                                <div class="accordion-content">
                                    <p>Pour vous assurer un déroulement de chantier optimal,
                                        nous planifions les interventions successives des
                                        différents corps de métier selon un cheminement logique
                                        et précis. Le planning comprend des points d’étape
                                        réguliers avec chaque artisan ou entreprise, ainsi que
                                        des réunions de chantier.
                                    </p>
                                </div>
                            </div>
                
                            <div class="accordion-item">
                                <button id="accordion-button-2" aria-expanded="false">
                                    <span class="accordion-title"><span class="numerotation">02</span>Le Contrôle Des Travaux</span>
                                    <span class="icon" aria-hidden="true"></span>
                                </button>
                                <div class="accordion-content">
                                    <p>Tout au long de votre chantier, Sadia Travaux vient
                                        sur site pour s’assurer que tout est réalisé dans les
                                        règles de l’art. En cas de défaut ou de malfaçon, il avise
                                        les entreprises directement concernées et organise la
                                        remise en conformité des travaux exécutés. Le contrôle
                                        des travaux est régulier afin que le chantier ne prenne
                                        pas de retard.
                                    </p>
                                </div>
                            </div>
                
                            <div class="accordion-item">
                            <button id="accordion-button-3" aria-expanded="false">
                                <span class="accordion-title"><span class="numerotation">03</span>Le Suivi Des Paiements Des Entreprises</span>
                                <span class="icon" aria-hidden="true"></span>
                            </button>
                            <div class="accordion-content">
                                <p>Quand une entreprise a terminé sa part de travaux, et après contrôle, Sadia Travaux valide les émissions de factures dans le respect des devis initiaux et procède aux paiements.</p>
                            </div>
                            </div>
                
                            <div class="accordion-item">
                            <button id="accordion-button-4" aria-expanded="false">
                                <span class="accordion-title"><span class="numerotation">04</span>La Réception Des Travaux</span>
                                <span class="icon" aria-hidden="true"></span>
                            </button>
                            <div class="accordion-content">
                                <p>Quand le chantier est terminé, Sadia Travaux vous
                                accompagne sur site pour la réception des travaux. Les
                                éventuelles réserves sont consignées. C’est à partir de
                                ce moment que commence à courir les garanties légales
                                (bon fonctionnement, parfait achèvement, garantie
                                décennale).</p>
                            </div>
                            </div>
                        </div>
                        <h4>POURQUOI FAIRE APPEL à Sadia Travaux POUR VOTRE SUIVI DE CHANTIER ?</h4>
                        <p>Nos equipes interviennent à tous les stades de votre
                            projet, de sa conception à sa réalisation. Il assure le suivi de votre chantier et coordonne les artisans
                            professionnels qui interviennent chez vous.
                            Outre les garanties et responsabilités classiques
                            obligatoires liées à tout chantier d’envergure, SADIA
                            TRAVAUX s’engage formellement par contrat à une garantie de résultat. Cette garantie vous assure un prix
                            ferme et définitif, un délai d’exécution convenu à
                            l’avance, le parfait achèvement des travaux quels que
                            soient les aléas et bien sûr, des travaux réalisés dans
                            les règles de l’art.
                        </p>
                        <p>Pour nos services de maitrise d’œuvre, Sadia Travaux se rémunère entre 7% et 10% du montant global des travaux.</p>
                    </div>
                    <div class="service service-4">
                        <h3>Rénovation</h3>
                        <p>Sadia Travaux va bien au-delà de la simple mise en relation car nous savons que seul le résultat compte. Nous interrogeons tous nos clients après les chantiers : tous nos artisans sont évalués sur le ou les corps de métier couverts, au travers d’une enquête de satisfaction grâce à laquelle nous calculons une note. Tous ces avis sont affichés sur notre site et les avis et notes des artisans qui interviendront sur votre chantier vous seront bien sûr présentés.</p>
                    </div>
                    <div class="service service-5">
                        <h3>HONORAIRE</h3>
                        <p>Les missions de l’économiste de la construction :</p>
                        <ul><li>Etudier les propositions (plans architecturales).</li><li>Etablir les quantitatifs.</li><li>Consulter les fournisseurs.</li><li>Etablir une enveloppe budgétaire et déterminer le coût des différents corps d’état.</li><li>Estimation budgétaire de votre projet clé en main par un économiste de la construction.</li></ul>                        
                    </div>
                    <div class="service service-6">
                        <h3>Vente de biens immobiliers</h3>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include '../includes/footer.php'; ?>
    <script src="../public/js/script.js"></script>
    <script>
        const items = document.querySelectorAll('.accordion button');
        function toggleAccordion() {
          const itemToggle = this.getAttribute('aria-expanded');
        
          for (i = 0; i < items.length; i++) {
            items[i].setAttribute('aria-expanded', 'false');
          }
        
          if (itemToggle == 'false') {
            this.setAttribute('aria-expanded', 'true');
          }
        }
        
        items.forEach((item) => item.addEventListener('click', toggleAccordion));
    </script>
</body>
</html>