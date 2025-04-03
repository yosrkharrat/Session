<?php
require_once 'test.php';

$compteur = new Compteur("visites.txt");
$compteur->inc();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Visites</title>
</head>
<body>
    <h1><?php $compteur->afficher(); ?></h1>

    <form method="post">
        <button type="submit" name="reset">Réinitialiser le compteur</button>
    </form>

    <?php
    if (isset($_POST['reset'])) {
        file_put_contents("visites.txt", "0"); // Réinitialise le fichier
        header("Location: index.php");
        exit();
    }
    ?>
</body>
</html>
