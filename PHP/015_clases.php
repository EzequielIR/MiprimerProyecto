<?php
    class Persona{
        #Variables=propiedades y Funciones=metodos
        public $nombre;
        public $edad;
        public $pais;
        public function mostrarInformacion(){
            echo "Hola mundo <br>";
        }
    }
    class Perso{
        #Variables=propiedades y Funciones=metodos
        public $nombre;
        public $edad;
        public $pais;
        public function mostrarInformacion(){
            echo "Hola mundo <br>";
        }
    }
    $perso=new Persona;
    $perso->nombre='Ezequiel';
    $perso->edad=21;
    $perso->pais='Mexico';

    $perso->mostrarInformacion();
    echo "Nombre: ".$perso->nombre.", Edad: ".$perso->edad.", Pais: ".$perso->pais.'.<br>';
    echo var_dump($perso).'<br>';

    $otro=new Persona;
    $otro->nombre='Isidoro';
    $otro->edad=22;
    $otro->pais='USA';

    echo "Nombre: ".$otro->nombre.", Edad: ".$otro->edad.", Pais: ".$otro->pais.'.<br>';
    echo var_dump($otro).'<br>';

?>