<!DOCTYPE html>
<html>
<head>
    <title>Exemple de PHP</title>
</head>
<body>
    <h1>Exemple de page PHP</h1>

    <p>La date et l'heure actuelles sont : <?php echo date("d/m/Y H:i:s"); ?></p>

    <p>Vous pouvez également utiliser PHP pour effectuer des calculs :</p>
    <?php
    $nombre1 = 10;
    $nombre2 = 5;
    $somme = $nombre1 + $nombre2;
    $produit = $nombre1 * $nombre2;
    echo "La somme de $nombre1 et $nombre2 est égale à $somme.<br>";
    echo "Le produit de $nombre1 et $nombre2 est égale à $produit.<br>";
    ?>

    <p>Vous pouvez également créer des boucles et des structures conditionnelles :</p>
    <?php
    $numero = 7;
    if ($numero % 2 == 0) {
        echo "$numero est un nombre pair.";
    } else {
        echo "$numero est un nombre impair.";
    }

   


    ?>

</body>
</html>

