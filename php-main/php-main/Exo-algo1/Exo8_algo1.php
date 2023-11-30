<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    // Exercice 8
//-------------BOUCLE WHILE-------------
$x = 8;
$r = 10;

echo "\n\n La table de multiplication \n\n";

$i = 1;
while ($i <= $r) 
{
    echo  $x, " * ", $i, " = ", $x * $i, "\n";
    $i++;
}

// ---------- BOUCLE FOR --------------
$x = 1;
$r = 8;
for ($x = 1; $x <= 10; $x++) 
{
	echo $x . " * ". $r . " = ". $x * $r. "\n";
}

    ?>
</body>
</html>