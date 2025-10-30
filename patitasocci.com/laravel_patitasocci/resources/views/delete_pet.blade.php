<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Mascota</title>
    <link rel="stylesheet" href="css/info.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h1>Eliminar Mascota</h1>
        <p>¿Estás seguro de que deseas eliminar la mascota <strong>{{ $mascota->nombre }}</strong>?</p>
        
        <form action="/delete_pet/{{$mascota->id_mascota}}" method="POST">
            @csrf
            @method('DELETE')
            
            <button type="submit" class="btn btn-danger">Eliminar</button>
            <a href="/info?id_mascota={{$mascota->id_mascota}}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
