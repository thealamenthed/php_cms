<?php
session_start();

if (isset($_SESSION['user_loggued']) === false) {
    header('location: authentification.php');
}

try {
    $bdd = new PDO('mysql:host=localhost;dbname=leadada;charset=utf8', 'root', 'root');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
$reponse = $bdd->query('SELECT * FROM user');

?>

<?php include 'partials/header.php'; ?>

<div class="container">

    <div class="row">
        <div class="col-lg-12">
            <h2 class="home-title"> Utilisateurs</h2>
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Email</th>
                <th scope="col">Date de connexion</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($donnees = $reponse->fetch()) {  ?>
                <tr>
                    <th scope="row">1</th>
                    <td><?php echo $donnees['email']; ?></td>
                    <td><?php echo $donnees['dateTimeConnexion']; ?></td>
                    <td>
                        <a href="user-edit.php?id=<?php echo  $donnees['id']; ?>"><i class="bi bi-pencil-square"></i></a>
                        <a href="user-delete.php?id=<?php echo  $donnees['id']; ?>"><i class="bi bi-trash"></i></a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>


<?php include 'partials/footer.php'; ?>