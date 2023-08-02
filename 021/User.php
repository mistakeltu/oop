<?php

class User
{
    private $name;
    private $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function __get($property)
    {
        if ($property == 'name') {
            return $this->name;
        }
        if ($property == 'age') {
            return $this->age;
        }
    }

    public function hello()
    {
        return $this->name . ' says hello';
    }
}
