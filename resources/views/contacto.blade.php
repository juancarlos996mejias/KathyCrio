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

<div class="map">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3284.6542958247774!2d-58.418026524731296!3d-34.58761295664714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcca802423284b%3A0xf3ffae4089468234!2sG%C3%BCemes%203774%2C%20C1425%20CABA!5e0!3m2!1ses!2sar!4v1683892051144!5m2!1ses!2sar" width="1350" height="1000" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>



</header>

<footer>
<div>
        <div class="footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <h4 class="footer-heading">Funda E-Commerce</h4>
                        <div class="footer-underline"></div>
                        <div class="parrafo">
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                        </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <h4 class="footer-heading">Enlaces Rápidos</h4>
                        <div class="footer-underline"></div>
                        <div class="mb-2"><a href="" class="text-white">Menu Principal</a></div>
                        <div class="mb-2"><a href="" class="text-white">Nosotros</a></div>
                        <div class="mb-2"><a href="" class="text-white">Contacto</a></div>
                        <div class="mb-2"><a href="" class="text-white">Blogs</a></div>
                        <div class="mb-2"><a href="" class="text-white">Mapa del Sitio</a></div>
                    </div>
                    <div class="col-md-3">
                        <h4 class="footer-heading">Solicitá tu turno</h4>
                        <div class="footer-underline"></div>
                        <div class="mb-2"><a href="" class="text-white">Promociones</a></div>
                        <div class="mb-2"><a href="" class="text-white">Nuestros Servicios</a></div>
                        <div class="mb-2"><a href="" class="text-white">Lo mas Reciente</a></div>
                        <div class="mb-2"><a href="" class="text-white">Servicios Destacados</a></div>
                        
                    </div>
                    <div class="col-md-3">
                        <h4 class="footer-heading">Llegar a Nosotras</h4>
                        <div class="footer-underline"></div>
                        <div class="mb-2">
                            <div class="direccion">
                            <p>
                                <i class="fa fa-map-marker"></i> #444, some main road, some area, some street, bangalore, india - 560077
                            </p>
                            </div>
                        </div>
                        <div class="mb-2">
                            <a href="" class="text-white">
                                <i class="fa fa-phone"></i> +91 888-XXX-XXXX
                            </a>
                        </div>
                        <div class="mb-2">
                            <a href="" class="text-white">
                                <i class="fa fa-envelope"></i> Kacukaquequeko@gmail.com
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <p class=""> &copy; 2022 - Funda of Web IT - Ecommerce. All rights reserved.</p>
                    </div>
                    <div class="col-md-4">
                        <div class="social-media">
                            Conectarse:
                            <a href=""><i class="fa fa-facebook"></i></a>
                            <a href=""><i class="fa fa-twitter"></i></a>
                            <a href=""><i class="fa fa-instagram"></i></a>
                            <a href=""><i class="fa fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

</footer>





</body>

</html>