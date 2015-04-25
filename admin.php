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

            <p>
                <a href="date.php">Ajouter une date</a>
            </p>

            <table>
                <tr>
                    <th>ID</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>

                <?php while ($date = $dates->fetch()) { ?>

                    <tr>
                        <td><?php echo $date['id']; ?></td>

                        <td><?php echo $date['date']; ?></td>

                        <td>
                            <a href="voir-date.php?id=<?php echo $date['id']; ?>" class="voir">
                                Voir
                            </a>

                            <a href="supprimer-date.php?id=<?php echo $date['id']; ?>" class="supprimer">
                                Supprimer
                            </a>
                        </td>
                    </tr>

                <?php } ?>
            </table>
        </div>
    </div>

    <?php include "includes/pied-page.php"; ?>

</body>

</html>