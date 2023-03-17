<?php 

$page_title = "Langages";
$page_titre = "Projet PHP";
$page_description = "Ce projet permet de découvrir la programmation PHP.";

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $page_title; ?></title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <section class="m-3">
            <h1><?= $page_titre; ?></h1>
            <p><?= $page_description; ?></p>
        </section>
        <section>
            <nav>
                <ul>
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="langages.php">Langages</a></li>
                </ul>
            </nav>
        </section>
    </header>

    <main>
        <section class="p-3">
            <h2>Accueil</h2>
        </section>
    </main>

    <footer>
        <nav>
            <ul class="nav">
                <li><a href="http://www.univ-littoral.fr">ULCO</a></li>
                <li><a href="http://fcu.univ-littoral.fr">FCU</a></li>
                <li><a href="https://deust-bcmm.univ-littoral.fr/">W2D</a></li>
            </ul>
        </nav>
    </footer>
</body>

</html>