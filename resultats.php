<?php

include "config/database.php";
?>

<?php
include "config/database.php";

$sql = "SELECT * FROM dates";
$dates = $pdo->query($sql);
?>

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
            <h2>Dates enregistrées</h2>
            <?php
            $resultats = array();

            if (isset($_POST['dates'])) {

                $datesSelectionnees = $_POST['dates'];

                foreach ($datesSelectionnees as $id) {

                    // Récupérer la date en base
                    $sql = "SELECT * FROM dates WHERE id = $id";
                    $date = $pdo->query($sql)->fetch();

                    $dateSaisie = $date['date'];

                    // On découpe la date
                    $dateDecoupee = explode("-", $dateSaisie);

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

                    $resultats[] = array(
                        "date" => $dateSaisie,
                        "annee" => $resultatAnnee,
                        "dateResultat" => $resultatDate
                    );
                }
            }
            ?>

            <h2>Numéros générés</h2>

            <div class="numeros">

                <?php foreach ($resultats as $resultat) { ?>

                    <strong><?php echo $resultat['annee']; ?></strong>
                    <strong><?php echo $resultat['dateResultat']; ?></strong>

                <?php } ?>

            </div>

            <h2>Détails des calculs</h2>

            <?php foreach ($resultats as $resultat) { ?>

                <div class="detail">

                    <h3><?php echo $resultat['date']; ?></h3>

                    <p>
                        Année - 49 :
                        <strong><?php echo $resultat['annee']; ?></strong>
                    </p>

                    <p>
                        Mois + Jour :
                        <strong><?php echo $resultat['dateResultat']; ?></strong>
                    </p>

                </div>

            <?php } ?>

        </div>
    </div>

    <?php include "includes/pied-page.php"; ?>

</body>

</html>