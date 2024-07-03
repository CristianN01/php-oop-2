<?php

class Prodotto {
    private $animale;
    private $nome;
    private $prezzo;
    private $foto;

    public function __construct($animale, $nome, $prezzo, $foto){
        $this->animale = $animale;
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->foto = $foto;
        
    }

    /**
     * Return type of animal
     *
     * @return void
     */
    public function getAnimale() {
        return $this->animale;
    }

    /**
     * return animal name.
     *
     * @return void
     */
    public function getNome() {
        return $this->nome;
    }
    
    /**
     * return price.
     *
     * @return void
     */
    public function getPrezzo() {
        return $this->prezzo;
    }

    /**
     * return image of the product.
     *
     * @return void
     */
    public function getFoto() {
        return $this->foto;
    }
}