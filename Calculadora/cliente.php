<?php
require_once('lib/nusoap.php');
$cliente = new nusoap_client('http://localhost/practicas_progweb_unidad05/Calculadora/servicio.php');

// Multiplicación:
$resultado = $cliente->call('calculadora',
    array('x' => '3',
        'y' => 4,
        'operacion' => 'multiplica'));
echo "<b>Resultado (3*4):</b> " . $resultado . "<br><br>";

// División:
$resultado = $cliente->call('calculadora',
    array('x' => '3',
        'y' => 4,
        'operacion' => 'divide'));
echo "<b>Resultado (3/4):</b> " . $resultado . "<br><br>";

// Suma:
$resultado = $cliente->call('calculadora',
    array('x' => '3',
        'y' => 4,
        'operacion' => 'suma'));
echo "<b>Resultado (3+4):</b> " . $resultado . "<br><br>";

// Resta:
$resultado = $cliente->call('calculadora',
    array('x' => '3',
        'y' => 4,
        'operacion' => 'resta'));
echo "<b>Resultado (3-4):</b> " . $resultado;

//phpinfo();
?>