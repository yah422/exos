<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo9 - Algo2</title>
</head>
<body>
    <?php

function afficherRadio($valeurs)
{
    foreach ($valeurs as $valeur) {
        echo "<input type='radio' name='genre' value='$valeur'> $valeur <br>";
    }
}

$nomsRadio = array("Masculin", "Féminin", "Autre");

afficherRadio($nomsRadio);

?>

</body>
</html>