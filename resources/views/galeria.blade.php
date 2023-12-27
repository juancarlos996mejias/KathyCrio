<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel= "shortcut icon"href="../img/logo kathy_isotipo.png" style="height: 50px;">
    <title>KathyCrio</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/85fec555d4.js" crossorigin="anonymous"></script>
    <link rel="preconectar" href="https://fonts.googleapis.com">
<link  rel="preconectar" href="https://fonts.gstatic.com" crossorigin>
<link  href="https: //fonts.googleapis.com/css2? family= Roboto & display=swap" rel="hoja de estilo">
<link  rel="preconectar" href="https://fonts.googleapis.com">
<link  rel="preconectar" href="https://fonts.gstatic.com" crossorigin>
<link  href="https: //fonts.googleapis.com/css2? familia= Roboto:peso@700 & display=swap" rel="hoja de estilo">
</head>
<header>

    <nav class="navbar fixed-top" style="background: #73777B;">
        <div class="container-fluid">
            <div class="">
            <a class="home" href="{{ url('/home') }}"><img src="../img/logoNew2.png"></a>
            </div>
            <div class="contenedor d-flex">


            

            <ul class="nav-item">
            <a class="nav-link" href="/quienesSomos"><p>Quienes Somos</p></a>
           
            </ul>

            <ul class="nav-item">
            <a class="nav-link" href="/criolipolisis"><p>Criolipolisis</p></a>
            </ul>

            <ul class="nav-item">
            <a class="nav-link" href="/masajes"><p>Masajes</p></a>
            </ul>

            <ul class="enfermeria">
            <a class="nav-link" href="/enfermeria"><p>Enfermeria</p></a>
            </ul>

            <ul class="galeria">
            <a class="nav-link" href="/galeria"><p>Galeria</p></a>
            </ul>

            <ul class="contacto">
            <a class="nav-link" href="/contacto"><p>Contacto</p></a>
            </ul>

           
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><img src="../img/isotipo.png">KathyCrio</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ url('/home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/register') }}">Register</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Select
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else aqui</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex mt-3" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </div>
</nav>


</header>

<body>

<div class="construccion">
<img src="../img/construccion.avif">
</div>
</body>

            

