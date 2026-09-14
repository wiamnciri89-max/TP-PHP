<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        require "connexion.php";
        
        if (isset($_POST["prixMax"])) {
            $prixMax = $_POST["prixMax"];
            $sql = "SELECT * FROM produit WHERE prix <= :prixMax";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(["prixMax" => $prixMax]);
        } else {
            $sql = "SELECT * FROM produit";
            $stmt = $pdo->query($sql);
        }

$produits = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($produits as $produit) {
            echo $produit['nom'] . " - " . $produit['prix'] . " €<br>";
        }
    ?> 

    <form method="post">
        <label>Prix maximum :</label>
        <input
            type="number"
            name="prixMax"
            step="0.01"
            min="0"
            required
        >
        <button type="submit">Rechercher</button>
    </form>

</body>
</html>
