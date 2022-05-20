<?php
require_once('lib/nusoap.php');
require_once('calculadora.php');

$server = new nusoap_server();
$server ->register('calculadora');

$HTTP_RAW_POST_DATA = isset ($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
//Por la versión de PHP, no funciona el service($HTTP_RAW_POST_DATA).
//$server->service($HTTP_RAW_POST_DATA);
//Por esta razón, se utiliza otra forma de llamar al servicio SOAP:
@$server->service(file_get_contents("php://input"));
?>
