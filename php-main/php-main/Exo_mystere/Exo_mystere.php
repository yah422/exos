<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $tableau = range("A","Z");
    $dateNaissance = "1802-04-26";
    $dateDecee = "1885-05-22";
    $mystere = [];

    $ageDeDecee = getcalculerAge($dateNaissance, $dateDecee);
    
    function getcalculerAge($dateNaissance, $dateDecee){
            $dateNaissance = new DateTime($dateNaissance);
            $dateDecee = new DateTime($dateDecee);
            $difference = $dateNaissance->diff($dateDecee);
            return $difference->y;
        }
    
    echo $ageDeDecee;
    $ageDeDecee = array(8,3);
    echo "\n";
    
    $valeur = array_sum($ageDeDecee);
    echo "\n";
    
    echo $tableau[$valeur];
    echo "\n";
    
    $lettre1 = $tableau[$valeur-6];
    
    $mystere[] = $lettre1;
    echo "\n";
    
    echo $lettre1;
    echo "\n";
    $lettre2 = $tableau[7];
    $mystere[] = $lettre2;
    
    echo $lettre2;
    echo "\n";
    
    $N = array(2,0,2,2);
    echo array_sum($N);
    echo "\n";
    
    $lettre3 = $tableau[6];
    $mystere[] = $lettre3;
    echo $lettre3;
    echo "\n";
    
    $stageName = "BONO";
    preg_split("//",$stageName);
    echo substr($stageName,0,1);
    $lettre4 = substr($stageName,0,1);
    $mystere[] = $lettre4;
    echo "\n";
    
    $lettre5 = "U";
    $mystere[] = $lettre5;
    echo "\n";
    
    $lettre6 = $tableau[2];
    $mystere[] = $lettre6;
    echo $lettre6;
    echo "\n";
    
    $monopoly = "RUEDELAPAIX";
    echo strrev($monopoly);
    echo "\n";
    echo strrev($monopoly)[1];
    $lettre7 = strrev($monopoly)[1] ;
    $mystere[] = $lettre7;
    echo "\n";
    echo strrev($monopoly)[5];
    $lettre8 = strrev($monopoly)[5] ;
    $mystere[] = $lettre8;
    $film = "TEMINATOJUDGMENTDAY";
    echo "\n";
    function lettrePlusPresente($chaine) {

        $chaine = strtolower($chaine);
        $frequenceLettres = array();
        for ($i = 0; $i < strlen($chaine); $i++) {
            $lettre = $chaine[$i];
            if (ctype_alpha($lettre)) {
                if (array_key_exists($lettre, $frequenceLettres)) {
                    $frequenceLettres[$lettre]++;
                } else {
                    $frequenceLettres[$lettre] = 1;
                }
            }
        }

        $lettreMaxFrequence = array_search(max($frequenceLettres), $frequenceLettres);
     
        return $lettreMaxFrequence;
    }
    $chaine1 = "TEMINATOJUDGMENTDAY";
    $lettreResultat = lettrePlusPresente($chaine1);
    echo $lettreResultat;
    $mystere[] = $lettreResultat;
    $secretKey = [0, 6, 2, 1, 8, 5, 7, 4, 3];

?>
</body>
</html>