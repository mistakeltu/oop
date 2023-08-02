<?php

require __DIR__ . '/User.php';

class Customer extends User
{
    private $balance;

    public function __construct($name, $age, $balance)
    {
        parent::__construct($name, $age);
        $this->balance = $balance;
    }

    public function __get($prop)
    {
        if ($prop === 'balance') {
            return $this->balance;
        }
        if ($prop === 'name') {
            return parent::__get('name');
        }
        if ($prop === 'age') {
            return parent::__get('age');
        }
    }

    public function balance()
    {
        return $this->name . 'at his age of ' . $this->age . ' has in his account ' . $this->balance;
    }
}
