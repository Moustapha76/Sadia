<?php
// $server = 'localhost';
// $bdd = 'ds1';
// $username = 'root';
// $password = '';
 try {
    $bdd = new PDO('mysql:host=localhost;dbname=ds1', 'root', '');
} catch (Exception $e) {
    die("Erreur lors de la connexion à la base de donnée " . $e->getMessage());
}

?>