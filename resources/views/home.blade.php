@extends('adminlte::page')

@section('title', 'KathyCrio')



@section('content_header')
    <h1 class="m-0 text-dark">Servicios</h1>
@stop

@section('content')

<div class="alert alert-success d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
  <div>
  <p class="mb-4">You are logged in!</p>
  </div>
</div>


<div class="d-flex justify-content-center justify-content-around mt-2">
    <div class="card" style="width: 18rem;">
  <img src="../img/crioPlana.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Criolipolisis</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Info</a>
  </div>
</div>


<div class="card" style="width: 18rem;">
  <img src="../img/enfermeria.jpg" class="card-img-top" alt="...">
  <div class="card-body">
  <h5 class="card-title">Enfermeria</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Info</a>
  </div>
</div>


<div class="card" style="width: 18rem;">
  <img src="../img/masajes.webp" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Masajes</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Info</a>
  </div>
</div>
</div>


<div class="d-flex justify-content-center justify-content-around">
<div class="card" style="width: 18rem;">
  <img src="../img/planAlimenticio.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Plan Alimenticion</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Info</a>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <img src="../img/peso.webp" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Info</a>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <img src="../img/asesoria2.webp" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Info</a>
  </div>
</div>
</div>

<style>
  .container-boton{
    background-color: #2e6329;
    border:  1px solid #fff;
    position: fixed;
    z-index: 999;
    border-radius: 50%;
    bottom: 20px;
    right: 25px;
    padding: 20px;
    transition: ease 0.3s;
    animation: efecto 1.2s infinite;
}

.container-boton :hover{
    transform: scale(1.1);
    transition: 0.3s;
}

.boton{
    width: 40px;
    transition: ease 1s;
}

@keyframes efecto{
    0%{
box-shadow: 0 0 0 0 rgba(0, 0, 0, 0.85);
    }
    100%{
        box-shadow: 0 0 0 25px rgba(0, 0, 0, 0);
    }
}
</style>

<div class="container-boton">
<a href="https://wa.me/5491127104218?text=Hola quisiera información" target="_blank">
<img class="boton" src="../img/whatsapp.avif" alt="...">
</a>
</div>




@stop

