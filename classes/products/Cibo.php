<?php

class Cibo extends Prodotto {
    private $peso;
    private $ingredienti;

    public function __construct($animale, $nome, $prezzo, $foto, $peso, $ingredienti){
        parent::__construct($animale, $nome, $prezzo, $foto);
        $this->peso = $peso;
        $this->ingredienti = $ingredienti;
        
    }

    /**
     * return the weight of the product.
     *
     * @return void
     */
    public function getPeso(){
        return $this->peso;
    }

    /**
     * return how is made the ingredient to eat.
     *
     * @return void
     */
    public function getIngredienti(){
        return $this->ingredienti;
    }
}