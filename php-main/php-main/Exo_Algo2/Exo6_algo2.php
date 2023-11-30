<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo6 - Algo2</title>


</head>
<body>
    <?php

    function alimenterListeDeroulante($elements){
        echo "<select name='elements'>";
        foreach ($elements as $element) {
?>
            <!-- integrer un morceau de php dans du html et echo / methode d'Alexandre -->
            <option value="<?= $element ?>"><?= $element ?></option>
<?php

// deuxième facon de faire :
// echo "<option value='$element'>$element</option>";
        }
        echo "</select>";

    }

    $civiliteTitres = array("Monsieur","Madame","Mademoiselle");
    alimenterListeDeroulante($civiliteTitres);

    ?>


</body>
</html>