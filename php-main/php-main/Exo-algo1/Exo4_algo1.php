<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    // Exerice 4
$palindrome = "engagelejeuquejelegagne";
$reverse = strrev($palindrome);

echo $reverse . "\n"; 
echo $palindrome . "\n"; 
if ($reverse == $palindrome){
	echo "\nLa phrase << Engage le jeu que je le gagne >> est palindrome";
}

    ?>
</body>
</html>