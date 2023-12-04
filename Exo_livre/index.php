<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Livres - POO </title>
</head>
<body>
<?php
// ON MET EN PLACE REQUIRE POUR FAIRE LE LIEN ENTRE LES DIFFERENTS FICHIERS
    require("Auteur.php");
    require("Livre.php");
// ON AJOUTE L'OBJET AUTEUR DANS UN PREMIER TEMPS CAR IL EST COMPRIS DANS L'OBJET LIVRE
    $auteur1 = new Auteur("King ","Stephen ");
// MISE EN PLACE DES OBJETS LIVRES DU MEME AUTEURS
    $livre1 = new Livre("Ca ","1138 ","1986 ",20, $auteur1 );

    $livre2 = new Livre("Simetierre ","374 ","1983 ",15, $auteur1);

    $livre3 = new Livre("Le Fléau ","823 ","1978 ",14, $auteur1);

    $livre4 = new Livre("Shinning ","447 ","1977 ",16, $auteur1);

// AFFICHAGE DE LA BIBLIOGRAPHIE
    $auteur1->afficherBibliographie();

    ?>
</body>
</html>