<!DOCTYPE html>
<html lang="FR">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <title>PHP Partie 6 exercice 3</title>
    </head>
    <body>
        <div class="container" id="page-top">
            <div class="row">
                <div class="col-xl-12">
                    <h1 align="center">PHP Partie 6 exercice 3</h1>
                    <h3 align="center">Exercice 3</h3>
                    <p align="center">Faire une page index.php. Tester sur cette page que tous les paramètres 
                        de cette URL existent et les afficher: index.php?startDate=2/05/2016&endDate=27/11/2016</p>
                </div>
            </div>
            <p align="center"><a href="index.php?startDate=2/05/2016&endDate=27/11/2016">Tester ici !</a></p>
            <?php
            if (isset($_GET['startDate']) AND isset($_GET['endDate'])) { // On teste si le paramètre startDate et endDate sont bien présent et si oui, on les affiche en echo ci-dessous
                echo '<p align="center">Date de début ' . $_GET['startDate'] . ' Date d\'aujourd\'hui ' . $_GET['endDate'] . ' !</p>';
            } else { // s'il nous manque un des deux ou les deux paramètres, on affiche l'echo ci-dessous
                echo '<p align="center">Désolé, il manque un paramètre !</p>';
            }
            ?>
        </div>
    </body>
</html>

