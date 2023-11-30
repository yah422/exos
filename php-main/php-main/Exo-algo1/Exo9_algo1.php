<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    // Exercice 9
$age = 32;
$sexe = "F";
echo "Age : ". $age;
echo "\n";
echo "Sexe : ". $sexe;
echo "\n";
if ($age<18 and $sexe == "F")
{
	echo "non imposable";}
elseif ($age >= 18 or $age<= 35 and $sexe== "F")
{
	echo "La personne est imposable";
}
elseif ($age > 20 and $sexe == "M")
{
	echo "La personne est imposable";
}
else {
	echo "Non imposable";
}

    ?>
</body>
</html>