<?php
class Menu 
{
    public $name;

    function __construct() {
        echo '１つのメニューが作られました'."\n";
    }
    function hello() {
        echo '私は'.$this->name.'です'."\n";
    }
}

$curry = new Menu();
$curry->name = 'curry';
$curry->hello();

$pasta = new Menu();
$pasta->name = 'pasta';

//echo $curry->name;
echo "\n";
?>