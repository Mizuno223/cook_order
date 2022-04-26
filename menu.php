<?php
class Menu 
{
    public $name;
    public $price;
    public $image;

    function __construct($name, $price, $image) {
        $this->name = $name;
        $this->price = $price;
        $this->image = $image;
    }
    function getTaxIncludedPrice() {
        return floor($this->price * 1.1);
    }
}
?>