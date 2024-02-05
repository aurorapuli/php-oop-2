<?php

class Prodotto {

    private $immagine;
    private $titolo;
    private $prezzo;

    public function __construct ( $immagine, $titolo, $prezzo){

        $this -> setImmagine($immagine);
        $this -> setTitolo($titolo);
        $this -> setPrezzo($prezzo);
    }

    public function getImmagine() {

        return $this -> immagine;
    }
    public function setImmagine($immagine) {

        $this -> immagine = $immagine;
    }

    public function getTitolo() {

        return $this -> titolo;
    }
    public function setTitolo($titolo) {

        $this -> titolo = $titolo;
    }

    public function getPrezzo() {

        return $this -> prezzo;
    }
    public function setPrezzo($prezzo) {

        $this -> prezzo = $prezzo;
    }
}


class Genere extends Prodotto{


    private $name;

    public function __construct ( $immagine, $titolo, $prezzo, $name){

        $this -> setImmagine($immagine);
        $this -> setTitolo($titolo);
        $this -> setPrezzo($prezzo);

        $this -> setName($name);
    }

    public function getName() {

        return $this -> name;
    }
    public function setName($name) {

        $this -> name = $name;
    }


}


$prodottoGatto1 = new Genere("www.crocchette.png", "Crocchette", 10, "Gatto");
$prodottoGatto2 = new Genere("www.pollo.png", "Pollo", 10, "Gatto");
$prodottoGatto3 = new Genere("www.pesce.png", "Pesce", 10, "Gatto");


$gatti = [$prodottoGatto1, $prodottoGatto2, $prodottoGatto3];

$prodottoCane1 = new Genere("www.crocchette.png", "Crocchette", 10 , "Cane");
$prodottoCane2 = new Genere("www.pollo.png", "Pollo", 10 , "Cane");
$prodottoCane3 = new Genere("www.pesce.png", "Pesce", 10 , "Cane");


$cani = [$prodottoCane1, $prodottoCane2, $prodottoCane3];




// var_dump($prodottoCane1);

// echo "<br>";
// echo "<br>";
// echo "<br>";


// echo "Immagine: " . $prodottoCane1 -> getImmagine();
// echo "<br>";
// echo "Titolo: " . $prodottoCane1 -> getTitolo();
// echo "<br>";
// echo "Prezzo: " . $prodottoCane1 -> getPrezzo();