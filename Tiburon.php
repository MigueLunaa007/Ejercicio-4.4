<?php
require_once "Animal.php";

//clase Tiburon que hereda de Animal
class Tiburon extends Animal {
    public function __construct($nombre, $edad) {
        parent::__construct($nombre, $edad, "Pez");
    }

    public function emitirSonido() { echo "Silencio mortal 🦈"; }
    public function moverse() { echo "Nada velozmente"; }
    public function alimentarse() { echo "Come peces y focas"; }
    public function dormir() { echo "Permanece en movimiento"; }
    public function reproducirse() { echo "Reproducción ovípara o vivípara"; }

    public function mostrarInfo() {
        echo $this->__toString() . "<br>";
        $this->emitirSonido(); echo "<br>";
        $this->moverse(); echo "<br>";
        $this->alimentarse(); echo "<br>";
    }
}
