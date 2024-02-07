<?php
  // REQUIRE
  require_once(__DIR__ . "/models/genere.php");
  require_once(__DIR__ . "/models/product.php");
  require_once(__DIR__ . "/models/food.php");
  require_once(__DIR__ . "/models/accessories.php");

// GENERE

$gen_cat = new Genere("Gatto");
$gen_dog = new Genere("Cane");

$crocchette = new Food("https://m.media-amazon.com/images/I/81UsafOlWsL.jpg", "Crocchette", 10, $gen_dog, "10/10/2024");


// PRODOTTI

$pesce = new Food("https://www.pacopetshop.it/11650-thickbox_default/leonardo-ricco-di-pesce-di-mare-cibo-umido-per-gatti.jpg", "Pesce", 13, $gen_cat, "10/04/2024");

$foods = [$crocchette, $pesce];

$guinzaglio = new Accessories("https://oasipetshop.com/cdn/shop/files/k9red.jpg?v=1701596318", "Guinzaglio", 6, $gen_dog, "Accessorio");

$cuccia = new Accessories("https://croci.net/wp-content/uploads/2020/09/Cuccia_per_cani_Chalet.jpg", "Cuccia", 18, $gen_dog, "Accessorio");

$accessori = [$guinzaglio, $cuccia];

