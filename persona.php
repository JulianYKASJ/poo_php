<?php

class Persona{
    //atributos
    private $nombre;
    private $edad;

    private $telefono;

    public function __construct($nombre,$edad){  //parametros
        $this->nombre = $nombre;
        $this->edad = $edad;

    } 
    public function getNombre(){
        return $this->nombre;
    }
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    
    public function getEdad(){
        return $this->edad;
    }
    public function setEdad($edad){
        $this->edad = $edad;
    }
    public function motrarInformacionAlumno() {
        echo "Nombre:{$this->nombre},Edad: {$this->edad}años ";
    }
}

$alumno1 = new Persona("julian", 17);
$alumno2 = new Persona("victor", 15);

$alumno1->motrarInformacionAlumno();
$alumno1->setNombre("Andres");

$alumno2->setEdad(18);
/*
echo $alumno1->obtenerNombre();
echo $alumno1->obtenerEdad();
echo $alumno2->obtenerEdad();

