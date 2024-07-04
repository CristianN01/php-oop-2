<?php

class Animale {
    private $species;

    public function __construct($species){
        $this->species = $species;
        
    }

    /**
     * return the species of the animal.
     */
    public function getSpecies(){
        return $this->species;
    }
}