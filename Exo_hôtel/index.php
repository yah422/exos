<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Index-php </title>
</head>
<body>
    <?php

// ON MET EN PLACE REQUIRE POUR FAIRE LE LIEN ENTRE LES DIFFERENTS FICHIERS
    require("reservation.php");
    require("Hotel.php");
    require("client.php");
    require("chambre.php");

    $client1= new Client("Saidi ","Asma ","12 rue de la folie ","07.65.45.34.51");

    $Hilton = new Hotel("Hilton ","10 route de la gare, Strabourg ",30, 3, 27);
    echo $Hilton->afficherInfos();
    echo "<br>";
    echo $client1->afficherInformation();


    ?>
</body>
</html>