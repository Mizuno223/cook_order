<?php
class Menu 
{
    public $name;

    function __construct($name) {
        $this->name = $name;
    }
    function hello() {
        echo '私は'.$this->name.'です'."\n";
    }
}
?>