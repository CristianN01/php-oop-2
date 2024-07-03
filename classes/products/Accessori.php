<?php

class Accessorio extends Prodotto {
    private $materiale;
    private $dimensioni;

    public function __construct($animale, $nome, $prezzo, $foto, $materiale, $dimensioni){
        parent::__construct($animale, $nome, $prezzo, $foto);
        $this->materiale = $materiale;
        $this->dimensioni = $dimensioni;
    }

    /**
     * return the material of the product.
     *
     * @return void
     */
    public function getMateriale() {
        return $this->materiale;
    }

    /**
     * return the dimension of the product.
     *
     * @return void
     */
    public function getDimensioni() {
        return $this->dimensioni;
    }
}