<?php
require 'bdd.php';
$page_title = "Langage JavaScript";
$page_titre = "Projet PHP";
$page_description = "Ce projet permet de découvrir la programmation PHP.";

$langage = $listeLangages[2];
?>
<!DOCTYPE html>
<html lang="fr">

<?php require 'head.php'; ?>

<body>
    <?php require 'header.php'; ?>

    <main>
        <section class="row p-3">
            <figure class="col-2">
                <img src="images/<?= $langage['logo']; ?>" class="figure-img" alt="...">
                <figcaption class="figure-caption">Logo <?= $langage['titre']; ?></figcaption>
            </figure>
            <div class="col-8">
                <h2><?= $langage['titre']; ?></h2>
                <p><?= $langage['resume']; ?></p>
        </section>
    </main>

    <?php require 'footer.php'; ?>

</body>

</html>