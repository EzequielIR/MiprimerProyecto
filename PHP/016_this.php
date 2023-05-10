<?php
    class Person{
        #Variables=propiedades y Funciones=metodos
        public $nombre;
        public $edad;
        public $pais;
        public function mostrarInformacion(){
            echo "Nombre: ".$this->nombre.", Edad: ".$this->edad.", Pais: ".$this->pais;;
        }
    }

    $perso=new Person;
    $perso->nombre='Ezequiel';
    $perso->edad=21;
    $perso->pais='Mexico';

    $perso->mostrarInformacion();

?>