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

    <?php require 'footer.php'; ?>
</body>

</html>