<?php
//importamos todas las clases
require_once "Leon.php";
require_once "Aguila.php";
require_once "Serpiente.php";
require_once "Tiburon.php";

//creamos un arreglo de animales
//contiene objetos de diferentes clases
//sirve para demostrar el polimorfismo: aunque todos son "Animal", 
//cada uno responde de manera distinta a los mismos metodos
$animales = [
    new Leon("Simba", 5),
    new Aguila("Sky", 3),
    new Serpiente("Kaa", 2),
    new Tiburon("Bruce", 8)
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zoológico Virtual</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            color: #333;
            margin: 0;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #2c3e50;
        }
        .animal-card {
            background: #fff;
            border-radius: 8px;
            padding: 15px;
            margin: 15px auto;
            max-width: 500px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
        }
        .animal-card h2 {
            margin-top: 0;
            color: #16a085;
        }
        hr {
            border: none;
            border-top: 1px solid #ddd;
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <h1>Zoológico Virtual</h1>

    <?php
    //recorremos el arreglo y mostramos la información de cada animal
    foreach ($animales as $animal) {
        echo '<div class="animal-card">';
        $animal->mostrarInfo(); //cada objeto ejecuta su propia versión de los metodos
        echo "</div>";
    }
    ?>
</body>
</html>
