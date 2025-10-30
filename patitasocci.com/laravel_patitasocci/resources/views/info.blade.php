

<!DOCTYPE html>
<html lang="en">

<head>
    <title>
  
        @if (!empty($mascota->nombre))
        {{ $mascota->nombre }}
    @else
        Detalles del animal
    @endif

</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="{{ $mascota->nombre ?? 'Detalles del animal' }}">
    <meta property="og:description" content="{{ $mascota->historia ?? 'Información adicional sobre la mascota.' }}">
    <meta property="og:image" content="{{ asset('images/' . ($mascota->foto ?? 'default.jpg')) }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patitas Occi">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/png">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="css/info.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">



</head>

<body>

    <!-- Header -->
    <div class="hero_area">
        <!-- Sección Header -->
        <!-- Aquí puedes agregar tu código de cabecera -->
    </div>
    <!-- Close Header -->

    <!-- Open Content -->
    <section class="bg-light">
        <div class="container pb-5">
            <div class="row">
                <div class="col-lg-5 mt-5">
                    <div class="card mb-3 image-container">
                    <div class="overlay">
                    </div>
                   
                    <img class="card-img img-fluid" src="{{ asset('images/' . ($mascota->foto ?? 'default.jpg')) }}" alt="Imagen de {{ $mascota->nombre ?? 'default' }}">
                    </div>
                    <div class="row">
                        <div class="col-1 align-self-center">
                            <a href="#multi-item-example" role="button" data-bs-slide="prev">
                            </a>
                        </div>
                        <div id="multi-item-example" class="col-10 carousel slide carousel-multi-item" data-bs-ride="carousel">
                            <div class="carousel-inner product-links-wap" role="listbox">
                                <div class="carousel-item active">
                                    <div class="row">

                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-1 align-self-center">
                            <a href="#multi-item-example" role="button" data-bs-slide="next">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 mt-5">
                <div class="card">
    <div class="card-body">
        <ul  class="list-unstyled">
            <li class="mb-3">
            <h2 class="font-weight-bold">
                @if(isset($mascota->nombre))
            
            Nombre: {{ $mascota->nombre  }}
            @else
            Nombre no disponible
            @endif
        
        </h2>
            </li>
            <li class="mb-2">
                <h5>Edad: {{$mascota->edad}}</h5>
            </li>
            <li class="mb-2">
                <h5>Raza: {{$mascota->raza}}</h5>
            </li>
            <li class="mb-2">
                <h5>Color: {{$mascota->color}}</h5>
            </li>
            <li >
                <h5 class="mb-0">Tamaño: {{$mascota->tamano}}</h5>
            </li>

        </ul>

        <h5 class="mt-1">Historia: {{$mascota->historia}}</h5>
        

        <h5>Fecha de Ingreso:  {{$mascota->fecha_ingreso}}</h5>
        
        
    <style>

        .share-buttons {
            display: flex;
            gap: 6px; /* Espaciado entre botones */
            align-items: center; /* Alineación vertical */
            max-width: auto;
            max-height: 5%;
        }
  

        .share-buttons a {
            display: flex;
            align-items: center;
            gap: 8px;
            text-decoration: none;
            font-size: 16px;
            padding: 10px 15px;
            border-radius: 8px;
            font-weight: bold;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .share-buttons a i {
            font-size: 18px;
        }

        /* Estilos de los botones */
        .btn-facebook {
            background-color: #1877F2;
            color: white;
        }
        .btn-facebook:hover {
            background-color: #1558b0;
            transform: scale(1.05);
            box-shadow: 0 4px 10px rgba(24, 119, 242, 0.4);
        }

        .btn-twitter {
            background-color: #1DA1F2;
            color: white;
        }
        .btn-twitter:hover {
            background-color: #0d8dd8;
            transform: scale(1.05);
            box-shadow: 0 4px 10px rgba(29, 161, 242, 0.4);
        }

        .btn-whatsapp {
            background-color: #25D366;
            color: white;
        }
        .btn-whatsapp:hover {
            background-color: #1da851;
            transform: scale(1.05);
            box-shadow: 0 4px 10px rgba(37, 211, 102, 0.4);
        }

        /* Responsivo */
        @media (max-width: 576px) {
            .share-buttons {
                flex-direction: column;
                gap: 15px;
            }
        }
    </style>
    
    
<div class="share-buttons">
    <a href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}" target="_blank">
        <button class="btn btn-primary">
            <i class="fab fa-facebook-f"></i> Compartir en Facebook
        </button>
    </a>
    <a href="https://twitter.com/intent/tweet?url={{ url()->current() }}&text=Adopta una mascota en Patitas Occi" target="_blank">
        <button class="btn btn-info mx-2">
            <i class="fab fa-twitter"></i> Compartir en Twitter
        </button>
    </a>
    <a href="https://api.whatsapp.com/send?text=Adopta una mascota en Patitas Occi: {{ url()->current() }}" target="_blank">
        <button class="btn btn-success mx-2">
            <i class="fab fa-whatsapp"></i> Compartir en WhatsApp
        </button>
    </a>
</div>


    </div>
</div>
                </div>
            </div>
            <div class="row mt-5">
    <div class="col d-grid">
        <a href="/pet" class="btn btn-success btn-lg pagination-btn">Volver Donde Los Demás</a>
    </div>
    <div class="col d-grid">
    <div class="col d-grid">
        <a href="http://wa.me/50671102846" target="_blank"class="btn btn-success btn-lg pagination-btn">Contactanos Para Adoptar</a>
    </div>

    </div>
</div>

<!-- Botón fuera de la imagen -->
<div class="add-button-container">

    
    @auth
        @if (Auth::user()->tipo == 1)
        <a href="{{ route('pets.edit', ['id_mascota' => $id_mascota]) }}" 
   onclick="return confirm('¿Estás seguro de que deseas editar esta mascota?');">
   <button class="adopt-btn" >Editar</button>
</a>

            <a href="{{ route('pets.delete', ['id_mascota' => $id_mascota]) }}" 
   onclick="return confirm('¿Estás seguro de que deseas eliminar esta mascota?');">
   <button class="adopt-btn" >Eliminar</button>
</a>
        @endif
    @endauth
</div>



<!-- Contenedor para el mensaje de alerta -->
<div id="adopt-message" class="adopt-message" style="display:none;">
    <div class="message-content">
        <p>¡Para adoptar, es necesario llenar un formulario para verificar si eres apto!</p>
        <a href="/requisitos"> 
            <button class="close-btn" onclick="closeAdoptMessage()">Llenar Formulario</button>
        </a>
        <button class="close-btn" onclick="closeAdoptMessage()">Cerrar</button>
    </div>
</div>

            <div class="row mt-5">
                <div class="col-12 text-center">
                    <h4 class="pb-4">Animales Relacionados</h4>
                    <div class="row">

                        <!--Aqui hacemos la iteracion de los animales difernetes -->
                        <!-- Iteración limitada a 3 animales -->
                        @php
                            $contador = 0;
                        @endphp
                        @foreach($mascotas as $item )
                        @if($mascota->id_mascota != $item->id_mascota)
                        @if($contador < 3)
                        <div class="col-lg-4">
                            <div class="card">
                            <img class="card-img img-fluid" src="{{ asset('images/' .$item->foto )}}" alt="Imagen de {{$item->nombre}}">                                <div class="card-body">
                                    <h5 class="card-title">{{ $item->nombre ? $item->nombre : 'Nombre no disponible' }}</h5>
                                    <a href="" class="btn btn-primary">Ver Detalles</a>
                                                
                                </div>
                            </div>
                        </div>
                        @php
                $contador++;
            @endphp
        @else
            @break
        @endif
    @endif
@endforeach


                        <!--fin del foreach -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Close Content -->

    <!-- Footer -->
    <footer>
        <div class="container">
            <p class="text-center">© 2024 Patitas Occi. Todos los derechos reservados.</p>
        </div>
    </footer>


            <!-- Contenedor para el mensaje de alerta -->
            <div id="adopt-message" class="adopt-message">

        </div>
    </div>
    <!-- JS Libraries -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <script src="js/info.js"></script>

</body>

</html>
