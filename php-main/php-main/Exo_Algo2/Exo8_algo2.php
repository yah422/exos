<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Exo 8 - Algo 2 </title>
</head>
<body>
    <?php

    function afficherImage($cheminImage, $nombreFois)
    {
        for ($i = 0; $i < $nombreFois; $i++) {
            echo "<img src=\"$cheminImage\" alt=\"Image\"> \n";
        }
    }

    $cheminDeLImage = "http://my.mobirise.com/data/userpic/764.jpg";
    $nombreDeFois = 4;

    afficherImage($cheminDeLImage, $nombreDeFois);

    ?>

</body>
</html>