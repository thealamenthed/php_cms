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

<div class="px-4 py-5 text-center bg-hero" style="background-image: url('<?php echo $reponse['image'];  ?>');">
    <h1 class="display-5 fw-bold title"> <?php echo $reponse['titre']; ?></h1>
</div>
<br>
<div>
    <h2 class="home-title"> THE RECIPES YOU’LL FIND HERE:</h2><br>
    <div class="col-lg-6 mx-auto">
        <?php echo ($reponse['contenu']); ?>
    </div>
</div>


<?php include 'partials/footer.php'; ?>