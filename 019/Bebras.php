<?php

class Bebras
{
    //variables - properties

    private $spalva = 'ruda';


    public $svoris;

    // public function plaukia()
    // {
    //     echo '<br>' . $this->spalva . ' bebre plaukia';
    // }

    // public function kokiaSpalva()
    // {
    //     return $this->spalva;
    // }

    public function __get($prop)
    {
        if ($prop == 'amzius') {
            return rand(1, 10);
        }
        return $this->$prop;
    }

    public function __set($name, $value)
    {
        return $this->name = $value;
    }

    public function keistiSpalva($spalva) //seteris
    {
        if (!in_array($spalva, ['juoda', 'ruda', 'balta'])) {
            return;
        }
        $this->spalva = $spalva;
    }
}
