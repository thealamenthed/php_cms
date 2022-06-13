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