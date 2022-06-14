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

    $identifiant = "dalila@hot.com";
    $motdepasse = "123456";


    
    /*V1*/
    echo "<h2>V1</h2>";

    if ($email == $identifiant && $password == $motdepasse) {
        echo "Vous êtes connecté";
    } else {
        echo "Identifiant ou mot de passe incorrect";
    }
    //var_dump($_POST);





    /*V2*/
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