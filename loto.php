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

    <div class="entete">
        <h1>PHP Loto</h1>
        <nav>
            <a href="/">Accueil</a>
            <a href="/loto.php">Jouer</a>
            <a href="/connexion.php">Connexion</a>
        </nav>
    </div>

    <div class="global">
        <div class="page">

            <h2>Ma grille loto</h2>
            <p>Générez votre combinaison de 6 numéros.</p>


            <form method="post">
                <input type="submit" name="generer" value="Générer une grille">
            </form>

            <?php
            if (isset($_POST['generer'])) {
                $grille = genererGrille();
            ?>
                <div class="grille">
                    <h3><?php echo implode(' - ', $grille); ?></h3>
                </div>
            <?php
            }
            ?>
        </div>
    </div>


    <div class="pied-page">
        en cours
    </div>


    <?php
    function genererGrille()
    {
        $nombres = array();
        while (count($nombres) < 6) {
            $nombres[] = rand(1, 49);
        }
        return $nombres;
    }
    ?>
</body>

</html>