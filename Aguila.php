<?php
require_once "Animal.php";

//clase Aguila que hereda de Animal
class Aguila extends Animal {
    public function __construct($nombre, $edad) {
        parent::__construct($nombre, $edad, "Ave");
    }

    public function emitirSonido() { echo "Grito agudo 🦅"; }
    public function moverse() { echo "Vuela por los cielos"; }
    public function alimentarse() { echo "Caza pequeños animales"; }
    public function dormir() { echo "Descansa en lo alto"; }
    public function reproducirse() { echo "Pone huevos"; }

    public function mostrarInfo() {
        echo $this->__toString() . "<br>";
        $this->emitirSonido(); echo "<br>";
        $this->moverse(); echo "<br>";
        $this->alimentarse(); echo "<br>";
    }
}
