<?php
class Product{
    public function __construct(private $naam,private $beschrijving,private $prijs){}
    public function setName(string $naam){
        $this->naam = $naam;
    }
    public function getName(){return $this->naam;
    }
}


?>