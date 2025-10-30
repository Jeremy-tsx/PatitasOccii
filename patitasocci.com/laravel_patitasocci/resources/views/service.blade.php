<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Servicios</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="{{ asset('images/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="{{ asset('lib/flaticon/font/flaticon.css') }}" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Dosis:400,500|Poppins:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

     <!-- Js y Bootstrap -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>


        <!-- CSS Libraries -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="{{ asset('lib/flaticon/font/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}" />

    <!-- Fonts Style -->
    <link href="https://fonts.googleapis.com/css?family=Dosis:400,500|Poppins:400,700&display=swap" rel="stylesheet">

    <!-- Custom Styles for this Template -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/style-pet.css') }}" rel="stylesheet">

    <!-- Responsive Style -->
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" />
</head>
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

    <!-- Services Start -->
    <div class="container-fluid1 bg-light pt-2"> 
        <div class="container py-5">
            <div class="d-flex flex-column text-center mb-5 "  >
                <h1 class="display-4 m-0"><span class="text-primary">Nuestros</span> Servicios</h1>
            </div>
            <div class="row pb-3">
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5 service-card" >
                        <h3 class="flaticon-house display-3 font-weight-normal text-secondary mb-3"></h3>
                        <h3 class="mb-3">Adopción de Animales
                        </h3>
                        <p>Facilitamos a los potenciales adoptantes en encontrar el animal que mejor se adapte a sus necesidades y preferencias.</p>
                        <a class="text-uppercase font-weight-bold" href="pet"></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5 service-card">
                        <h3 class="flaticon-vaccine display-3 font-weight-normal text-secondary mb-3"></h3>
                        <h3 class="mb-3">Servicios Veterinarios
                        </h3>
                        <p>Ofrecemos acceso a una amplia gama de servicios veterinarios para asegurar que las mascotas adopten una vida saludable y feliz.</p>
                        <a class="text-uppercase font-weight-bold" href=""></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5 service-card">
                        <h3 class="flaticon-grooming display-3 font-weight-normal text-secondary mb-3"></h3>
                        <h3 class="mb-3">Productos para Mascotas
                            
                        </h3>
                        <p>Ofrecemos una variedad de productos como alimentos, juguetes, camas, correas, y otros accesorios esenciales para mascotas.</p>
                        <a class="text-uppercase font-weight-bold" href="buy"></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5 service-card">
                        <h3 class="flaticon-cat display-3 font-weight-normal text-secondary mb-3"></h3>
                        <h3 class="mb-3">Blog y Recursos Educativos</h3>
                        <p>Información valiosa y importante para prevenir problemas de salud y comportamiento, mejorando la vida de las mascotas.</p>
                        <a class="text-uppercase font-weight-bold" href=""></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5 service-card">
                        <img src="images/camara.png" alt="" style="width: 135px; height: 100px; margin: 0 auto; " class="mb-3">
                        <h3 class="mb-3">Servicio Fotografico</h3>
                        <p>Ofrecemos sesiones fotográficas para mascotas, capturando momentos especiales y adorables. Reserva tu sesión y obtén fotos profesionales de tu mascota. </p>
                        <a class="text-uppercase font-weight-bold" href=""></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5 service-card">
                        <img src="images/vip.png" alt="" style="width: 115px; height: 100px; margin: 0 auto; " class="mb-3">
                        <h3 class="mb-3">Adopciones VIP</h3>
                        <p>Se dará la opcion de pagar un plan de adopción teniendo beneficios a la hora de adoptar, teniendo un pack a escoger en las veterinarias selecionadas.</p>
                        <a class="text-uppercase font-weight-bold" href=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <!-- Services End -->
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
    
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>

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

</body>

</html>