<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles la Mascota</title>
    <link rel="stylesheet" href="css/editar.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        /* Estilos generales */
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f0f4f8;
            margin: 0;
            padding: 0;
            color: #333;
        }

        .main-container {
            max-width: 800px; /* Cambié el ancho máximo a 800px para más espacio */
            margin: 40px auto;
            background-color: #ffffff;
            box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            padding: 40px; /* Aumenté el padding interno */
        }

        h2 {
            text-align: center;
            color: #3498db;
            margin-bottom: 30px;
            font-size: 2.5rem; /* Aumenté el tamaño del título */
        }

        .form-label, .input-group-text {
            color: #555;
            font-weight: 600;
            font-size: 1.2rem; /* Hice más grandes las etiquetas */
        }

        .input-group .form-control {
            border-radius: 8px;
            border: 2px solid #ddd;
            padding: 15px; /* Aumenté el padding en los campos de texto */
            width: auto;
            font-size: 1.1rem; /* Aumenté el tamaño del texto */
            box-shadow: none;
            transition: border 0.3s ease;
        }

        .input-group .form-control:focus {
            border-color: #3498db;
        }

        .input-group .input-group-text {
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 8px 0 0 8px;
            font-size: 1.2rem; /* Ajusté el tamaño de las etiquetas dentro de los grupos */
        }

        .btn-primary {
            background-color: #3498db;
            border: none;
            border-radius: 8px;
            padding: 15px 20px; /* Aumenté el padding de los botones */
            width: 100%;
            font-size: 1.2rem; /* Aumenté el tamaño del texto en los botones */
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #2980b9;
        }

        .filter-form {
            display: flex;
            flex-direction: column;
            gap: 20px; /* Aumenté el espacio entre los campos */
        }

        .mb-3 {
            display: flex;
            flex-direction: column;
        }

        input[type="file"] {
            padding: 10px; /* Aumenté el padding para el campo de selección de archivo */
        }

        .d-grid .btn {
            margin-top: 30px; /* Más espacio entre el botón y los demás elementos */
        }

        .pagination-btn {
            display: block;
            text-align: center;
            margin-top: 30px; /* Más espacio superior */
        }

        .add-to-cart {
            background-color: #2ecc71;
            color: white;
            padding: 15px 20px; /* Aumenté el padding para los botones */
            width: auto;
            font-size: 1.2rem; /* Aumenté el tamaño de la fuente */
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .add-to-cart:hover {
            background-color: #27ae60;
        }

        /* Botón de "Volver" */
        .btn-danger {
            background-color: #e74c3c;
            margin-top: 10px;
            padding: 15px; /* Aumenté el tamaño del botón "Volver" */
        }

        .btn-danger:hover {
            background-color: #c0392b;
        }

        input[type="date"] {
            padding: 15px; /* Más espacio en el campo de fecha */
            border-radius: 8px;
            border: 2px solid #ddd;
            transition: border 0.3s ease;
        }

        input[type="date"]:focus {
            border-color: #3498db;
        }

        /* Responsivo */
        @media (max-width: 768px) {
            .main-container {
                padding: 20px;
            }

            .btn-primary, .add-to-cart {
                width: 100%;
            }
        }
    </style>
  

</head>
<body>
<form class="filter-form" method="GET" action="{{ route('pets.editar', ['id_mascota' => $mascota->id_mascota]) }}">

    <input type="text" name="id_mascota" id="id_mascota" value="{{$id_mascota}}">
    Se ha autenticado como: {{Auth::user()->name}}
    <div class="main-container">
       
    <div class="mb-3">
  <label for="formFile" class="form-label">Seleccione una imegen</label>
  <input class="form-control" type="file" id="imagen" name="imagen">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Nombre de la mascota</span>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$mascota->nombre}}" id="nombre" name="nombre">
</div>
<div class="input-group mb-3">
    <span class="input-group-text" id="inputGroup-sizing-default">Edad</span>
    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" 
 value="{{$mascota->edad}}" id="edad" name="edad">
    <select class="form-select" aria-label="Default select example">
        <option value="months">Meses</option>
        <option value="years">Años</option>
    </select>
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Raza</span>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$mascota->raza}}" id="raza" name="raza">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Color</span>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$mascota->color}}" id="color" name="color">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Historia</span>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$mascota->historia}}" id="historia" name="historia">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Tipo</span>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$mascota->tipo}}" id="tipo" name="tipo">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Tamano</span>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$mascota->tamano}}" id="tamano" name="tamano">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Fecha De Ingreso</span>
  <input type="date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{ $mascota->fecha_ingreso }}" id="fecha" name="fecha">
</div>

<div class="d-grid gap-2 d-md-block">
  <button class="btn btn-primary" type="submit">Listo</button>
  {{$message}}
  </div>
    </div>
</form>
<a href="/info?id_mascota={{$mascota->id_mascota}}" class="pagination-btn">
<button class="add-to-cart" onclick="window.location.href='info?id_mascota={{ $mascota->id_mascota }}'">Ver detalles</button>


  </a>
<a href="/pet">
  <button class="btn btn-primary">Volver a todas las mascotas</button>
  </a>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="js/info.js"></script>
</body>
</html>

