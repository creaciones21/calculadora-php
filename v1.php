<html>
    <form method="GET">
        <p>Numero 1: <input type="number" name="numero1"></p>
        <p>Numero 2: <input type="number" name="numero2"></p>
        <select name="calcular">
                <option value="">Elegir operacion</option>
                <option value="sumar">Sumar</option>
                <option value="restar">Restar</option>
                <option value="multiplicar">Multiplicar</option>
                <option value="dividir">Dividir</option>
        </select>
        <input type="submit" value="Calcular">
    </form>
</html>

<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);

if ( isset($_GET["numero1"]) ){
    $num1 = $_GET["numero1"];
    };

if ( isset($_GET["numero1"]) ){
        $num2 = $_GET["numero2"];
        };

$operacion = $_GET["calcular"];
$resultado = false;

switch($operacion){

    case "sumar":
        $resultado = $num1 + $num2;
    break;

    case "restar":
        $resultado = $num1 - $num2;
    break;

    case "multiplicar":
        $resultado = $num1 * $num2;
    break;

    case "dividir":
        if($num2 != 0){
            $resultado = $num1 / $num2;
        }else{
            $resultado = false;
        }
    break;

    default:
        $resultado = false;
    break;
}

if($resultado){
    echo "<h2>Resultado: $resultado </h2>";
}else{
    echo "Error";
}
?>
