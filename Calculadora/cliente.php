<?php
require_once('lib/nusoap.php');
$cliente = new nusoap_client('http://localhost/practicas_progweb_unidad05/Calculadora/servicio.php');
$x = isset($_POST["x"])?$_POST["x"]:"";
$y = isset($_POST["y"])?$_POST["y"]:"";
$operacion = isset($_POST["operacion"])?$_POST["operacion"]:"";
?>

    <form action="cliente.php" method="post">
        Numero 1: <input type="text" name="x"><br>
        Numero 2: <input type="text" name="y"><br>
        Operacion: <select name="operacion">
            <option value="suma">Sumar</option>
            <option value="resta">Restar</option>
            <option value="multiplica">Multiplicar</option>
            <option value="divide">Dividir</option>
        </select><br><br>
        <input type="submit" value="Calcular">
    </form>

<?php
switch ($operacion) {
    case "multiplica":
        $resultado = $cliente->call('calculadora',
            array('x' => $x,
                'y' => $y,
                'operacion' => $operacion));
        echo "<b>Resultado ($x*$y):</b> " . $resultado . "<br><br>";
        break;
    case "divide":
        $resultado = $cliente->call('calculadora',
            array('x' => $x,
                'y' => $y,
                'operacion' => $operacion));
        echo "<b>Resultado ($x/$y):</b> " . $resultado . "<br><br>";
        break;
    case "suma":
        $resultado = $cliente->call('calculadora',
            array('x' => $x,
                'y' => $y,
                'operacion' => $operacion));
        echo "<b>Resultado ($x+$y):</b> " . $resultado . "<br><br>";
        break;
    case "resta":
        $resultado = $cliente->call('calculadora',
            array('x' => $x,
                'y' => $y,
                'operacion' => $operacion));
        echo "<b>Resultado ($x-$y):</b> " . $resultado;
        break;
}
?>