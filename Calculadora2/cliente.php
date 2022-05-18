<H1>Calculadora</H1>
<form action="clientep.php" method="get">
    Numero 1: <input type="text" name="a"><br> 
    Numero 2: <input type="text" name="b"><br>
    Operacion: <select name="action">
        <option value="suma">Sumar</option>
        <option value="multiplicacion">Multiplicar</option>
</select><br><br>
<input type ="submite" value="Calcular">
</form>


<?php
if (isset($_GET["action"]) && $_GET["action"] == "suma")
{
    $calculadora = file_get_contents(
        'http://calculadora2.test/servicio.php?action=suma'.$_GET);
    $calculadora
}


?>

