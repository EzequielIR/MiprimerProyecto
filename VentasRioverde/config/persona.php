<?php
    class Persona{
        public $nombre;
        public $estatura;
        public function mostrarInformacion(){
            echo "Hola soy $this->nombre y mido $this->estatura.";
        }
    }
?>