<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Nueva Mascota</title>
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
            max-width: 800px;
            margin: 40px auto;
            background-color: #ffffff;
            box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            padding: 40px;
        }

        h2 {
            text-align: center;
            color: #3498db;
            margin-bottom: 30px;
            font-size: 2.5rem;
        }

        .form-label, .input-group-text {
            color: #555;
            font-weight: 600;
            font-size: 1.2rem;
        }

        .input-group .form-control {
            border-radius: 8px;
            border: 2px solid #ddd;
            padding: 15px;
            width: auto;
            font-size: 1.1rem;
            box-shadow: none;
            transition: border 0.3s ease;
        }

        .input-group .form-control:focus {
            border-color: #3498db;
        }

        .btn-primary {
            background-color: #3498db;
            border: none;
            border-radius: 8px;
            padding: 15px 20px;
            width: 100%;
            font-size: 1.2rem;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #2980b9;
        }

        .filter-form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        input[type="file"] {
            padding: 10px;
        }

        .d-grid .btn {
            margin-top: 30px;
        }

        .add-to-cart {
            background-color: #2ecc71;
            color: white;
            padding: 15px 20px;
            width: auto;
            font-size: 1.2rem;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .add-to-cart:hover {
            background-color: #27ae60;
        }

        .btn-danger {
            background-color: #e74c3c;
            margin-top: 10px;
            padding: 15px;
        }

        .btn-danger:hover {
            background-color: #c0392b;
        }

        input[type="date"] {
            padding: 15px;
            border-radius: 8px;
            border: 2px solid #ddd;
            transition: border 0.3s ease;
        }

        input[type="date"]:focus {
            border-color: #3498db;
        }

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
    <form class="filter-form" method="POST" action="{{ route('store') }}" enctype="multipart/form-data">
        @csrf

        <div class="main-container">
            <h2>Agregar Nueva Mascota</h2>

            <div class="mb-3">
                <label for="formFile" class="form-label">Seleccione una imagen</label>
                <input class="form-control" type="file" id="foto" name="foto">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Nombre de la mascota</span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="nombre" name="nombre" required>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Edad</span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="edad" name="edad" required>
                <select class="form-select" name="edad_unidad">
                    <option value="months">Meses</option>
                    <option value="years">Años</option>
                </select>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Raza</span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="raza" name="raza" required>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Disponible</span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="estado" name="estado" required value="1">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Sexo</span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="sexo" name="sexo" required>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Color</span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="color" name="color" required>
            </div>
            
            <div class="input-group mb-3">
              <span class="input-group-text" id="inputGroup-sizing-default">Tamano</span>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="tamano" name="tamano">
            </div>
            
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Historia</span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="historia" name="historia">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Tipo</span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="tipo" name="tipo" required>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Fecha De Ingreso</span>
                <input type="date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="fecha" name="fecha" required>
            </div>

            <div class="d-grid gap-2 d-md-block">
                <button class="btn btn-primary" type="submit">Agregar Mascota</button>
            </div>
        </div>
    </form>

    <a href="/pet">
        <button class="btn btn-primary">Volver a todas las mascotas</button>
    </a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
