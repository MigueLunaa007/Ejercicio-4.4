<?php
require_once "Animal.php";

//clase Leon que hereda de animal
class Leon extends Animal {
    public function __construct($nombre, $edad) {
        parent::__construct($nombre, $edad, "Mamifero");
    }

    //implementacion especifica de los metodos abstractos
    public function emitirSonido() { echo "Rugido fuerte 🦁"; }
    public function moverse() { echo "Corre por la sabana"; }
    public function alimentarse() { echo "Come carne"; }
    public function dormir() { echo "Duerme bajo la sombra"; }
    public function reproducirse() { echo "Se reproduce en manada"; }

    //muestra informacion completa del Leon
    public function mostrarInfo() {
        echo $this->__toString() . "<br>";
        $this->emitirSonido(); echo "<br>";
        $this->moverse(); echo "<br>";
        $this->alimentarse(); echo "<br>";
    }
}
