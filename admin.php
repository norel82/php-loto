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

    <?php
    if (isset($_POST['date'])) {
        $date = $_POST['date'];

        // On découpe la date
        $dateDecoupee = explode("-", $date);

        // On récupère année, mois et jour
        $annee = $dateDecoupee[0];
        $mois = $dateDecoupee[1];
        $jour = $dateDecoupee[2];

        // On enlève les 2 premiers chiffres de l'année
        $anneeCourte = substr($annee, 2);

        $resultatAnnee = $anneeCourte - 49;

        // Si le résultat est négatif
        if ($resultatAnnee < 0) {
            $resultatAnnee = $resultatAnnee + 49;
        }

        $resultatDate = $mois + $jour;
    }
    ?>

    <div class="global">
        <div class="page">
            <h2>Calcul des numéros</h2>
            <form method="post" action="">
                <input type="date" name="date" value="<?php echo $date ?>">
                <input type="submit" value="Valider">
            </form>
        </div>
    </div>

    <?php if (isset($_POST['date'])) { ?>

        <div class="resultats">

            <div class="resultat">
                <span>Année - 49</span>
                <strong><?php echo $resultatAnnee; ?></strong>
            </div>

            <div class="resultat">
                <span>Mois + Jour</span>
                <strong><?php echo $resultatDate; ?></strong>
            </div>

        </div>

    <?php } ?>

    <?php include "includes/pied-page.php"; ?>

</body>

</html>