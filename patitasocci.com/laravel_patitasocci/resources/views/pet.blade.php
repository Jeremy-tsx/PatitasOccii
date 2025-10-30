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

  <title>Adopciones</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="httpscdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="httpscdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Js y Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>


    <!-- CSS Libraries -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="{{ asset('lib/flaticon/font/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Custom CSS -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">

  <!-- fonts style -->
  <link href="httpsfonts.googleapis.com/css?family=Dosis:400,500|Poppins:400,700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">



</head>

<style>

    body{
        font-family: 'Times New Roman', Times, serif;
        margin: 0;
    }
        .wrapper {
    display: flex;
    flex-wrap: wrap;
}
.filter-form {
    width: 35%;
    background-color: #ffffff;
    border-radius: 8px;
    padding: 20px;
    padding-bottom: 150px;
    margin-bottom: 20px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.filter-form select,
.filter-form input,
.filter-form button {
    width: 100%;
    padding: 10px;
    margin: 5px 0;
    border: 1px solid #ddd;
    border-radius: 4px;
    transition: transform 0.2s ease-in-out;
}

.filter-form select:hover,
.filter-form input:hover,
.filter-form button:hover {
    transform: scale(1.08);
}

.filter-form button {
    background-color: #0dc3ff;
    color: white;
    border: none;
    cursor: pointer;
}

.filter-form button:hover {
    background-color: #0056b3;
}
.toggle-filter-btn{
    display: none;
}

@media (max-width: 768px) {
    .filter-form {
        display: none;
        position: fixed;
        top: 60px; /* Ajusta según el diseño */
        left: 0;
        width: 100%;
        background-color: #ffffff;
        padding: 20px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        z-index: 1000;
    }

    .toggle-filter-btn {
        display: block;
        width: 100%;
        background-color: #0dc3ff;
        color: white;
        border: none;
        padding: 10px;
        text-align: center;
        cursor: pointer;
    }

    .toggle-filter-btn:hover {
        background-color: #0056b3;
    }
}
    </style>

<body class="sub_page">
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
                            <a class="nav-link" href="{{ url('index') }}">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('service') }}">Servicio</a>
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



<div class="wrapper">
  
<button class="toggle-filter-btn" onclick="toggleFilter()" >Mostrar Filtros</button>

<form class="filter-form" method="GET" action="{{route('pet.index')}}">
@auth
@if (Auth::user()->tipo==1) 
<a href="agregar" 
   onclick="return confirm('¿Estás seguro de que deseas editar esta mascota?');">
   <button type="button" class="adopt-btn" >Agregar Mascota Nueva</button>
</a>
@endif
@endauth
        <select name="tipo">
            <option value="">Todas las categorías</option>
            <option value="perro">Perros</option>
            <option value="gato">Gatos</option>
        </select>

        <select name="color">
            <option value="">Color</option>
            <option value="blanco">Blanco</option>
            <option value="negro">Negro</option>
            <option value="cafe">Café</option>
            <option value="macho">Macho</option>
            <option value="gris">Gris</option>
            

        </select>

 

        <select name="sexo">
            <option value="">Sexo</option>
            <option value="macho">Macho</option>
            <option value="hembra">Hembra</option>
        </select>

        <select name="raza">
            <option value="">Raza de perro</option>
            <option value="Zaguate">Sin Raza definida</option>
            <option value="poodle_miniatura">Poodle miniatura</option>
            <option value="chihuahua">Chihuahua</option>
            <option value="American Stanford">American Stanford</option>
            <option value="schnauzer_miniatura">Schnauzer miniatura</option>
            <option value="pinscher_miniatura">Pinscher miniatura</option>
            <option value="labrador">Labrador</option>
            <option value="pastor_aleman">Pastor Alemán</option>
            <option value="doberman">Dóberman</option>
            <option value="pequines">Pequinés</option>
            <option value="salchicha_dachshund">Salchicha Dachshund</option>
            <option value="maltes">Maltes</option>
            <option value="cocker_spaniel">Cocker Spaniel</option>
            <option value="rottweiler">Rottweiler</option>
            <option value="beagle">Beagle</option>
            <option value="husky">Husky</option>
            <option value="golden_retriver">Golden Retriver</option>
            <option value="boxer">Bóxer</option>
            <option value="otra">Otra</option>
        </select>

        <select name="edad_">
            <option value="">Edad</option>
            <option value="cachorro">3 - 6 Meses</option>
            <option value="adolecente">6 - 24 Meses</option>
            <option value="adulto">2 - 6 Años</option>
            <option value="anciano">7 - 11 Años</option>
            <option value="geriatrico">+12 Años</option>
        </select>

        <select name="tamano">
            <option value="">Tamaño</option>
            <option value="pequeno">Pequeño (1kg - 5kg)</option>
            <option value="mediano">Mediano (6kg - 20kg)</option>
            <option value="grande">Grande (Más de 20kg)</option>
        </select>



        <button type="submit">Actualizar</button>
    </form>

    

    <div class="items-container">      
             @foreach ($mascotas as $row)
             
            <div class="item">
            <figure onclick="window.location.href='{{ route('info', ['id_mascota' => $row->id_mascota]) }}'">
            <img src="images/{{ $row->foto}}" class="img" alt="Imagen de {{$row->nombre}} ">
                </figure>
                <div class="info-product">
                <h2>Nombre:  {{$row->nombre}} </h2>
                <p class="price"> {{$row->historia}}</p>
                <form action="{{ route('info', ['id_mascota' => $row->id_mascota]) }}" method="GET">
            <button type="submit" class="add-to-cart">Ver detalles</button>
        </form>
                 </div>
                 </div>
@endforeach

         </div>
         </div>



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
  </section>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Back to Top -->
<!-- <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a> -->

<!-- Bootstrap Bundle con Popper.js (para que todo funcione correctamente) -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>

<!-- Librerías adicionales -->
<script src="lib/easing/easing.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/tempusdominus/js/moment.min.js"></script>
<script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
<script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

<!-- Tus scripts personalizados -->
<script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script> <!-- si es necesario -->
<script src="{{ asset('js/bootstrap1.js') }}"></script>
<script src="{{ asset('js/javascript1.js') }}"></script>
<script type="text/javascript"> 



