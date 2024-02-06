<?php
  // REQUIRE
  require_once(__DIR__ . "/models/genere.php");
  require_once(__DIR__ . "/models/product.php");
  require_once(__DIR__ . "/models/food.php");
  require_once(__DIR__ . "/models/accessories.php");



$crocchette = new Food("https://static.zoomalia.com/prod_img/39916/lm_58930bb3825e8f631cc6075c0f87bb4978c1679569075.jpg", "Crocchette", 10, "Cani", "10/10/2024");

$pesce = new Food("https://www.pacopetshop.it/11650-thickbox_default/leonardo-ricco-di-pesce-di-mare-cibo-umido-per-gatti.jpg", "Pesce", 13, "Gatti", "10/04/2024");

$foods = [$crocchette, $pesce];

$guinzaglio = new Accessories("https://static.zoomalia.com/prod_img/39916/lm_58930bb3825e8f631cc6075c0f87bb4978c1679569075.jpg", "Guinzaglio", 6, "Cani", "Accessorio");

$cuccia = new Accessories("https://www.ilverdemondo.it/public/catalog/product/medium/guinzaglio-per-cani-flexi-000.jpg", "Cuccia", 18, "Cani", "Accessorio");

$accessori = [$guinzaglio, $cuccia];



var_dump($crocchette);