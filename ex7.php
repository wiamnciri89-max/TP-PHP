<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

if (isset($_POST['nom'])) {
    $nom = $_POST['nom'];
    $nom = trim($nom);
    $nom = htmlspecialchars($nom, ENT_QUOTES, 'UTF-8');

    echo "Bonjour " . $nom;
}

?>

<form method="post">
    <label>Nom :</label>
    <input type="text" name="nom">
    <button type="submit">Envoyer</button>
</form>

</body>
</html>