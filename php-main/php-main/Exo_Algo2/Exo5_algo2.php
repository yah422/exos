<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Exo5 - Algo2 </title>
</head>
<body>

<?php

function afficherInput($nomsInput){
    foreach($nomsInput as $nomInput) {
        echo "<label for='$nomInput'> $nomInput </label> <br>";
        echo "\n";
        echo "<input type='text' id='$nomInput' name='$nomInput'>";
    }
}

$nomsInput = array("Nom \n", "Prénom \n", "Ville \n");
afficherInput($nomsInput);

?>

</body>
</html>