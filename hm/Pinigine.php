<?php

class Pinigine
{
    private $popieriniaiPinigai = 0;
    private $metaliniaiPinigai = 0;

    public function ideti($kiekis)
    {
        if ($kiekis < 2) {
            return $this->metaliniaiPinigai += $kiekis;
        }
        return $this->popieriniaiPinigai += $kiekis;
    }

    public function skaiciuoti()
    {
        echo 'Is viso metaliniu pinigu yra: ' . $this->metaliniaiPinigai;
        echo '<br>Is viso popieriniu pinigu yra: ' . $this->popieriniaiPinigai;
    }
}
