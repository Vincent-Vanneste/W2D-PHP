<?php

$page_title = "Langages";
$page_titre = "Projet PHP";
$page_description = "Ce projet permet de découvrir la programmation PHP.";

$listeLangages = [
    ['id' => "1", 'titre' => "HTML", 'resume' => "Le HTML est un langage de balisage. Il permet de mettre en forme un document en distinguant les titres, les paragraphes, les images, les liens hypertexte...", 'logo' => '1_html.png'],
    ['id' => "2", 'titre' => "CSS", 'resume' => "Les feuilles de style en cascade, généralement appelées CSS de l'anglais Cascading Style Sheets, forment un langage informatique qui décrit la présentation des documents HTML et XML (wikipedia).", 'logo' => '2_css.png'],
    ['id' => "3", 'titre' => "JavaScript", 'resume' => "JavaScript est un langage de programmation de scripts principalement employé dans les pages web (Wikipédia).", 'logo' => '3_javascript.png'],
    ['id' => "4", 'titre' => "PHP", 'resume' => "PHP: Hypertext Preprocessor, plus connu sous son sigle PHP, est un langage de programmation libre, principalement utilisé pour produire des pages Web dynamiques via un serveur HTTP (Wikipédia).", 'logo' => '4_php.png'],
];
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
            <h2>Langages</h2>
            <ul class="list-group">
                <li>
                    <h3><a href="page<?= $listeLangages[0]['titre'] ?>.php"><?= $listeLangages[0]['titre'] ?></a></h3>
                    <p><?= $listeLangages[0]['resume'] ?></p>
                </li>
                <li>
                    <h3><a href="page<?= $listeLangages[1]['titre'] ?>.php"><?= $listeLangages[1]['titre'] ?></a></h3>
                    <p><?= $listeLangages[1]['resume'] ?></p>
                </li>
                <li>
                    <h3><a href="page<?= $listeLangages[2]['titre'] ?>.php"><?= $listeLangages[2]['titre'] ?></a></h3>
                    <p><?= $listeLangages[2]['resume'] ?></p>
                </li>
                <li>
                    <h3><a href="page<?= $listeLangages[3]['titre'] ?>.php"><?= $listeLangages[3]['titre'] ?></a></h3>
                    <p><?= $listeLangages[3]['resume'] ?></p>
                </li>
            </ul>
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