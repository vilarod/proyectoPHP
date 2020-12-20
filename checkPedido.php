<?php
echo $_POST["firstName"] . "<br>";
echo $_POST["lastName"] . "<br>";
echo $_POST["username"] . "<br>";
echo $_POST["email"] . "<br>";
echo $_POST["address"] . "<br>";

/*creación del objeto pedido*/
require_once("./clases/Pedido.php");

$nombre = $_POST['firstName'];
$apellido = $_POST['lastName'];
$usuario = $_POST['username'];
$mail = $_POST['email'];
$lugarentrega = $_POST['address'];
$localidad = $_POST['country'];
$provincia = $_POST['state'];
$codpostal = $_POST['zip'];
$formadepago = $_POST['paymentMethod'];
$tarjtitular = $_POST['cc-name'];
$tarjnumero = $_POST['cc-number'];
$tarjvto = $_POST['cc-expiration'];
$tarjclave = $_POST['cc-cvv'];
$pedido = new Pedido($nombre, $apellido, $usuario, $mail, $lugarentrega,  $localidad, $provincia, $codpostal, $formadepago, $tarjtitular, $tarjnumero, $tarjvto, $tarjclave);

require_once("./clases/conexionDb.php");
$conexionDB = new ConexionDb("localhost", "root", "", "cacproyecto");
$conexionDB->conectar();

$sql = "INSERT INTO pedidos 
(`nombre`, `apellido`, `usuario`, `mail`, `lugarentrega`, `localidad`, `provincia`, `codpostal`, `formadepago`, `tarjtitular`, `tarjnumero`, `tarjvto`, `tarjclave`) 
VALUES (
'{$pedido->getNombre()}', 
'{$pedido->getApellido()}', 
'{$pedido->getUsuario()}', 
'{$pedido->getMail()}', 
'{$pedido->getLugarentrega()}', 
{$pedido->getLocalidad()},
 {$pedido->getProvincia()}, 
 '{$pedido->getCodpostal()}', 
 '{$pedido->getFormadepago()}', 
 '{$pedido->getTarjtitular()}', 
 {$pedido->getTarjnumero()}, 
 '{$pedido->getTarjvto()}', 
 {$pedido->getTarjclave()})";
echo "<br>";
echo $sql . " <br>";
$result = $conexionDB->ejecutar($sql);

if ($conexionDB->cantFilas() > 0) {
    echo "El pedido se guardó exitosamente <br>";
} else {
    echo "Error al guardar el pedido <br>";
}
