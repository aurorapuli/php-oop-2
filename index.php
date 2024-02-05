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


$prodotto1 = new Prodotto("www.gatto.png", "alimenti", 42);


// echo "Immagine: " . $prodotto1 -> getImmagine();
// echo "<br>";
// echo "Titolo: " . $prodotto1 -> getTitolo();
// echo "<br>";
// echo "Prezzo: " . $prodotto1 -> getPrezzoPrezzo();


var_dump($prodotto1);