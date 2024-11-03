<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=ds1', 'root', '');
} catch (Exception $e) {
    die("Erreur lors de la connexion à la base de donnée " . $e->getMessage());
}
if (isset($_POST['saveService'])) {
    $service_title = strip_tags($_POST['service_title']);
    $service_subtitle = strip_tags($_POST['service_subtitle']);
    $service_contenu = strip_tags($_POST['service_contenu']);
    $service = $bdd->prepare('INSERT INTO stock (service_title,service_subtitle,service_contenu) VALUES(?,?,?)');
    $service->execute(array($service_title,$service_subtitle,$service_contenu));
}
if (isset($_GET['getService'])) {
    $getService = $bdd->prepare('SELECT * FROM services WHERE id = ?');
    $getService->execute(array($_POST['serviceID']));
    $clients = $getService->fetchAll();
}
?>
<div class="services">
    <div class="servicelist">
        <?php
        if (isset($_POST['getService'])) {?>
            <?php
            foreach ($clients as $client) { ?>
                <h4 class="title">Client n°<?= $client['id_client'] ?></h4><br>
                <div class="card">
                    <div class="img-product">
                        <img src="../public/images/client.jpg" alt="">
                    </div>
                    <div class="service-item">
                        <table>
                            <tr>
                                <td>Titre du service</td>
                                <td><?= $client['nom'] ?></td>
                            </tr>
                                <td>Telephone</td>
                                <td><?= $client['tel'] ?></td>
                            </tr>
                            <tr>
                                <td>Ville</td>
                                <td><?= $client['ville'] ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
        <?php }
        }
        else{
        ?>
            <div class="affiche">
                <ul>
                    <li>2590<br><span>Produits</span></li>
                    <li>1590<br><span>Produits vendus</span></li>
                    <li>100<br><span>Collaborateurs</span></li>
                    <li>100<br><span>Collaborateurs</span></li>
                </ul>
            </div>  
        <?php
        }
        ?>
    </div>
    <div class="addService">
        <h4 class="title">Ajout d'un service</h4><br>
        <form action="#" method="POST"  enctype="multipart/form-data">
            <div class="infos">
                <span class="autocomplete"><input type="text" name="nom" class="nom" placeholder="Nom du client" id="myInput" required></span>
                <br><input type="text" name="service_title" placeholder="Nom du service"><br>
                <input type="text" name="service_subtitle" placeholder="Sous titre"><br>
                <input type="submit" name="saveService" class="btn" value="Ajouter"/>
            </div>
            <div class="upload-box">
                <div class="upload-img">
                    <img id="preview" src="../public/images/client.png" alt="">
                </div>
                <label for="imgProduct">Téléverser une image</label>
                <input type="file" id="imgProduct" name="imgProduit"/>
            </div>
        </form>
</div>
    
</div>