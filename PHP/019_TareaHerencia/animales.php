<?php
    class Animal{
        public $especie;
        public $region;
        function __construct($especie,$region)
        {
            $this->especie=$especie;
            $this->region=$region;
        }
    }
    class Carnivoro extends Animal{
        public $precaza;
        function __construct($especie,$region,$precaza)
        {
            parent::__construct($especie,$region);
            $this->precaza=$precaza;
        }
        function __toString()
        {
            return self::class.": El $this->especie que principalmente se encuentra en la región de $this->region caza principalmente $this->precaza.";
        }
    }
    class Hervivoro extends Animal{
        public $consumo;
        function __construct($especie,$region,$consumo)
        {
            parent::__construct($especie,$region);
            $this->consumo=$consumo;
        }
        function __toString()
        {
            return self::class.": El $this->especie que principalmente se encuentra en la región de $this->region suele consumir fruto o plantas como $this->consumo.";
        }
    }
    class Obnivoro extends Animal{
        public $plan;
        public $carn;
        function __construct($especie,$region,$plan,$carn)
        {
            parent::__construct($especie,$region);
            $this->plan=$plan;
            $this->carn=$carn;
        }
        function __toString()
        {
            return self::class.": El $this->especie que principalmente se encuentra en la región de $this->region puede consumir $this->plan y $this->carn.";
        }
    }
    $ob = new Carnivoro("León","sabanas africanas","cebras");
    echo $ob;
    echo "<hr>";
    $ob2 = new Hervivoro("León","sabanas africanas","bellotas o castañas");
    echo $ob2;
    echo "<hr>";
    $ob2 = new Obnivoro("Oso","la Sierra Madre Oriental en mexico","frutas, raíces, hierbas","pescado, roedores o alces");
    echo $ob2;
    echo "<hr>";
?>