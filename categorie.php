<?php
session_start();

$categorie = $_GET['cat'];

//var_dump($categorie);

try {
    $bdd = new PDO('mysql:host=localhost;dbname=leadada;charset=utf8', 'root', 'root');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
$reponse = $bdd->query('SELECT * FROM articles WHERE category = "' . $categorie . '"');
?>
<?php include 'partials/header.php'; ?>



<?php if ($categorie === 'japon') {  ?>
    <div class="px-4 py-5 text-center bg-hero">
        <h1 class="display-5 fw-bold">Japon</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
        </div>
    </div>

    <h2> Mes recettes</h2>
    
<?php } elseif ($categorie === 'vietnam') {  ?>
    aaaaaa
<?php } elseif ($categorie === 'thailande') {  ?>
    aaaaaa
<?php } ?>

<?php while ($donnees = $reponse->fetch()) {  ?>

    <div class="card" class="row mx-auto" style="width: 18rem;">
        <img src="<?php echo $donnees['image']; ?>" class="card-img-top" alt="image katsu">
        <div class="card-body">
            <h5 class="card-title" value="title"><?php echo $donnees['titre']; ?></h5>
            <p class="card-text" name="container"></p>
            <a href="articles.php?id=<?php echo $donnees['id'] ?>" class="btn btn-primary">Lire la suite</a>
        </div>
    </div>

<?php } ?>

<?php if ($reponse->rowCount() <= 0) { ?>
    <h2>Aucun article</h2>
<?php } ?>

<?php include 'partials/footer.php'; ?>