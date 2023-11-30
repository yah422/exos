<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    // Exercice 12
function SaluerParLangue($prenom, $langue) 
{
    switch ($langue) 
    {
        case 'francais':
            return "Salut $prenom";
        case 'anglais':
            return "Hello $prenom";
        case 'espagnol':
            return "Hola $prenom";
        default:
            return "Bonjour $prenom";
    }
}

$tableau = array("Mickaël" => "francais", "Virgile" => "espagnol", "Marie-Claire" => "anglais");

ksort($tableau);

foreach ($tableau as $prenom => $langue) {
    echo SaluerParLangue($prenom, $langue) . "\n";
}

    ?>
</body>
</html>