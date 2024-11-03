<div class="list-actu">
<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=ds1', 'root', '');
} catch (Exception $e) {
    die("Erreur lors de la connexion à la base de donnée " . $e->getMessage());
}
$req = $bdd->query('SELECT * FROM articles');
$articles = $req->fetchAll();
$numberOfArticles = sizeOf($articles);
$articlesPerPage = 4;
$pages = ceil($numberOfArticles / $articlesPerPage);
$p = $_GET['p'];
try {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $datas = $bdd->prepare('SELECT * FROM articles WHERE id=?');
        $datas->execute(array($id));
        $dat = $datas->fetchAll();
        // echo "<pre>";
        // var_dump($dat);
        // echo "</pre>";
?>
        <div class="article">
            <img src="<?= '..'.$dat[0]['file'] ?>" alt="<?= $dat[0]['titre'] ?>">
            <h1><?= $dat[0]['titre'] ?></h1>
            <div class="describeArticle">
                <?= $dat[0]['contenu'] ?>
            </div>
            <small><?= "Publié le " . $dat[0]['pub'] . "par " . $dat[0]['auteur'] ?></small>
        </div>

<?php
    } elseif(!empty($_GET['p']) && ($_GET['p'] <= $pages)) {
        echo '<div id="articles">';
        foreach ($articles as $key => $article) {
            if ($key >= (($p - 1) * 4) && $key < ($p * 4)) {
                $titre = $article['titre'];
                $img = $article['file'];
                $id = $article['id'];
                $displayPart = substr($titre, 0, 10);
                $pub = $article['pub'];
                echo "<div class='bloc'>";
                echo "<div class='article-img'>";
                    echo "<img src='..$img' alt='$titre'>";
                echo "</div>";
                echo '<p><i class="fa-regular fa-calendar-days"></i> '.$pub.'</p>';
                echo "<h2>$displayPart...</h2>";
                echo "<div class='describeArticle'>";
                echo  $article['contenu'] ;
                echo "</div>";
                echo "<a href='?id=$id'>Lire l'article</a>";
                echo "</div>";
            }
        }
        echo '</div>';
        echo '<div id="pagination">';
        for ($i = 1; $i <= $pages; $i++) {
            $isActive = 'paginate';
            if($i == $_GET['p']){
                // $isActive == 'active';
                echo "<a href='?p=$i' class='active'>$i</a>";
                }else{
                    echo "<a href='?p=$i'>$i</a>";
                    }
        }
        echo '</div>';
        
    } else {
        echo "<div id='articles'>";
        foreach ($articles as $key => $article) {
            if ($key >= 0 && $key < 4) {
                $titre = $article['titre'];
                $img = $article['file'];
                $id = $article['id'];
                $pub = $article['pub'];
                echo "<div class='article-item'>";
                echo "<div class='article-img'>";
                echo "<img src='..$img' alt='$titre'>";
                echo "</div>";
                echo '<p><i class="fa-regular fa-calendar-days"></i> '.$pub.'</p>';
                echo "<h2>$titre</h2>";
                echo "<div class='describeArticle'>";
                echo  $article['contenu'] ;
                echo "</div>";
                echo "<a href='?id=$id'>Lire l'article</a>";
                echo "</div>";
            }
        }
        echo "</div>";
        echo '<div id="pagination">';
        for ($i = 1; $i <= $pages; $i++) {
            echo "<a href='?p=$i'>$i</a>";
        }
        echo '</div>';
    }
} catch (Error $e) {
    die("Attention! n'entrez pas du n'importe quoi");
}
?>
</div>
<aside>
    <div class="bloc">
        <h4>Catégorie</h4>
        <span>Construction</span>
        <span>Rénovation</span>
        <span>Architecture</span>
        <span>Plan</span>
        <span>Maison</span>
        <span>Tendance</span>
    </div>
    <div class="bloc">
        <h4>Derniers articles</h4>
        <?php 
        foreach ($articles as $key => $article) {
            if($key >= 0 && $key < 4) {
                $titre = $article['titre'];
                $img = $article['file'];
                $id = $article['id'];
                echo "<div class='article-item'>";
                echo "<div class='article-img'>";
                echo "<img src='..$img' alt='$titre'>";
                echo "</div>";
                echo "<h2>$titre</h2>";
                echo "<a href='?id=$id'>Lire l'article</a>";
                echo "</div>";
            }
        }
        ?>
    </div>
</aside>