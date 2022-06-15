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



<!--  -->

<?php if ($categorie === 'japon') {  ?>
    <div class="px-4 py-5 text-center bg-hero japon">
        <h1 class="display-5 fw-bold japon">Japon</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4 japon">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
        </div>
    </div>
    <br>
    <h2 class="home-title"> Nos recettes</h2>

<?php } elseif ($categorie === 'vietnam') {  ?>
    <div class="px-4 py-5 text-center bg-hero vietnam">
        <h1 class="display-5 fw-bold vietnam">Vietnam</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4 vietnam">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
        </div>
    </div>
    <br>
    <h2 class="home-title"> Nos recettes</h2>
<?php } elseif ($categorie === 'thailande') {  ?>
    <div class="px-4 py-5 text-center bg-hero thailande">
        <h1 class="display-5 fw-bold thailande">Thailande</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4 thailande">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
        </div>
    </div>
    <br>
    <h2 class="home-title"> Nos recettes</h2>
<?php } elseif ($categorie === 'coree') {  ?>
    <div class="px-4 py-5 text-center bg-hero coree">
        <h1 class="display-5 fw-bold coree">Corée du sud</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4 coree">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
        </div>
    </div>
    <br>
    <h2 class="home-title"> Nos recettes</h2>

<?php } elseif ($categorie === 'malaisie') {  ?>
    <div class="px-4 py-5 text-center bg-hero malaisie">
        <h1 class="display-5 fw-bold malaisie">Malaisie</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4 malaisie">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
        </div>
    </div>
    <br>
    <h2 class="home-title"> Nos recettes</h2>

<?php } elseif ($categorie === 'taiwan') {  ?>
    <div class="px-4 py-5 text-center bg-hero taiwan">
        <h1 class="display-5 fw-bold taiwan">Taïwan</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4 taiwan">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
        </div>
    </div>
    <br>
    <h2 class="home-title"> Nos recettes</h2>

<?php } elseif ($categorie === 'indonesie') {  ?>
    <div class="px-4 py-5 text-center bg-hero indonesie">
        <h1 class="display-5 fw-bold indonesie">Indonésie</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4 indonesie">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
        </div>
    </div>
    <br>
    <h2 class="home-title"> Nos recettes</h2>

<?php } elseif ($categorie === 'cambodge') {  ?>
    <div class="px-4 py-5 text-center bg-hero cambodge">
        <h1 class="display-5 fw-bold cambodge">Cambodge</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4 cambodge">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
        </div>
    </div>
    <br>
    <h2 class="home-title"> Nos recettes</h2>

<?php } elseif ($categorie === 'inde') {  ?>
    <div class="px-4 py-5 text-center bg-hero inde">
        <h1 class="display-5 fw-bold inde">Inde</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4 inde">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
        </div>
    </div>
    <br>
    <h2 class="home-title"> Nos recettes</h2>

<?php } ?>



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

    <?php if ($reponse->rowCount() <= 0) { ?>
        <h2>Aucun article</h2>
    <?php } ?>
</div>

<?php include 'partials/footer.php'; ?>