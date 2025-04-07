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
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=copyright" />
    <title>Gestion des Visites</title>
</head>
<body>
    <div class="container">
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
    </div>
    <footer>
        <span class="material-symbols-outlined">
            copyright
        </span> 
    KHARRAT YOSSR  -  LASSOUED MONTAHA  -   SAIDI RAED
    </footer>
</body>
</html>

<?php
?>

