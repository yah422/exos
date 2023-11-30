<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 7 - algo 2</title>
</head>
<body>

<?php

function genererCheckbox($elements)
{
    echo '<form method="post">';
    
    foreach ($elements as $option => $valeur) {
        echo "<input type='checkbox' name='$option' value='$valeur' > $valeur <br>";
    }

    echo '<input type="submit" name="valider" value="Valider">';
    echo '</form>';
}
$elements = array("choix1" => "choix 1 ", "choix2" => "choix 2 ", "choix3" => " choix 3");


genererCheckbox($elements);

?>

</body>
</html>
