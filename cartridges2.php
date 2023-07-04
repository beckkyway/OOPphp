<?php

class Cartridges
{
    private $carti;
    public function __construct(int $carti)
    {

        $this->carti = $carti;
    }

    public function getCarti()
    {
        print($this->carti);

        return $this;
    }

    public function setCarti($carti)
    {

        $this->carti = $carti;
        return $this;
    }
}
class BoxCartridges extends Cartridges
{
    public function __construct(int $carti)
    {
        $this->validate($carti);
        parent::__construct($carti);
    }
    public function setCarti($carti)
    {

        $this->validate($carti);
        parent::setCarti($carti);

        return $this;
    }

    public function validate($carti)
    {
        if ($carti < 1) {
            throw new Exception("число должно быть больше 0", 1);
        }
    }
}

$quantity = new BoxCartridges(200);
$quantity->getCarti()->setCarti(-100)->getCarti();
