<?php

class Accessories extends Prodotto {

    private $tipology;

    public function __construct($immagine, $titolo, $prezzo, Genere $genere, $tipology){

        $this -> setImmagine($immagine);
        $this -> setTitolo($titolo);
        $this -> setPrezzo($prezzo);

        $this -> setGenere($genere);

        $this -> setTipology($tipology);
    }

    public function getTipology(){
        return $this -> tipology;
    }

    public function setTipology($tipology){
        $this -> tipology = $tipology;
    }
}