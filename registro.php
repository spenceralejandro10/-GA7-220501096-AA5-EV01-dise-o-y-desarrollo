<?php
// Conectar a la base de datos (debes completar con tus datos)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "floreria_db";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos del formulario de registro
$nombre = $_POST['nombre'];
$cedula = $_POST['cedula'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$clave = $_POST['clave'];

// Preparar la consulta SQL para insertar datos en la tabla usuarios
$sql = "INSERT INTO usuarios (nombre, cedula, email, telefono, direccion, clave) VALUES ('$nombre', '$cedula', '$email', '$telefono', '$direccion', '$clave')";

if ($conn->query($sql) === TRUE) {
  echo "Registro exitoso. ¡Bienvenido a Florería Flores Brillantes!";
} else {
  echo "Error al registrar: " . $conn->error;
}

$conn->close();
?>

