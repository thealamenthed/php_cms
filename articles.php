<?php
session_start();

$articleId = $_GET['id'];

//var_dump($categorie);

try {
    $bdd = new PDO('mysql:host=localhost;dbname=leadada;charset=utf8', 'root', 'root');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
$reponse = $bdd->query('SELECT * FROM articles WHERE id = "' . $articleId . '"')->fetch();
?>

<?php include 'partials/header.php'; ?>

<?php var_dump($reponse['contenu']); ?>

<?php include 'partials/footer.php'; ?>