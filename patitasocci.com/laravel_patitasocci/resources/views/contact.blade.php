<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <link rel="icon" href=images/favicon.ico type="image/png">
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Patitas Occi - Contactanos</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  

    <!-- Custom CSS -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">

    
    <!-- Js y Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>

</head>

<body class="sub_page">
<div class="hero_area">    <!-- Sección Header -->
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
                            <a class="nav-link" href="{{ url('index') }}">Inicio</a>
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
            <li><a class="dropdown-item" href="{{ url('/user-list') }}">Dashboard</a></li>
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

  <!-- map section -->

  <section class="map_section">
    <div id="map" class="h-100 w-100">
        <img src="images/form.jpg" alt="" class="fondo-form">
    </div>
    <div class="form_container">
        <div class="row">
            <div class="col-md-8 col-sm-10 offset-md-4">
                <form id="contactForm" action="php/proceso.php" method="post">
                    <div class="text-center">
                        <h3>Contáctanos</h3>
                    </div>
                    <div>
                        <input type="text" name="nombre" id="nombre" placeholder="Nombre" class="pt-3" required>
                        <small class="error" id="nombreError"></small>
                    </div>
                    <div>
                        <input type="tel" name="telefono" id="telefono" placeholder="Número Telefono" required>
                        <small class="error" id="telefonoError"></small>
                    </div>
                    <div>
                        <input type="email" name="email" id="email" placeholder="Email" required>
                        <small class="error" id="emailError"></small>
                    </div>
                    <div>
                        <textarea name="mensaje" id="mensaje" placeholder="Mensaje" required oninput="autoResize(this)"></textarea>
                        <small class="error" id="mensajeError"></small>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" id="submitBtn">Enviar</button>
                    </div>
                    <div id="formMessage"></div>
                </form>
            </div>
        </div>
    </div>
</section>

  <!-- end map section -->



  <!-- end info_section -->

  <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      &copy; 2024 Derechos reservador por
      <a href="index.html">Patitas Occi</a>
    </p>
  </section>
  <!-- footer section -->
   <!-- jQuery (una sola versión) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Bootstrap Bundle con Popper.js -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
  <script src="js/bootstrap1.js"></script>
<script src="js/javascript1.js"></script>

</body>
</html>

  
  