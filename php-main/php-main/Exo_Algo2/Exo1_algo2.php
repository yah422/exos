<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
        function convertirMajRouge($texte)
        {
            echo "<p style='color:red'>". strtoupper($texte)."</p>";
    
        }
        
       convertirMajRouge(" Mon texte en parametre ");
    ?>
</body>
</html>