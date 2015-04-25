<?php
include "config/database.php";

$id = $_GET['id'];

$sql = "SELECT * FROM dates WHERE id = $id";
$date = $pdo->query($sql)->fetch();
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
            <h2>Date</h2>

            <p>
                <?php echo $date['date']; ?>
            </p>

            <a href="admin.php">Retour</a>

        </div>
    </div>

    <?php include "includes/pied-page.php"; ?>

</body>

</html>