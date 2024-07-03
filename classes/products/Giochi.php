<?php

class Giochi extends Prodotto {
    private $caratteristiche;
    private $dimensioni;

    public function __construct($animale, $nome, $prezzo, $foto, $caratteristiche, $dimensioni){
        parent::__construct($animale, $nome, $prezzo, $foto);
        $this->caratteristiche = $caratteristiche;
        $this->dimensioni = $dimensioni;
        
    }

    /**
     * return the multi type of the product.
     */
    public function getCaratteristiche(){
        return $this->caratteristiche;
    }

    /**
     * return the dimension of the product.
     */
    public function getDimensioni(){
        return $this->dimensioni;
    }
}