<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

//Exercice 13
$tableauDeNotes = array(10, 12, 8, 19, 3, 16, 11, 13, 9);

$moyenneNotes = array_sum($tableauDeNotes) / count($tableauDeNotes);

echo "Les notes obtenues par l'élève sont : " . implode(" ", $tableauDeNotes) . "\n";
echo "Sa moyenne générale est donc de : " . round($moyenneNotes, 2);


?>
</body>
</html>