<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AYM Ingeniería y Construcción SAC</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../css/index.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <div class="d-flex justify-content-between w-100">
            <div class="navbar-brand d-flex justify-content-center w-100 d-lg-inline-block">
                <img src="../img/logito.png" alt="Logo" class="img-fluid mb-3 mb-lg-0" style="max-height: 50px;">
            </div>
            <div class="navbar-brand d-none d-lg-inline-block">
                <a href="#" class="navbar-brand">AYM Ingeniería y Construcción SAC</a>
            </div>         
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="#">Inicio</a></li>
                <li class="nav-item"><a class="nav-link" href="#nosotros">Nosotros</a></li>
                <li class="nav-item"><a class="nav-link" href="#sectores">Sectores</a></li>
                <li class="nav-item"><a class="nav-link" href="registrar.php">Registrarse</a></li>
                <li class="nav-item"><a class="nav-link" href="#contacto">Contacto</a></li>
            </ul>
        </div>
    </div>
</nav>

<section class="text-center py-5" style="background-color: #d0e1ff;">
    <h2>Desarrollamos y gestionamos proyectos de construcción e ingeniería para múltiples sectores</h2>
    <p>Atendemos sectores oil & gas, energía, plantas industriales y obras civiles de arquitectura e infraestructura.</p>
    <a href="#" class="btn btn-success">Ver servicios</a>
</section>

<section id="nosotros" class="container text-center py-5 ">
    <div class="row">
        <div class="col-md-8">
            <h3 class="text-primary">NUESTRA EMPRESA</h3>
            <p>AYM CONSULTORES Y EJECUTORES E.I.R.L., con RUC 20603699140, somos una empresa consolidada en el mercado especializada en servicios industriales...</p>
            <a href="#" class="btn btn-success mb-3 mb-sm-5">Conoce más</a>
        </div>
        <div class="col-md-4">
            <div>
                <img src="../img/nuestra-empresa.PNG" alt="Imagen 1" class="card-img-top rounded-lg" style="height: 200px; object-fit: cover;">   
            </div> 
        </div>
    </div>
</section>

<section id="sectores" class="text-center py-5" style="background-color: #d0e1ff;">
    <h3>NUESTROS SECTORES</h3>
    <p>Tenemos lo que Ud. necesita. Equipos y profesional técnico de primer nivel...</p>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-6 py-2">
                <div class="card h-100">
                    <img src="../img/industria.PNG" alt="industria" class="card-img-top rounded-lg" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">Industria</h5>
                        <p class="card-text">Descripción breve de la industria.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-6 py-2">
                <div class="card h-100">
                    <img src="../img/agro-industria.PNG" alt="agro industria" class="card-img-top rounded-lg" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">Agro Industria</h5>
                        <p class="card-text">Descripción breve de la agroindustria.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-6 py-2">
                <div class="card h-100">
                    <img src="../img/construccion.PNG" alt="construcción" class="card-img-top rounded-lg" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">Construcción</h5>
                        <p class="card-text">Descripción breve de la construcción.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-6 py-2">
                <div class="card h-100">
                    <img src="../img/eventos.PNG" alt="eventos" class="card-img-top rounded-lg" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">Eventos</h5>
                        <p class="card-text">Descripción breve de los eventos.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-6 py-2">
                <div class="card h-100">
                    <img src="../img/servicios-generales.PNG" alt="servicios generales" class="card-img-top rounded-lg" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">Servicios Generales</h5>
                        <p class="card-text">Descripción breve de los servicios generales.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="contacto" class="container text-center py-5">
    <h3 class="text-center text-primary">CONTACTO</h3>
    <div class="row">
        <div class="col-md-6">
            <input type="text" class="form-control mb-2" placeholder="Nombres">
            <input type="text" class="form-control mb-2" placeholder="Apellidos">
        </div>
        <div class="col-md-6">
            <input type="email" class="form-control mb-2" placeholder="Correo electrónico">
            <textarea class="form-control mb-2" placeholder="Mensaje"></textarea>
        </div>
    </div>
    <div class="text-center">
        <button class="btn btn-success mb-3 mb-sm-5">Enviar</button>
    </div>
</section>

<footer class="text-center text-white" style="background-color: #003366;">
    <div class="container py-4">
        <img src="../img/logo.png" alt="Logo AYM" class="mb-3">
        <div class="row">
            <div class="col-md-6">
                <h5>Enlaces:</h5>
                <p>¿Quiénes somos?</p>
                <p>Ingeniería</p>
                <p>Alquileres</p>
                <p>Mantenimiento</p>
            </div>
            <div class="col-md-6">
                <h5>Síguenos en:</h5>
                <p>Facebook <i class="fab fa-facebook-f"></i></p>
                <p>LinkedIn <i class="fab fa-linkedin"></i></p>
            </div>
        </div>
        <br>
        <p>&copy; 2024 AYM Consultores & Ejecutores.</p>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
