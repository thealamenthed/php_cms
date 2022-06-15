<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/47ef3edca0.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&family=Montserrat:wght@200;300;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css" />
    <title>La cantine asiatique</title>
</head>

<body>
    <header class="p-3 border-bottom">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="index.php" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
                    <img src="assets/img/logo.png" alt="logo" class="mr-2 logo">
                </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="categorie.php?cat=japon" class="nav-link px-2 link-secondary">Japon</a></li>
                    <li><a href="categorie.php?cat=vietnam" class="nav-link px-2 link-dark">Vietnam</a></li>
                    <li><a href="categorie.php?cat=thailande" class="nav-link px-2 link-dark">Thailande</a></li>
                    <li><a href="categorie.php?cat=coree" class="nav-link px-2 link-dark">Corée du sud</a></li>
                    <li><a href="categorie.php?cat=malaisie" class="nav-link px-2 link-dark">Malaisie</a></li>
                    <li><a href="categorie.php?cat=taiwan" class="nav-link px-2 link-dark">Taïwan</a></li>
                    <li><a href="categorie.php?cat=indonesie" class="nav-link px-2 link-dark">Indonésie</a></li>
                    <li><a href="categorie.php?cat=cambodge" class="nav-link px-2 link-dark">Cambodge</a></li>
                    <li><a href="categorie.php?cat=inde" class="nav-link px-2 link-dark">Inde</a></li>
                </ul>

                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search" method="GET" action="search.php">
                    <input name="q" type="search" class="form-control" placeholder="Search..." aria-label="Search">
                </form>

                <div class="dropdown text-end">
                    <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="assets/img/user.png" alt="mdo" width="32" height="32" class="rounded-circle">
                    </a>
                    <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                        <li><a class="dropdown-item" href="admin/authentification.php">Se connecter</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="logout.php">Se deconnecter</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>