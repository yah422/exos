<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

// Exercice 7
$agekids = 10;
if ($agekids == "6" or $agekids =="7" ){
	echo "L'enfant qui a " . $agekids . " ans appartient à la catégorie << Poussin >> ";
} 

elseif ($agekids == "8" or $agekids == "9"){
	echo  "L'enfant qui a " . $agekids . " ans appartient à la catégorie << Pupille >> ";}

elseif ($agekids == "10" or $agekids == "11" ){
	echo "L'enfant qui a " . $agekids . " ans appartient à la catégorie << Minime >> ";}

elseif ($agekids >="12"){
	echo "L'enfant qui a " . $agekids . " ans appartient à la catégorie << Cadet >> ";}
else{
	echo "La categorie n'est pas gérée";}
    
    ?>
</body>
</html>