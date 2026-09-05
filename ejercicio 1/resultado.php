<?php

require_once __DIR__ . '/Cita.php';


$num = $_POST["numero"];
$tipo = $_POST["tipo"];
$tarifa = $_POST["tarifa"];


$cita = new Cita($num, $tipo, $tarifa);


echo "<h2>Resultado de la Cita</h2>";

echo "El número de la cita es: " . $cita->getNumero() . "<br>";
echo "Esta cita es de tipo: " . $cita->getTipo() . "<br>";
echo "Su tarifa normal es: $" . $cita->getTarifa() . "<br>";
echo "Pero por ser de tipo " . $cita->getTipo() .
    " queda con un valor final de $" . $cita->calcularValorFinal() . "<br>";
