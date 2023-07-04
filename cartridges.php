<?php

class Cartridges
{
    private $carti;
    public function __construct(int $carti)
    {
        $this -> validate($carti);
        $this -> carti = $carti;
    }

    public function getCarti()
    {
        print($this->carti);

        return $this;
    }

    public function setCarti($carti)
    {
        $this -> validate($carti);
        $this->carti = $carti;
        return $this;
        
    }

    public function validate($carti){
        if($carti < 1){
            throw new Exception("число должно быть больше 0", 1);
        }
    }
}

$quantity = new Cartridges(10);
$quantity -> getCarti()->setCarti(5)->getCarti();

