<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>

     <?php

        require_once("db.php");
    ?> 
</head>
<body>

    <h1 class="text-center mb-5">Shop</h1>

    <h2 class="text-center mb-4">
        <?php
        echo $prodottoCane1 -> getName();
        ?>
    </h2>

    <ul class="d-flex justify-content-around mb-5">
        <?php 
        
        foreach ($cani as $cane){ 
        
        ?>

        <li>
            <?php
               echo "Immagine: " .$cane -> getImmagine();
               echo "<br>";
               echo  $cane -> getTitolo();
               echo "<br>";
               echo  "Prezzo: " . $cane -> getPrezzo() . "€";
            ?>
        </li>

        <?php
        }
        ?>
    </ul>

    <h2 class="text-center mb-4">
        <?php
        echo $prodottoGatto1 -> getName();
        ?>
    </h2>

    <ul class="d-flex justify-content-around">
        <?php 
        
        foreach ($gatti as $gatto){ 
        
        ?>

        <li>
            <?php
               echo "Immagine: " .$gatto -> getImmagine();
               echo "<br>";
               echo  $gatto -> getTitolo();
               echo "<br>";
               echo  "Prezzo: " . $gatto -> getPrezzo() . "€";
            ?>
        </li>

        <?php
        }
        ?>
    </ul>


    
</body>
</html>