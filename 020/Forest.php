<?php

class Forest

{
    private $area, $treesCount, $title;

    private static $animalsCount = 100;

    public static function addAnimals()
    {
        $count = rand(20, 40);
        self::$animalsCount += $count;
        echo "<br>$count animals added";
    }

    public function __construct($area, $title)
    {
        $this->area = $area;
        $this->treesCount = $area * rand(10, 100);
        $this->title = $title;
    }

    public function __destruct()
    {
        echo '<br>Forests ' . $this->title . ' bum bum' . "<br>Animals left:" . self::$animalsCount . '<br>';
    }

    public function kill()
    {
        $kill = rand(1, 10);
        self::$animalsCount -= $kill;
        echo "$kill animals";
    }

    public function cut()
    {
        $this->treesCount -= rand(500, 1000);
        echo "$this->treesCount trees cut<br>";
    }

    public function __get($prop)
    {
        if ($prop == 'area') {
            return $this->area . ' km2';
        }
        if ($prop == 'treesCount') {
            return $this->treesCount . ' trees';
        }
    }
}
