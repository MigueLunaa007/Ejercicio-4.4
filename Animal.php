<?php
//clase abstracta base que define atributos y metodos comunes
abstract class Animal {
    protected $nombre;
    protected $edad;
    protected $grupo;

    //constructor: inicializa nombre, edad y grupo
    public function __construct($nombre, $edad, $grupo) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->grupo = $grupo;
    }

    //metodos getters y setters
    public function getNombre() { return $this->nombre; }
    public function getEdad() { return $this->edad; }
    public function getGrupo() { return $this->grupo; }

    public function setNombre($nombre) { $this->nombre = $nombre; }
    public function setEdad($edad) { $this->edad = $edad; }
    public function setGrupo($grupo) { $this->grupo = $grupo; }

    //metodo magico para mostrar informacion basica del animal
    public function __toString() {
        return "Soy un {$this->grupo} llamado {$this->nombre}, tengo {$this->edad} años.";
    }

    //metodos abstractos: deben implementarse en cada subclase
    abstract public function emitirSonido();
    abstract public function moverse();
    abstract public function alimentarse();
    abstract public function dormir();
    abstract public function reproducirse();
    abstract public function mostrarInfo();
}
