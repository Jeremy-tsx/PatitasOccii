<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Meta Tags -->
    <meta property="og:title" content="Patitas Occi - Adopta una mascota">
    <meta property="og:description" content="Encuentra una mascota para adoptar y brinda un hogar a un animal necesitado.">
    <meta property="og:image" content="{{ asset('images/IMG_7977-removebg.png') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patitas Occi">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Favicon -->
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/png">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Dosis:400,500|Poppins:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <!-- Js y Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>


    <!-- CSS Libraries -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="{{ asset('lib/flaticon/font/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Custom CSS -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">

    <title>Patitas Occi</title>
</head>

<body>
<div class="hero_area">
    <!-- Sección Header -->
    <header class="header_section">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg custom_nav-container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('images/logo (2).png') }}" alt="Logo">
                    <span>Patitas Occi</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <button type="button" class="close-btn" aria-label="Close" id="closeMenuBtn">&times;</button>

                    <ul class="navbar-nav me-auto mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('service') }}">Servicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('pet') }}">Adopciones</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('clinic') }}">Nosotros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('contact') }}">Contactanos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('buy') }}">Productos</a>
                        </li>
                    </ul>

                    <!-- Para pantallas pequeñas -->
                    <div class="d-block d-lg-none mt-0 text-center">
                        <a href="{{ url('login') }}" class="btn btn-primary w-75 mb-2">Iniciar Sesión</a>
                        <a href="{{ url('register') }}" class="btn btn-secondary w-75">Registrarse</a>
                    </div>
                    
                    <div class="space"></div>

                    <!-- Ícono de usuario para pantallas grandes -->
                    <div class="d-none d-lg-flex align-items-center">
                    <div class="dropdown">
    <a href="#" class="nav-link dropdown-toggle" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="{{ asset('images/usuario.png') }}" alt="User Icon" class="user-icon">
    </a>
    <ul class="dropdown-menu" aria-labelledby="userDropdown">
        @if (Auth::check())
            <li><a class="dropdown-item" href="{{ url('/dashboard') }}">Perfil</a>
            </li>
            <li>

                            <a class="dropdown-item" href="{{ url('logout') }}">Salir</a>
            </li>
        @else
            <li><a class="dropdown-item" href="{{ url('login') }}">Iniciar Sesión</a></li>
            <li><a class="dropdown-item" href="{{ url('register') }}">Registrarse</a></li>
        @endif
    </ul>
</div>

                    </div>
                    <div class="space"></div>

                </div>
            </nav>
        </div>
    </header>
</div>



    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section position-relative">
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="9000">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container-fluid">
              <div class="row"> 
                <div class="col-md-4 offset-md-2">
                  <div class="slider_detail-box">
                    <h1>
                      <span class="patitas">
                        ¡Bienvenidos a Patitas Occi!
                      </span>
                    </h1>
                    <p>
                      "Donde cada lamida, cada ronroneo y cada abrazo cuenta una historia de amor incondicional.
                      Únete y comparte tu propia historia de amor"
                    </p>
                    <div class="btn-box">
                      <a href="service" class="btn-1" style="text-decoration: none;">
                        Nuestros Servicios
                      </a>
                      <a href="clinic" class="btn-2" style="text-decoration: none;">
                        Nosotros
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="slider_img-box">
                    <img src="images/IMG_7977-removebg.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-4 offset-md-2">
                  <div class="slider_detail-box">
                    <h1>
                      <span>
                        ¿Por qué es importante adoptar?
                      </span>
                    </h1>
                    <p>
                    "No solo estás salvando una vida, estás ganando un amigo fiel que te brindará compañía incondicional y 
                      alegría inimaginable. ¡Adopta y sé parte de esta hermosa historia de amor y compasión!"
                    </p>
                    <div class="btn-box">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="slider_img-box">
                    <img src="images/num1.png" class="num1" alt="perro y gato">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-4 offset-md-2">
                  <div class="slider_detail-box">
                    <h1>
                      <span>
                        ¡Adopciones!
                      </span>
                    </h1>
                    <p></p>
                    <div class="btn-box">
                      <a href="pet" class="btn-1" style="text-decoration: none;">
                        Nuestros animales
                      </a>
                      <a href="contact" class="btn-2" style="text-decoration: none;">
                        Contacto
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">                    
                  <div class="gallery">
                    <div class="gallery-item">
                      <img src="images/labrador.jpg" alt="Perro Labrador">
                      <div class="description">
                        <h3>Perro Labrador</h3>
                        <p>Este es un perro Labrador muy juguetón y cariñoso en busca de un hogar amoroso.</p>
                      </div>
                    </div>
                    <div class="gallery-item">
                      <img src="images/siames.png" alt="Gato Siames">
                      <div class="description">
                        <h3>Gato Siames</h3>
                        <p>Este es un gato Siames elegante y tranquilo que está listo para ser parte de tu familia.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-4 offset-md-2">
                  <div class="slider_detail-box">
                    <h1>
                      <span class="seguir">
                        Nuestras Redes Sociales
                      </span>
                    </h1>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="slider_logo-box">
                    <a href="https://www.instagram.com/patitas_occi" target="_blank" class="social-link"><img src="images/instagram-logo.png" alt="Instagram"></a>
                    <a href="https://www.facebook.com/profile.php?id=61562312045067" target="_blank" class="social-link"><img src="images/face.png" alt="Facebook"></a>
                    <a href="https://twitter.com/patitas_occi" target="_blank" class="social-link"><img src="images/twitter-removebg-preview.png" alt="Twitter"></a>
                  </div>
                </div>                
              </div>
            </div>
          </div>
        </div>
        <!-- Controles de navegación -->
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </a>
      </div>

    </section>
    <!-- end slider section -->
  </div>


  <!-- about section -->


<section class="about_section layout_padding">
  <div class="container">
    <div class="row align-items-center">
      <!-- Imagen -->
      <div class="col-md-6 mb-4 mb-md-0">
        <div class="img-box text-center">
          <img src="images/PerroGato.jpg" alt="Perro y Gato" >
        </div>
      </div>

      <!-- Texto + Video + Botón -->
      <div class="col-md-6">
        <div class="detail-box">
          <h2 class="custom_heading mb-3 text-center">
            Acerca De Nosotros
          </h2>

<style>
  .video-taller {
    aspect-ratio: 16 / 9;
    width: 110%;
    max-width: 800px; /* puedes ajustar esto */
    margin: 0 auto;
  }
</style>

          <!-- Video -->
          <div class="video-taller mb-4">
            <iframe src="https://www.youtube.com/embed/ivQfUnc9g6Q?si=mD3O-edlwXJKwst4" title="Entrevista en Super Cable Noticias" allowfullscreen style="width: 100%; height: 100%; border: none;"></iframe>
          </div>

          <!-- Botón -->
          <a href="clinic" class="btn btn-primary align-items-center">
            Más Información
          </a>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="service_section py-5">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-8 text-center">
        <h2 class="custom_heading2 fw-bold" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: 2.8rem; color: #0d6efd;">
          Nuestros <span style="color: #66b2ff;">Servicios</span>
        </h2>
      </div>
    </div>

    <div class="row g-4 justify-content-center">
      <!-- Servicio 1 -->
      <div class="col-md-4 col-sm-6">
        <div class="service-card p-4 h-100 text-center rounded-4 shadow-sm bg-white" style="border: 1px solid #cce5ff;">
          <div class="img_box mb-3">
            <img src="images/s-2.png" alt="Adopción de Animales" class="img-fluid" style="max-height: 120px; object-fit: contain;">
          </div>
          <h5 class="mb-3 fw-semibold" style="color: #0d6efd;">Adopción de Animales</h5>
          <p class="text-secondary" style="font-size: 1rem;">
            Facilitamos a los potenciales adoptantes encontrar el animal que mejor se adapte a sus necesidades y preferencias.
          </p>
        </div>
      </div>

      <!-- Servicio 2 -->
      <div class="col-md-4 col-sm-6">
        <div class="service-card p-4 h-100 text-center rounded-4 shadow-sm bg-white" style="border: 1px solid #cce5ff;">
          <div class="img_box mb-3">
            <img src="images/s-1.png" alt="Servicios Veterinarios" class="img-fluid" style="max-height: 120px; object-fit: contain;">
          </div>
          <h5 class="mb-3 fw-semibold" style="color: #0d6efd;">Servicios Veterinarios</h5>
          <p class="text-secondary" style="font-size: 1rem;">
            Ofrecemos acceso a una amplia gama de servicios veterinarios para asegurar que las mascotas adopten tengan una vida saludable y feliz.
          </p>
        </div>
      </div>

      <!-- Servicio 3 -->
      <div class="col-md-4 col-sm-6">
        <div class="service-card p-4 h-100 text-center rounded-4 shadow-sm bg-white" style="border: 1px solid #cce5ff;">
          <div class="img_box mb-3">
            <img src="images/s-3.png" alt="Blog y Recursos Educativos" class="img-fluid" style="max-height: 120px; object-fit: contain;">
          </div>
          <h5 class="mb-3 fw-semibold" style="color: #0d6efd;">Blog y Recursos Educativos</h5>
          <p class="text-secondary" style="font-size: 1rem;">
            Información valiosa y importante para prevenir problemas de salud y comportamiento, mejorando la vida de las mascotas.
          </p>
        </div>
      </div>
    </div>

    <div class="row mt-5">
      <div class="col text-center">
        <a href="service" class="btn btn-primary btn-lg px-5 rounded-pill fw-semibold shadow-sm" 
           style="background: linear-gradient(90deg, #0d6efd, #66b2ff); border: none; transition: background 0.3s ease;">
          Leer Más
        </a>
      </div>
    </div>
  </div>
</section>

<style>
  .service-card:hover {
    box-shadow: 0 12px 24px rgba(13, 110, 253, 0.3);
    transform: translateY(-6px);
    transition: all 0.3s ease;
    border-color: #0d6efd !important;
  }

  .btn-primary:hover {
    background: linear-gradient(90deg, #66b2ff, #0d6efd);
  }

  @media (max-width: 575.98px) {
    .service-card {
      max-width: 100%;
      margin: 0 auto;
    }
  }
</style>


  <!-- end service section -->
@php

    include resource_path("php/conex.php");
    $sql = "SELECT * FROM mascotas";
    $result = $conn->query($sql);

    
    // Cerrar conexión
$conn->close();
@endphp

  <!-- gallery section -->
  @php
  // Asumiendo que ya tienes tu conexión a la base de datos establecida

  include resource_path("php/conex.php");
  $slq = "SELECT * FROM mascotas LIMIT 6"; // Limita el resultado a 6 tarjetas
  $result = $conn->query($sql);

  // Contador para los ítems del carrusel
  $itemCount = 0;
@endphp

<section class="py-5">
  <div class="container">
    <h2 class="destacado mb-4 text-center fw-bold" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: 2.4rem; color: #222;">
      Mascotas Destacadas
    </h2>
    <p class="text-center mb-5 text-muted fst-italic" style="font-size: 1rem;">
      Desliza o usa las flechas para descubrir a estas hermosas mascotas 🐾
    </p>

    <div id="cardCarouselDestacados" class="carousel slide position-relative" 
         data-bs-ride="carousel" data-bs-interval="3500" data-bs-pause="false" data-bs-wrap="true" 
         style="max-width: 960px; margin: 0 auto;">

      <div class="carousel-inner">
        @php
          $mascotas = $result->fetch_all(MYSQLI_ASSOC);
          $chunks = array_chunk($mascotas, 1);
        @endphp

        @forelse ($chunks as $index => $chunk)
          <div class="carousel-item @if($index == 0) active @endif">
            <div class="d-flex justify-content-center gap-4 flex-wrap">
              @foreach ($chunk as $row)
                <div class="card shadow-sm rounded-3 flex-grow-1" style="max-width: 460px; min-width: 300px; transition: transform 0.3s ease;">
                  <a href="{{ route('info', ['id_mascota' => $row['id_mascota']]) }}" class="d-block overflow-hidden rounded-top">
                    <img src="{{ asset('images/' . $row['foto']) }}" alt="Imagen de {{ $row['nombre'] }}" 
                         class="card-img-top" style="height: 280px; object-fit: cover; border-top-left-radius: .75rem; border-top-right-radius: .75rem;">
                  </a>
                  <div class="card-body d-flex flex-column">
                    <h5 class="card-title fw-semibold" style="color: #1a1a1a;">{{ $row['nombre'] }}</h5>
                    <p class="card-text text-truncate fst-italic text-secondary" style="font-size: 0.95rem;">
                      {{ $row['historia'] }}
                    </p>
                    <a href="{{ route('info', ['id_mascota' => $row['id_mascota']]) }}" 
                       class="btn btn-outline-primary mt-auto rounded-pill fw-semibold" style="font-weight: 600;">
                      Ver detalles
                    </a>
                  </div>
                </div>
              @endforeach
            </div>
          </div>
        @empty
          <p class="text-center fs-5 text-muted">No hay mascotas disponibles en este momento.</p>
        @endforelse
      </div>

      <!-- Botones de navegación grandes y limpios -->
      <button class="carousel-control-prev" type="button" data-bs-target="#cardCarouselDestacados" data-bs-slide="prev" 
              aria-label="Anterior" style="width: 48px; height: 48px; top: 50%; transform: translateY(-50%);">
        <span class="carousel-control-prev-icon" style="filter: invert(25%) sepia(2%) saturate(750%) hue-rotate(160deg) brightness(90%) contrast(85%);"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#cardCarouselDestacados" data-bs-slide="next" 
              aria-label="Siguiente" style="width: 48px; height: 48px; top: 50%; transform: translateY(-50%);">
        <span class="carousel-control-next-icon" style="filter: invert(25%) sepia(2%) saturate(750%) hue-rotate(160deg) brightness(90%) contrast(85%);"></span>
      </button>
    </div>
  </div>
</section>

<style>
  /* Hover sutil y moderno */
  .carousel-item .card:hover {
    transform: scale(1.04);
    box-shadow: 0 12px 24px rgba(0, 0, 0, 0.12);
  }

  /* Que el texto truncado se vea limpio */
  .card-text.text-truncate {
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;  
    overflow: hidden;
  }

  /* Responsive: en móviles mostrar 1 card centrada */
  @media (max-width: 767.98px) {
    #cardCarouselDestacados .carousel-inner > .carousel-item > div {
      flex-wrap: nowrap !important;
      justify-content: center !important;
    }
    #cardCarouselDestacados .card {
      max-width: 90vw !important;
      min-width: auto !important;
    }
  }
</style>





<!-- Sección de Testimonios Mejorada -->
<section class="client_section py-5 bg-light">
  <div class="container">
    <div class="heading_container text-center mb-4">
      <h2 class="destacado">Testimonios</h2>
      <p class="text-muted">Desliza hacia los lados para leer más experiencias 🐾</p>
    </div>

    <div class="carousel-wrap position-relative">
      <div class="owl-carousel owl-theme">

        <!-- Testimonio 1 -->
        <div class="item" onclick="openModal('images/e-g.jpeg', 'Eduardo Gonzales', '“Patitas Occi fue una bendición en el proceso de poder buscar el hogar adecuado a una perrita hermosa que rescatamos de la calle...”')">
          <div class="testimonial-card p-4 bg-white rounded shadow-sm h-100">
            <div class="d-flex align-items-center mb-3">
              <img src="images/e-g.jpeg" alt="Eduardo Gonzales" class="rounded-circle me-3" style="width: 80px; height: 80px; object-fit: cover;">
              <div>
                <h6 class="mb-0">Eduardo Gonzales</h6>
                <div class="text-warning">★★★★★</div>
              </div>
            </div>
            <p class="text-muted fst-italic">“Patitas Occi fue una bendición...”</p>
          </div>
        </div>

        <!-- Testimonio 2 -->
        <div class="item" onclick="openModal('images/testi1.jpg', 'Carolina', '“La página está muy bien organizada, y cada perfil incluye toda la información necesaria. Me ahorró mucho tiempo.”')">
          <div class="testimonial-card p-4 bg-white rounded shadow-sm h-100">
            <div class="d-flex align-items-center mb-3">
              <img src="images/testi1.jpg" alt="Carolina" class="rounded-circle me-3" style="width: 80px; height: 80px; object-fit: cover;">
              <div>
                <h6 class="mb-0">Carolina</h6>
                <div class="text-warning">★★★★★</div>
              </div>
            </div>
            <p class="text-muted fst-italic">“La página está muy bien organizada...”</p>
          </div>
        </div>

        <!-- Testimonio 3 -->
        <div class="item" onclick="openModal('images/canela_dueño.jp..jpg', 'Andy Esquivel', '“Desde que conocí a Canela, supe que era especial. Adoptar fue la mejor decisión. Ha llenado nuestras vidas de amor y alegría.”')">
          <div class="testimonial-card p-4 bg-white rounded shadow-sm h-100">
            <div class="d-flex align-items-center mb-3">
              <img src="images/canela_dueño.jp..jpg" alt="Andy Esquivel" class="rounded-circle me-3" style="width: 80px; height: 80px; object-fit: cover;">
              <div>
                <h6 class="mb-0">Andy Esquivel</h6>
                <div class="text-warning">★★★★★</div>
              </div>
            </div>
            <p class="text-muted fst-italic">“Desde que conocí a Canela...”</p>
          </div>
        </div>
      </div>

      <!-- Botones personalizados -->
      <div class="custom-nav text-center mt-4">
        <button class="btn btn-outline-primary me-2 owl-prev"><i class="fa fa-chevron-left"></i> Anterior</button>
        <button class="btn btn-outline-primary owl-next">Siguiente <i class="fa fa-chevron-right"></i></button>
      </div>

      <!-- Botón para dejar testimonio -->
      <div class="text-center mt-4">
        <a href="https://wa.me/50671102846?text=¡Hola! Quiero dejar mi testimonio sobre mi experiencia con Patitas Occi" target="_blank" class="btn btn-success">
          Quiero compartir mi experiencia 🐶
        </a>
      </div>
    </div>
  </div>
</section>

<div id="testimonialModal" class="modal fade" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content text-center">
      <div class="modal-header">
        <h5 class="modal-title" id="modalName"></h5>
        <!-- Botón cerrar correcto para Bootstrap 5 -->
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img id="modalImage" src="" alt="" class="img-fluid rounded mb-3" style="max-height: 250px; object-fit: cover;">
        <p class="fst-italic" id="modalText"></p>
      </div>
    </div>
  </div>
</div>





  <!-- end gallery section -->

  <!-- buy section -->
  <!-- end buy section -->
<!--Pratrocinadores-->
<!-- <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/sponsor.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/sponsor 1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div> -->
  <!-- client section -->

  <!-- end client section -->



<section>
  <div class="container-fluid text-white mt-0 mt-n0 pt-0 py-0 px-sm-3 px-md-0" style="background: #00c8ffdb;">
      <div class="row pt-5">
          <div class="logo_foot"><img src="images/IMG_7977-removebg.png" alt=""></div>
          <div class="col-lg-8 col-md-12">
              <div class="row">
                  <div class="col-md-4 mb-5">

                  <a href="https://www.google.com/maps/place/Provincia+de+Alajuela,+San+Ramón/@10.0907688,-84.4691332,15z/data=!3m1!4b1!4m6!3m5!1s0x8fa044e377d3afdb:0x25fec024d645683a!8m2!3d10.0910284!4d-84.4703933!16s%2Fm%2F02vsng7?entry=ttu" target="_blank" style="text-decoration: none;">
    <p><i class="fa fa-map-marker-alt mr-2 pt-4"></i>San Ramón - Alajuela</p>
</a>
<a href="tel:+506 71102846" target="_blank" style="text-decoration: none;">
    <p><i class="fa fa-phone-alt mr-2"></i>71102846</p>
</a>
<a href="mailto:name@email.com" target="_blank" style="text-decoration: none;">
    <p><i class="fa fa-envelope mr-2"></i>patitasocci@gmail.com</p>
</a>
<a href="https://wa.me/50671102846" target="_blank" style="text-decoration: none;">
    <p><i class="fa fa-whatsapp mr-2"></i>Enviar mensaje por WhatsApp</p>
</a>
                  </div>
                  <div class="col-md-4 mb-5">

                      <div class="d-flex flex-column justify-content-start pt-3">
                          <a class="text-white mb-2" href="index"><i class="fa fa-angle-right mr-2"></i>Inicio</a>
                          <a class="text-white mb-2" href="service"><i class="fa fa-angle-right mr-2"></i>Nuestros Servicios</a>
                          <a class="text-white mb-2" href="pet"><i class="fa fa-angle-right mr-2"></i>Adopciones</a>
                          <a class="text-white" href="contact"><i class="fa fa-angle-right mr-2"></i>Contactanos</a>
                      </div>
                  </div>
                  <div class="col-md-4 mb-5">
                      <h5 class="text-primary mb-4"></h5>
                      <div class="d-flex justify-content-cemter  mt-5 ">
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="https://www.facebook.com/profile.php?id=61562312045067&mibextid=LQQJ4d"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="https://www.instagram.com/patitas_occi/"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="https://wa.me/50671102846"><i class="fab fa-whatsapp"></i></a>

                    </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="container-fluid text-white py-4 px-sm-2 px-md-5" style="background: #000000db;">
      <div class="row">
          <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
              <p class="m-0 text-white">
                  &copy; <a class="text-white font-weight-bold" href="index">Patitas Occi</a>. Derechos Reservados 2024
              </p>
          </div>
          <div class="col-md-6 text-center text-md-right">
              <ul class="nav d-inline-flex">
                  <li class="nav-item">
                      <a class="nav-link text-white py-0" href="#">Privacidad</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-white py-0" href="#">Terminos</a>
                  </li>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-white py-0" href="#">Ayuda</a>
                  </li>
              </ul>
          </div>
      </div>
  </div>
  <!-- Footer End -->
  </section>
  <!-- footer section -->
<!-- jQuery (solo una versión) -->


      @php
// Cerrar la conexión al final, pero antes de cerrar el body y html
$conn->close();
@endphp

<!-- jQuery (una sola versión) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Bootstrap Bundle con Popper.js -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>

<!-- Librerías adicionales -->
<script src="lib/easing/easing.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/tempusdominus/js/moment.min.js"></script>
<script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
<script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>


<!-- Script del carrusel de testimonios -->
<script>
    $(document).ready(function(){
        $(".owl-carousel").owlCarousel({
            loop: true,
            margin: 20,
            nav: true,
            responsive: {
                0: { items: 1 },
                768: { items: 2 },
                1000: { items: 2 }
            }
        });
    });
</script>

<!-- Integración con Voiceflow -->
<script type="text/javascript">
  (function(d, t) {
      var v = d.createElement(t), s = d.getElementsByTagName(t)[0];
      v.onload = function() {
        window.voiceflow.chat.load({
          verify: { projectID: '66cc8d14fa85a7602390ca87' },
          url: 'https://general-runtime.voiceflow.com',
          versionID: 'production'
        });
      }
      v.src = "https://cdn.voiceflow.com/widget/bundle.mjs"; v.type = "text/javascript"; s.parentNode.insertBefore(v, s);
  })(document, 'script');
</script>

<!-- Scripts personalizados -->
<script src="js/bootstrap1.js"></script>
<script src="js/javascript1.js"></script>
<script>
  function openModal(imageSrc, name, text) {
    document.getElementById('modalImage').src = imageSrc;
    document.getElementById('modalName').textContent = name;
    document.getElementById('modalText').textContent = text;
    var modal = new bootstrap.Modal(document.getElementById('testimonialModal'));
    modal.show();
  }

  // Owl Carousel init
  $(document).ready(function () {
    var owl = $(".owl-carousel").owlCarousel({
      loop: true,
      margin: 20,
      nav: false,
      responsive: {
        0: { items: 1 },
        768: { items: 2 },
        992: { items: 3 }
      }
    });

    $(".owl-prev").click(function () {
      owl.trigger("prev.owl.carousel");
    });

    $(".owl-next").click(function () {
      owl.trigger("next.owl.carousel");
    });
  });
</script>

</body>

</html>