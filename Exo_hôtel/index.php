<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Index-php </title>
</head>
<body>
    <?php

// ------ ON MET EN PLACE REQUIRE POUR FAIRE LE LIEN ENTRE LES DIFFERENTS FICHIERS -------
    require("reservation.php");
    require("Hotel.php");
    require("client.php");
    require("chambre.php");

// ------------------ CREATION DE DIFFERENTES CLASS --------------------
    $client1 = new Client("Saidi ","Asma ","17","01-01-2021","12-01-2021");
    $client2 = new Client("Mr ","Joyeux ","3","23-12-2023","01-01-2023");
    $client3 = new Client("Saidi ", "Asma ","23","13-06-2022","24-06-2022");

    $Hilton = new Hotel("","10 route de la gare, Strabourg ",30, 3, 27);
    // $Regent = new Hotel("Paris ", 30 ,3 ,27);

// -------------------- AFFICHAGE DES INFOS ------------------
    ?> 

    <h1> Hilton **** Strasbourg </h1>

    <?php
    echo $Hilton->afficherInfos();
    echo "<br>";
    ?>

    <h1> Réservation de l'hôtel Hilton **** Strasbourg </h1>
    
    <?php
    echo "<br>";
    echo $client1->afficherInformation();
    echo "<br>";
    echo $client2->afficherInformation();
    echo "<br>";
    echo $client3->afficherInformation();




    ?>
</body>
</html>