<?php

class Continet
{
    public $nameContinent;

    public function __construct($continent)
    {
        $this->nameContinent = $continent;
    }

    public function __getMyCurrectlyLocation()
    {
        echo "Mi trovo in " . $this->nameContinent . ",";
    }
}


class Country extends Continet
{
    public $nameCountry;

    public function __construct($continent, $country)
    {
        parent::__construct($continent);

        $this->nameCountry = $country;
    }
    public function __getMyCurrectlyLocation()
    {
        parent::__getMyCurrectlyLocation();

        echo $this->nameCountry . ",";
    }
}


class Region extends Country
{
    public $nameRegion;

    public function __construct($continent, $country, $region)

    {
        parent::__construct($continent, $country);

        $this->nameRegion = $region;
    }
    public function __getMyCurrectlyLocation()
    {
        parent::__getMyCurrectlyLocation();

        echo $this->nameRegion . ",";
    }
}


class Province extends Region
{
    public $nameProvince;

    public function __construct($continent, $country, $region, $province)
    {
        parent::__construct($continent, $country, $region);

        $this->nameProvince = $province;
    }
    public function __getMyCurrectlyLocation()
    {
        parent::__getMyCurrectlyLocation();

        echo $this->nameProvince . ",";
    }
}


class City extends Region
{
    public $nameCity;

    public function __construct($continent, $country, $region, $province, $city)
    {
        parent::__construct($continent, $country, $region, $province);

        $this->nameCity = $city;
    }
    public function __getMyCurrectlyLocation()
    {
        parent::__getMyCurrectlyLocation();

        echo $this->nameCity . ",";
    }
}


class Street extends City
{

    public $nameStreet;

    public function __construct($continent, $country, $region, $province, $city, $street)
    {
        parent::__construct($continent, $country, $region, $province, $city);

        $this->nameStreet = $street;
    }
    public function __getMyCurrectlyLocation()
    {
        parent::__getMyCurrectlyLocation();

        echo $this->nameStreet . ",";
    }
}

$myLocation = new Street("Europa", "Italia", "Emilia-Romagna", "RE", "Correggio", "Via,Paolo Borsellino N°8");

$myLocation->__getMyCurrectlyLocation();
