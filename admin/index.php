<?php
session_start();

if (isset($_SESSION['user_loggued']) === false) {
    header('location: authentification.php');
}
?>

<?php include 'partials/header.php'; ?>


<?php include 'partials/footer.php'; ?>