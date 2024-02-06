<?php

class Food extends Prodotto {

    private $expireDate;

    public function __construct($immagine, $titolo, $prezzo, Genere $genere, $expireDate){

        $this -> setImmagine($immagine);
        $this -> setTitolo($titolo);
        $this -> setPrezzo($prezzo);

        $this -> setGenere($genere);

        $this -> setExpireDate($expireDate);
    }

    public function getExpireDate() {

        return $this -> expireDate;
    }
    public function setExpireDate($expireDate) {

        $this -> expireDate = $expireDate;
    }
}