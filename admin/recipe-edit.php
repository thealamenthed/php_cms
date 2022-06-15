
<?php
session_start();

$img = $_GET['image'];
$title = $_GET['titre'];
$contenair = $_GET['contenu'];
$recipe = $_GET['recette'];
$creationDate = $_GET['dateDeCreation'];
$countrie = $_GET['category'];

try {
    $bdd = new PDO('mysql:host=localhost;dbname=leadada;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
$reponse = $bdd->query("SELECT * FROM articles");
print_r($reponse);
while($donnee = $reponse->fetch())
{
    print_r($donnees);
}
$reponse->closeCursor();

?>