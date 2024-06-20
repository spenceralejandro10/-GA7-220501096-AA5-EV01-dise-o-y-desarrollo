<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "floreria_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$cedulaLogin = $_POST['cedulaLogin'];
$claveLogin = $_POST['claveLogin'];

$sql = "SELECT * FROM usuarios WHERE cedula='$cedulaLogin' AND clave='$claveLogin'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Inicio de sesión exitoso. ¡Bienvenido de nuevo!";
} else {
    echo "Cédula o clave incorrecta.";
}

$conn->close();
?>
