<?php
require_once "Animal.php";

//clase Serpiente que hereda de Animal
class Serpiente extends Animal {
    public function __construct($nombre, $edad) {
        parent::__construct($nombre, $edad, "Reptil");
    }

    public function emitirSonido() { echo "Siseo 🐍"; }
    public function moverse() { echo "Se arrastra sigilosamente"; }
    public function alimentarse() { echo "Come roedores"; }
    public function dormir() { echo "Descansa enrollada"; }
    public function reproducirse() { echo "Pone huevos"; }

    public function mostrarInfo() {
        echo $this->__toString() . "<br>";
        $this->emitirSonido(); echo "<br>";
        $this->moverse(); echo "<br>";
        $this->alimentarse(); echo "<br>";
    }
}
