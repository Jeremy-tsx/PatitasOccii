<?php
// Incluir el archivo de conexión a la base de datos
include resource_path("php/conex.php");

// Inicializar variables
$nombre = $edad = $raza = $color = $tamano = $historia = $estado = $tipo = $foto = $fecha_ingreso = '';

// Verificar si se ha proporcionado un ID válido en la URL
if (isset($_GET['id_mascota']) && is_numeric($_GET['id_mascota'])) {
    $animal_id = $_GET['id_mascota'];

    // Consulta SQL para obtener el animal actual y los animales anterior y siguiente
    $sql = "SELECT * FROM mascotas WHERE id_mascota = $animal_id";
    $result = $conn->query($sql);

    if ($result) {
        // Verificar si se encontraron resultados
        if ($result->num_rows > 0) {
            // Obtener los detalles del animal actual
            $animal = $result->fetch_assoc();
            $id_mascota=$animal['id_mascota'];
            $nombre = $animal['nombre'];
            $edad = $animal['edad'];
            $raza = $animal['raza'];
            $color = $animal['color'];
            $tamano = $animal['tamano'];
            $historia = $animal['historia'];
            $estado = $animal['estado'];
            $tipo = $animal['tipo'];
            $foto = $animal['foto'];
            $fecha_ingreso = $animal['fecha_ingreso'];

            // Consultar el animal anterior
            $sql_anterior = "SELECT * FROM mascotas WHERE id_mascota < $animal_id ORDER BY id_mascota DESC LIMIT 1";
            $result_anterior = $conn->query($sql_anterior);
            if ($result_anterior->num_rows > 0) {
                $animal_anterior = $result_anterior->fetch_assoc();
            }

            // Consultar el animal siguiente
            $sql_siguiente = "SELECT * FROM mascotas WHERE id_mascota > $animal_id ORDER BY id_mascota ASC LIMIT 1";
            $result_siguiente = $conn->query($sql_siguiente);
            if ($result_siguiente->num_rows > 0) {
                $animal_siguiente = $result_siguiente->fetch_assoc();
            }
        } else {
            echo "Error: No se encontraron datos para el animal con ID $animal_id.";
        }
    } else {
        echo "Error en la consulta: " . $conn->error;
    }
} else {
    echo "ID de animal no válido.";
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
<!DOCTYPE html>
<html lang="es">
<head>
<link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $nombre ? htmlspecialchars($nombre) : "Detalles del Animal"; ?></title>
    <link rel="stylesheet" href="css/info.css">
</head>
<body>
    <div class="main-container">
        <?php if (!empty($nombre)): ?>
            <h1 class="animal-name"><?php echo htmlspecialchars($nombre); ?></h1>
            <section class="animal-details">
                <div class="image-container">
                    <div class="image-overlay">
                    <button class="adopt-btn" onclick="showAdoptMessage()">Adoptar</button>
                    </div>
                    <img src="images/<?php echo htmlspecialchars($foto); ?>" alt="Imagen de <?php echo htmlspecialchars($nombre); ?>">
                </div>
                <div class="details-list">
                    <p><strong>Edad:</strong> <?php echo htmlspecialchars($edad); ?></p>
                    <p><strong>Raza:</strong> <?php echo htmlspecialchars($raza); ?></p>
                    <p><strong>Color:</strong> <?php echo htmlspecialchars($color); ?></p>
                    <p><strong>Tamaño:</strong> <?php echo htmlspecialchars($tamano); ?></p>
                    <p class="historia"><strong>Historia:</strong> <?php echo htmlspecialchars($historia); ?></p>
                    <p><strong>Tipo:</strong> <?php echo htmlspecialchars($tipo); ?></p>
                    <p><strong>Fecha de Ingreso:</strong> <?php echo htmlspecialchars($fecha_ingreso); ?></p>
                </div>

                <nav class="pagination-controls">
                    <?php if (isset($animal_anterior)): ?>
                        <a href="info?id_mascota=<?php echo $animal_anterior['id_mascota']; ?>" class="pagination-btn">← Anterior</a>
                    <?php endif; ?>

                    <a href="pet" class="pagination-btn">Volver a todas las mascotas</a>

                    <?php if (isset($animal_siguiente)): ?>
                        <a href="info?id_mascota=<?php echo $animal_siguiente['id_mascota']; ?>" class="pagination-btn">Siguiente →</a>
                    <?php endif; ?>
                </nav>

                <!-- Botón fuera de la imagen -->
                <div class="add-button-container">
                    <button class="adopt-btn" onclick="showAdoptMessage()">Adoptar</button>
                    @auth
                @if (Auth::user()->tipo==1) 
                                <form action="/edit_pet/{id_mascota}">
                    <input type="text" name="id_mascota" id="id_mascota" value="<?php echo $id_mascota; ?>">

                    <a href="{{ route('pets.edit', ['id_mascota' => $id_mascota]) }}" 
   onclick="return confirm('¿Estás seguro de que deseas editar esta mascota?');">
   <button class="adopt-btn" >Editar</button>
</a>

                </form>
               
                
                <a href="{{ route('pets.delete', ['id_mascota' => $id_mascota]) }}" 
   onclick="return confirm('¿Estás seguro de que deseas eliminar esta mascota?');">
   <button class="adopt-btn" >Eliminar</button>
</a>

                @csrf
 
</form>
                    @endif
                    @endauth
                </class=>
            </section>
        <?php else: ?>
            <h1 class="error-message">Error: Animal no encontrado</h1>
        <?php endif; ?>

        <!-- Contenedor para el mensaje de alerta -->
        <div id="adopt-message" class="adopt-message">
            <div class="message-content">
                <p>¡Para adoptar, es necesario llenar un formulario para verificar si eres apto!</p>
               <a href="requisitos"> <button class="close-btn" onclick="closeAdoptMessage()">Llenar Formulario</button></a>
                <button class="close-btn" onclick="closeAdoptMessage()">Cerrar</button>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="js/info.js"></script>
</body>
</html>

