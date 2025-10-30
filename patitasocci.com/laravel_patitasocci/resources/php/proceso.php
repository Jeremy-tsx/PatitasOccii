<?php
include("conex.php");

// Verificar si el formulario fue enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger y escapar los datos del formulario
    $nombre = $conn->real_escape_string($_POST['nombre']);
    $telefono = $conn->real_escape_string($_POST['telefono']);
    $email = $conn->real_escape_string($_POST['email']);
    $mensaje = $conn->real_escape_string($_POST['mensaje']);

    echo $nombre;

    // Validación del lado del servidor (puedes agregar más validaciones según tus necesidades)
    $errors = [];
    if (empty($nombre)) {
        $errors[] = "El nombre es obligatorio.";
    }
    if (empty($telefono) || !ctype_digit($telefono)) {
        $errors[] = "El número de teléfono es obligatorio y debe contener solo dígitos.";
    }
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "El email es obligatorio y debe ser válido.";
    }
    if (empty($mensaje)) {
        $errors[] = "El mensaje es obligatorio.";
    }

    // Si no hay errores, insertar en la base de datos
    if (empty($errors)) {
        $sql = "INSERT INTO contacto (nombre, numero, correo, mensaje) VALUES ('$nombre', '$telefono', '$email', '$mensaje')";

        if ($conn->query($sql) === TRUE) {
            echo "¡Datos enviados correctamente!";
        } else {
            echo "Error al insertar datos: " . $sql . "<br>" . $conn->error;
        }
    } else {
        foreach ($errors as $error) {
            echo "<p>$error</p>";
        }
    }
}

// Cerrar conexión
$conn->close();
echo "<script>window.history.back();</script>";
?>
