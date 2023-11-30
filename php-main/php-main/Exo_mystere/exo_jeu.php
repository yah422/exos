<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $tableau = range("a","z");
    $dateNaissance = "1802-04-26";
    $dateDecee = "1885-05-22";

    $ageDeDecee = getcalculerAge($dateNaissance, $dateDecee);
    echo $ageDeDecee; 
    
    getcalculerAge($dateNaissance, $dateDecee) {
            $dateNaissance = new DateTime($dateNaissance);
            $dateDecee = new DateTime($dateDecee);
            $difference = $dateNaissance->diff($dateDecee);
            return $difference->y;
        }
    
    echo $ageDeDecee;





    ?>
</body>
</html>