<?php
    class Persona{
        #Variables=propiedades y Funciones=metodos
        public $nombre;
        public $edad;
        public $pais;
        function __construct($nombre,$edad,$pais)
        {
            $this->nombre=$nombre;
            $this->edad=$edad;
            $this->pais=$pais;
        }
        public function mostrarInformacion(){
            echo "Nombre: ".$this->nombre.", Edad: ".$this->edad.", Pais: ".$this->pais;;
        }
    }
    
    $perso=new Persona('Ezequiel',21,'Mexico');
    $perso->mostrarInformacion();

?>