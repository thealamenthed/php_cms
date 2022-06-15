<?php
session_start();

if (isset($_SESSION['user_loggued']) === false) {
    header('location: authentification.php');
}

$id = $_GET['id'];

try {
    $bdd = new PDO('mysql:host=localhost;dbname=leadada;charset=utf8', 'root', 'root');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
$reponse = $bdd->query('SELECT * FROM user WHERE id = ' . $id)->fetch();



?>

<?php include 'partials/header.php'; ?>

<div class="container">
    <form method="POST">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email</label>
            <input name="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" value="<?php echo $reponse['email']; ?>">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Mot de passe</label>
            <input name="email" type="password" class="form-control" id="exampleFormControlInput1" placeholder="mot de passe">
        </div>


        <div class="col-12">
            <button class="btn btn-primary" type="submit">Submit form</button>
        </div>
    </form>

</div>


<?php include 'partials/footer.php'; ?>