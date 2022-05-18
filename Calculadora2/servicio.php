<?php
function suma($a,$b)
{ $total = array();
    $total = array("a" => "$a", "b" => "$b", "total" => $a+$b);
    return $total;
}

$possible_url = array("suma", "multiplicacion");
$value = "An error has occured";
 
if(isset($_GET["action"]) && in_array($_GET["action"], $possible_url))
{ switch($_GET["action"])
    { case "suma":
        $value = suma($_GET["a"], $_GET["b"]);
        break;
       case "multiplicacion":
        $value = multiplicacion($_GET["a"], $_GET["b"]);
        break;
    }
}
exit(json_encode($value));
?>