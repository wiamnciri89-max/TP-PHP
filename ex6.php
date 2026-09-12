<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if (isset($_POST["produit"]) && isset($_POST["prix"]) && isset($_POST["quantite"])) {
        $produit = $_POST["produit"];
        $prix = $_POST["prix"];
        $quantite = $_POST["quantite"];

        $prixtotal = $prix * $quantite;

        echo "Commande : $quantite x $produit<br>";
        echo "Prix total : $prixtotal €<br>";
    }
    ?>
    <form method="post">
        <label>Nom du produit : </label>
        <input type="text" name="produit">
        <br>
        
        <label>Prix :</label>
        <input type="number" name="prix">
        <br>

        <label>Quantité :</label>
        <input type="number" name="quantite">
        <br>

        <button type="submit">Valider</button>

    </form>
</body>
</html>