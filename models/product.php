<?php


class Prodotto {

    private $immagine;
    private $titolo;
    private $prezzo;

    private $genere;

    public function __construct ( $immagine, $titolo, $prezzo, Genere $genere){

        $this -> setImmagine($immagine);
        $this -> setTitolo($titolo);
        $this -> setPrezzo($prezzo);

        $this -> setGenere($genere);
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

    public function getGenere() {

        return $this -> genere;
    }
    public function setGenere(Genere $genere) {

        $this -> genere = $genere;
    }
}