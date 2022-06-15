<?php
session_start();

try {
    $bdd = new PDO('mysql:host=localhost;dbname=leadada;charset=utf8', 'root', 'root');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
$reponse = $bdd->query('SELECT * FROM articles ORDER BY id DESC LIMIT 4');
?>

<?php include 'partials/header.php'; ?>

<div class="px-4 py-5 text-center bg-hero home">
    <h1 class="display-5 fw-bold home">Bienvenue </h1>
     <h2 class="titre-cantine"> dans notre cantine </h2>
    <div class="col-lg-6 mx-auto">
    </div>
</div>
<br>
<h2 class="home-title"> Nos dernières recettes</h2>
<div class="listing-recipes">

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
</div>



<?php include 'partials/footer.php'; ?>