<?php


class Prodotto {

    private $immagine;
    private $titolo;
    private $prezzo;

    private $genere;

    use Discount;


    public function __construct ( $immagine, $titolo, $prezzo, Genere $genere, $discount){

        $this -> setImmagine($immagine);
        $this -> setTitolo($titolo);
        $this -> setPrezzo($prezzo);

        $this -> setGenere($genere);
        $this -> setDiscount($discount);
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


        if (!is_string($titolo) || strlen($titolo) < 3) 
        throw new Exception("'$titolo' is not valid title");

        $this -> titolo = $titolo;
    }

    public function getPrezzo() {

        return $this -> prezzo;
    }
    public function setPrezzo($prezzo) {

        $this -> prezzo = $prezzo;
    }

    public function getFullPrezzo() {

        return $this -> getPrezzo() / 100 * (100 - $this -> getDiscount());
    }

    public function getGenere() {

        return $this -> genere;
    }
    public function setGenere(Genere $genere) {

        $this -> genere = $genere;
    }
}