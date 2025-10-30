<?php
$servername = "localhost";  // Cambiar si la base de datos está en otro servidor
$username = "u627995803_jeremy";   // Cambiar al nombre de usuario de tu base de datos
$password = "Patitas2024"; // Cambiar a la contraseña de tu base de datos
$dbname = "u627995803_patitasocci"; // Cambiar al nombre de tu base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

//echo "Conexión exitosa";  // Esto se mostrará si la conexión fue exitosa

// Aquí puedes realizar consultas a la base de datos
$sql = "SELECT id_mascota, nombre, historia, foto FROM mascotas where estado=1 LIMIT 6";
$result = $conn->query($sql);
$itemCount = 0;


?>