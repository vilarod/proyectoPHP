<?php
/*verifica que los datos ingresen ben*/
echo $_POST["inputEmail"] . " <br>";
echo $_POST["inputPassword"] . "<br>";

/*incluye la clase conexionDb.php una sola vez*/
require_once("./clases/ConexionDb.php");

/*conecta con la BD*/
$conexion = new ConexionDb("localhost", "root", "", "cacproyecto");
$conexion->conectar();

/*ejecuta la consulta sql*/
$sql = "SELECT * FROM usuarios WHERE usuario = '{$_POST['inputEmail']}' AND clave = '{$_POST['inputPassword']}'";
echo $sql . "<br>";
$result = $conexion->ejecutar($sql);

if ($conexion->cantFilas() > 0) {
    header("Location: pedido.html");
    exit;
} else {
    echo "Usuario o password incorrecto <br>";
}
