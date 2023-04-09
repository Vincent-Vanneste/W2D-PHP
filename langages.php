<?php
require 'bdd.php';
$page_title = "Langages";
$page_titre = "Projet PHP";
$page_description = "Ce projet permet de découvrir la programmation PHP.";
?>
<!DOCTYPE html>
<html lang="fr">

<?php require 'head.php'; ?>

<body>
    <?php require 'header.php'; ?>

    <main>
        <section class="p-3">
            <h2>Langages</h2>
            <ul class="list-group">
                <?php foreach ($listeLangages as $langage) { ?>
                    <li>
                        <h3><a href="page<?= $langage['titre'] ?>.php"><?= $langage['titre'] ?></a></h3>
                        <p><?= $langage['resume'] ?></p>
                    </li>
                <?php } ?>
            </ul>
        </section>
    </main>

    <?php require 'footer.php'; ?>
</body>

</html>