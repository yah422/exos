<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Exo10 - Algo2</title>
</head>
<body>
<?php

function afficherRadio($valeurs)
{
    foreach ($valeurs as $valeur) {
        echo "<input type='radio' name='genre' value='$valeur'> $valeur";
    }
}

function afficherChamp($nom, $label)
{
    echo "<label for='$nom'>$label</label>";
    echo "<input type='text' id='$nom' name='$nom'><br>";
}

function afficherFormulaire($champs, $listeFormations)
{
    foreach ($champs as $nom => $label) {
        afficherChamp($nom, $label);
    }

    echo '<label for="sexe"> Sexe :</label>';
    $genres = array("Monsieur", "Madame", "Mademoiselle");
    afficherRadio($genres);
    echo '<br>';

    echo '<label for="formation"> Formation : </label>';
    echo '<select id="formation" name="formation">';
    foreach ($listeFormations as $formation) {
        echo "<option value='$formation'>$formation</option>";
    }
    echo '</select><br>';

    echo '<input type="submit" value="Valider">';
}

$tableauFormulaire = array('nom' => 'Nom :<br>','prenom' => 'Prénom :<br>','email' => 'Email :<br>','ville' => 'Ville :<br>',);

$listeFormations = array('Développeur Logiciel','Designer web','Intégrateur','Chef de projet');

afficherFormulaire($tableauFormulaire, $listeFormations);

?>

    
</body>
</html>