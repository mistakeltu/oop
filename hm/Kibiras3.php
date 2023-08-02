<!-- (EXTENDS) Sukurkite klasę kaip pirmame uždavinyje ir pavadinkite Kibiras3. Sukurkite dar vieną klasę KibirasNePo1, kuri extendina klasę Kibiras3. KibirasNePo1 turi naudoti visus tėvinius metodus, bet metodas Prideti1Akmeni() turi pridėti ne vieną o atsitiktinį akmenų kiekį nuo 2 iki 5. Sukurkite KibirasNePo1 objektą ir pademonstruokite veikimą. -->

<?php

class Kibiras3
{
    private $akmenuKiekis = 0;

    public function __construct()
    {
        $this->akmenuKiekis;
    }

    public function Prideti1Akmeni()
    {
        $rand = rand(2, 5);
        $this->akmenuKiekis += $rand;
    }

    public function __get($prop)
    {
        if ($prop === 'akmenuKiekis') {
            return $this->akmenuKiekis;
        }
    }
}
