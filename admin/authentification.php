<?php
session_start();
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/47ef3edca0.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style.css" />
    <title>La cantine asiatique</title>
</head>


<body>
    <!-- zone de connexion -->
 
    <form action="" method="POST">
        <h1>Connexion</h1>

        <label><b>Email</b></label>
        <input type="text" placeholder="Entrer votre email" name="email" required>

        <label><b>Mot de passe</b></label>
        <input type="password" placeholder="Entrer le mot de passe" name="password" required>

        <input type="submit" id='submit' value='LOGIN'>



        <?php
        if (isset($_GET['erreur'])) {
            $err = $_GET['erreur'];
            if ($err == 1 || $err == 2)
                echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
        }
        ?>

    </form>

    <?php

    $email = $_POST['email'];
    $password = $_POST['password'];





    /*V1*/
    echo "<h2>V1</h2>";

    if ($email == $identifiant && $password == $motdepasse) {
        echo "Vous êtes connecté";
    } else {
        echo "Identifiant ou mot de passe incorrect";
    }
    //var_dump($_POST);





    /*V2*/
    echo "<h2>V2</h2>";
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=leadada;charset=utf8', 'root', 'root');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    //Je compte le nombre de lignes de ma base de données ayant pour email $mail et pour password $motdepasse
    $reponse = $bdd->query("SELECT COUNT(*) FROM user WHERE email = '$email' AND password = '$password'");
    $count = $reponse->fetchColumn();

    if ($count > 0) {
        echo "Authentification OK<br/>";
    } else {
        echo "Authentification NOK<br />";
    }

    echo "<h2>V2 alt</h2>";
    //Je sélectionne toutes les lignes de ma base de données ayant pour email $mail et pour password $motdepasse
    $reponse = $bdd->query("SELECT * FROM `user` WHERE `email` = '$email' AND `password` = '$password'");

    if ($donnee = $reponse->fetch()) { // Si j'ai un jeu de résultat c'est que le couple email + password existe bien dans la base de données
        echo "Authentification OK<br/>";
        $_SESSION['user_loggued'] = true;
        header('location: /');
    } else { // Sinon c'est que le couple email motdepasse n'existe pas
        echo "Authentification NOK<br />";
    }

    echo "<h2>V2 alt alt 2sdsds</h2>";
    //Je sélectionne toutes les lignes de ma base de données ayant pour email $mail et pour password $motdepasse
    $reponse = $bdd->query("SELECT * FROM `user` WHERE `email` = '$email' AND `password` = '$password'");

    echo "<table border='1'>";

    while ($donnee = $reponse->fetch()) {
        /* "<pre>";
	print_r($donnee);
	echo "</pre>";*/
        echo "<tr>";
        echo "<td>" . $donnee['email'] . "</td>";
        echo "<td>" . $donnee['password'] . "</td>";
        echo "</tr>";
        /*echo $donnee['email']." ".$donnee['password'];
	echo "<br />";*/
    }

    echo "</table>";

    $reponse->closeCursor();


    ?>
</body>

</html>