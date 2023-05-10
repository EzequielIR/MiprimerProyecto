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
    class RegistroDeConsulta extends Person{
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
            echo self::class.": Nombre: $this->nombre, Edad: $this->edad, Domicilio: $this->domicilio,
                Numero de Turno: $this->nomreg, Motivo de visita: $this->enfer, Fecha: $this->fechaConsul. ";
        }
    }
    class RegistroDeAlumno extends Person{
        public $grupo;
        public $semestre;
        function __construct($nom,$ed,$dom,$grupo,$semestre)
        {
            parent::__construct($nom,$ed,$dom);
            $this->grupo=$grupo;
            $this->semestre=$semestre;
        }
        function __toString()
        {
            return self::class.": Nombre: $this->nombre, Edad: $this->edad, Domicilio: $this->domicilio
            , Grupo: $this->grupo, Semestre: $this->semestre.";
        }
    }
    class RegistroDePersonal extends Person{
        public $Sueldo;
        public $diaha;
        function __construct($nom,$ed,$dom,$Sueldo,$diaha)
        {
            parent::__construct($nom,$ed,$dom);
            $this->Sueldo=$Sueldo;
            $this->diaha=$diaha;
        }
        function __toString()
        {
            return self::class.": Nombre: $this->nombre, Edad: $this->edad, Domicilio: $this->domicilio
            , Salario semanal: $this->Sueldo, Días habiles: $this->diaha.";
        }
    }

    $ob = new RegistroDeConsulta("Ezequiel",21,"Fransisco villa #32",12,"Gripa","23/05/2023");
    $ob->mostrarInf();
    echo "<hr>";
    $ob2 = new RegistroDeAlumno("Ezequiel",21,"Fransisco villa #32","1A",8);
    echo $ob2;
    echo "<hr>";
    $ob2 = new RegistroDePersonal("Ezequiel",21,"Fransisco villa #32",2000,"Lunes a viernes");
    echo $ob2;
    echo "<hr>";
?>