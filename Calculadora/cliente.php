<?php
require_once('lib/nusoap.php');
$cliente = new nusoap_client('http://calculadora.test/servicio.php');
$resultado = $cliente->call('calculadora',
  array( 'x' => 3,
         'y' => 4,
         'operacion' => 'muliplica' ));
 
  var_dump($resultado)
?>