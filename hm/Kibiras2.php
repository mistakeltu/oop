<!-- (STATIC) Sukurkite klasę kaip pirmame uždavinyje ir pavadinkite Kibiras2. Patobulinkite pridėdami statinę privačią savybę akmenuKiekisVisuoseKibiruose. Ši savybė turi rodyti kiek akmenų surinkta visuose Kibiras2 objektuose. Sukurkite geterį objekte, ir statinį geterį klasėje, kuris išvestų akmenuKiekisVisuoseKibiruose reikšmę. Sukurkite tris kibirus ir pademonstruokite veikimą. -->

<?php

class Kibiras2
{
    private static $akmenuKiekisVisuoseKibiruose = 0;

    public static function add($akmenys)
    {
        self::$akmenuKiekisVisuoseKibiruose += $akmenys;
    }

    public static function gautiAkmenuKiekiVisuoseKibiruose()
    {
        return self::$akmenuKiekisVisuoseKibiruose;
    }
}
