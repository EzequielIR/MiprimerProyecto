<?php
    class Person{
        public $nombre;
        public $edad;
        public $domicilio;
        function __construct($nom,$ed,$dom)
        {
            $this->nombre=$nom;
            $this->edad=$ed;
            $this->domicilio=$dom;
        }
        function mostrarInfo(){
            return "Nombre: $this->nombre, Edad: $this->edad, domicilio: $this->domicilio. <br>";
        }
    }
    class regMedico extends Person{
        public $nomreg;
        public $enfer;
        public $fechaConsul;
        function __construct($nom,$ed,$dom,$numreg,$enfer,$fechaConsul)
        {
            parent::__construct($nom,$ed,$dom);
            $this->nomreg=$numreg;
            $this->enfer=$enfer;
            $this->fechaConsul=$fechaConsul;
        }
        function mostrarInf(){
            echo "Nombre: $this->nombre, Edad: $this->edad, Domicilio: $this->domicilio,
                Numero de Turno: $this->nomreg, Motivo de visita: $this->enfer, Fecha: $this->fechaConsul. ";
        }
    }
    $ob = new regMedico("Ezequiel",21,"Fransisco villa #32",12,"Gripa","23/05/2023");
    $ob->mostrarInf();
?>