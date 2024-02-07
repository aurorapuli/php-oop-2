<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>

     <?php

          require_once(__DIR__ . "/db.php");
    ?> 
</head>
<body>

    <h1 class="text-center mb-5">Shop</h1>


    <ul class="d-flex justify-content-around align-items-end mb-5">
        <?php 
        
        foreach ($foods as $food){ 
        
        ?>

        <li>
            <img src="<?php echo $food -> getImmagine(); ?>" alt="" style="width:200px">
            <?php
            //    echo $food -> getImmagine();
               echo "<br>";
               echo  $food -> getTitolo();
               echo "<br>";
               echo  $food -> getPrezzo() . "€";
               echo "<br>";
               echo "Genere: " . $food -> getGenere() -> getName();
               echo "<br>";
               echo "Data di scadenza: " . $food -> getExpireDate();

            
            ?>
        </li>

        <?php
        }
        ?>
    </ul>

    <ul class="d-flex justify-content-around">
        <?php 
        
        foreach ($accessori as $accessorio){ 
        
        ?>

        <li>
            <img src="<?php echo $accessorio -> getImmagine(); ?>" alt="" style="width:200px">
            <?php
                echo "<br>";
                echo  $accessorio -> getTitolo();
                echo "<br>";
                echo  $accessorio -> getPrezzo() . "€";
                echo "<br>";
                echo "Genere: " . $accessorio -> getGenere() -> getName();
                echo "<br>";
                echo "Tipologia: " . $accessorio -> getTipology();
            ?>
        </li>

        <?php
        }
        ?>
    </ul>


    
</body>
</html>