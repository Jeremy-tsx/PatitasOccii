<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Adopción</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/requisitos.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda+SC:ital,opsz,wght@0,6..96,400..900;1,6..96,400..900&display=swap" rel="stylesheet">
<style>
@import url('https://fonts.googleapis.com/css2?family=Bodoni+Moda+SC:ital,opsz,wght@0,6..96,400..900;1,6..96,400..900&display=swap');
</style>
</head>

<body>
    

<form action="/ruta-de-envio" method="POST" class="simple-adoption-form">
    @csrf

    <div class="form-group">
        <label for="nombre_completo">Nombre Completo:</label>
        <input type="text" id="nombre_completo" name="nombre_completo" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="telefono">Número de Teléfono:</label>
        <input type="text" id="telefono" name="telefono" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="tipo_vivienda">Tipo de Vivienda:</label>
        <select id="tipo_vivienda" name="tipo_vivienda" class="form-control" required>
            <option value="">Selecciona...</option>
            <option value="departamento">Departamento</option>
            <option value="casa">Casa</option>
            <option value="otro">Otro</option>
        </select>
    </div>

    <div class="form-group">
        <label>¿Espacio disponible para la mascota?</label>
        <div class="radio-group">
            <input type="radio" id="espacio_pequeno" name="espacio" value="pequeño" required>
            <label for="espacio_pequeno">Pequeño</label>
            <input type="radio" id="espacio_medio" name="espacio" value="medio" required>
            <label for="espacio_medio">Medio</label>
            <input type="radio" id="espacio_grande" name="espacio" value="grande" required>
            <label for="espacio_grande">Grande</label>
        </div>
    </div>

    <div class="form-group">
        <label for="tipo_mascota">Tipo de Mascota Deseada:</label>
        <select id="tipo_mascota" name="tipo_mascota" class="form-control" required>
            <option value="">Selecciona...</option>
            <option value="perro">Perro</option>
            <option value="gato">Gato</option>
            <option value="otro">Otro</option>
        </select>
    </div>

    <div class="form-group">
        <label>¿Compromiso al cuidado total?</label>
        <div class="radio-group">
            <input type="radio" id="compromiso_si" name="compromiso" value="1" required>
            <label for="compromiso_si">Sí</label>
            <input type="radio" id="compromiso_no" name="compromiso" value="0" required>
            <label for="compromiso_no">No</label>
        </div>
    </div>

    <div class="form-group">
        <label for="comentarios_adicionales">Comentarios Adicionales:</label>
        <textarea id="comentarios_adicionales" name="comentarios_adicionales" class="form-control"></textarea>
    </div>

    <button type="submit" class="submit-button">Enviar Solicitud</button>
</form>

</body>
</html>
