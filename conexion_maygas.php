<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$database   = "productos_bd";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
} else{
    //echo "Conexión exitosa a la base de datos";
}
?>