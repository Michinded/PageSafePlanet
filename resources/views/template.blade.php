<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sitio web de Safe Planet, una empresa comprometida con el cuidado del planeta y la promoción del ahorro de energía en los hogares.">
    <title>Safe Planet - Ahorro de energía para el hogar</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Estilos personalizados -->
    <link rel="stylesheet" href="{{asset('assets/estilos.css')}}">
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('assets/images/icon.png')}}">
  </head>
  <body>
    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="#">Safe Planet</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#inicio">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#nosotros">Nosotros</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#productos">Productos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#articulos">Artículos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contacto">Contacto</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/login">Iniciar sesión</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/register">Registrarse</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Encabezado -->
    <header class="header">

    </div>
    <div class="header-overlay"></div>
    <div class="header-content">
      <div class="container">
        <h1>Ahorro de energía para el hogar</h1>
        <p>Energía inteligente para un hogar eficiente. Nuestra misión es cuidar del planeta, ¿te unes a nosotros?</p>
        <a href="#nosotros" class="btn btn-primary">Conócenos</a>
        <a href="#productos" class="btn btn-primary">Nuestros productos</a>
      <a href="#contacto" class="btn btn-primary">Contáctanos</a>
      <a href="/login" class="btn btn-primary">Iniciar sesión</a>
      <a href="/register" class="btn btn-primary">Registrarse</a>
      </div>
    </div> 
</header>

    <!-- Contenido -->
      @yield('contenido')

 <!-- Pie de página -->
 <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h3 class="footer__title">Safe Planet</h3>
          <p class="footer__description">Somos una empresa comprometida con el cuidado del planeta y la promoción del ahorro de energía en los hogares.</p>
          <ul class="footer__contact">
            <li><i class="fas fa-map-marker-alt"></i> Carretera Estatal 420 S/N, El Rosario, 76240, 76240 Santiago de Querétaro, Qro.</li>
            <li><i class="fas fa-phone-alt"></i>+52 1 442 343 7114</li>
            <li><i class="fas fa-envelope"></i>safeplanetecohogar@gmail.com</li>
          </ul>
        </div>
        <div class="col-md-4">
          <h3 class="footer__title">Enlaces útiles</h3>
          <ul class="footer__links">
            <li><a href="#nosotros">Nosotros</a></li>
            <li><a href="#productos">Productos</a></li>
            <li><a href="#articulos">Artículos</a></li>
            <li><a href="#contacto">Contacto</a></li>
          </ul>
        </div>
        <div class="col-md-4">
          <h3 class="footer__title">Síguenos en las redes</h3>
          <div class="footer__social">
            <a href="#" class="btn btn-primary"><i class="fab fa-facebook-f"></i> Facebook</a>
            <a href="#" class="btn btn-info"><i class="fab fa-twitter"></i> Twitter</a>
            <a href="https://www.instagram.com/safeplanete/" class="btn btn-danger"><i class="fab fa-instagram"></i> Instagram</a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <p class="footer__copy">© 2023 Safe Planet. Todos los derechos reservados.</p>
        </div>
      </div>
    </div>
  </footer>
<!-- Fin Pie de página -->
<!-- jQuery y Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper-core.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

  </body>
</html>