<?php include "config/database.php"; ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Content-Language" content="fr" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Loto</title>

    <link rel="stylesheet" href="css/commun.css">
</head>

<body>

    <?php include "includes/entete.php"; ?>

    <div class="global">
        <div class="page">
            <h1>connection</h1>

            <?php
            if ($pdo) {
                echo "Connexion à la base de données réussie !";
            }
            ?>
        </div>
    </div>


    <?php include "includes/pied-page.php"; ?>

</body>

</html>