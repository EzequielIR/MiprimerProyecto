<?php
    class Transporte{
        public $modelo;
        public $marca;
        public $matricula;
        function __construct($modelo,$marca,$matricula)
        {
            $this->modelo=$modelo;
            $this->marca=$marca;
            $this->matricula=$matricula;
        }
    }
    class CamionCarga extends Transporte{
        public $chofer;
        public $capacidad;
        public $material;
        function __construct($modelo,$marca,$matricula,$chofer,$capacidad,$material)
        {
            parent::__construct($modelo,$marca,$matricula);
            $this->chofer=$chofer;
            $this->capacidad=$capacidad;
            $this->material=$material;
        }
        function __toString()
        {
            return self::class.": Modelo: $this->modelo, Marca: $this->marca, Matricula: $this->matricula, Chofer: $this->chofer, Capacidad: $this->capacidad, Material: $this->material.";
        }
    }
    class CamionPasajeros extends Transporte{
        public $chofer;
        public $cantPer;
        public $costovol;
        function __construct($modelo,$marca,$matricula,$chofer,$cantPer,$costovol)
        {
            parent::__construct($modelo,$marca,$matricula);
            $this->chofer=$chofer;
            $this->cantPer=$cantPer;
            $this->costovol=$costovol;
        }
        function __toString()
        {
            return self::class.": Modelo: $this->modelo, Marca: $this->marca, Matricula: $this->matricula, Chofer: $this->chofer, Capacidad: $this->cantPer, Costo voleto: $this->costovol.";
        }
    }
    class LanchaPesca extends Transporte{
        public $lugardepesca;
        public $tiempo;
        function __construct($modelo,$marca,$matricula,$lugardepesca,$tiempo)
        {
            parent::__construct($modelo,$marca,$matricula);
            $this->lugardepesca=$lugardepesca;
            $this->tiempo=$tiempo;
        }
        function __toString()
        {
            return self::class.": Modelo: $this->modelo, Marca: $this->marca, Matricula: $this->matricula, Ubicación de uso: $this->lugardepesca, Tiempo de uso: $this->tiempo.";
        }
    }
    $ob = new CamionCarga("Trailer","DODGE","3E2WD","Ezequiel","10 Toneladas","Cemento");
    echo $ob;
    echo "<hr>";
    $ob2 = new CamionPasajeros("Autobus","Mercedes Benz","4U34I","Ezequiel","10 Personas","100");
    echo $ob2;
    echo "<hr>";
    $ob3 = new LanchaPesca("205 Sport","Sea Ray","34FTGR","Presa San José: San Luis Potosí","3 dísas");
    echo $ob3;
?>