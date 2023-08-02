<?php

class Kibiras1
{
    private $akmenuKiekis = 0;


    public function prideti1Akmeni()
    {
        return $this->akmenuKiekis++;
    }

    public function pridetiDaugAkmenu($kiekis)
    {
        return $this->akmenuKiekis += $kiekis;
    }

    public function kiekPririnktaAkmenu()
    {
        return $this->akmenuKiekis;
    }
}
