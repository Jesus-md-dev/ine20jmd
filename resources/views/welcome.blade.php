@extends('masters.master')

@section('content-center')
<!--1º Fila-->
<div class="row d-flex flex-column">

  <!--Titulo-->
  <div class="row">
    <h4 class="ml-5 mt-4 mb-4">Ofertas del dia</h4>
  </div>

  <!--Productos-->
  <div class="row d-flex justify-content-around">

    <div class="col-md-2">
      <div class="row">
        <div class="bd-placeholder-img">
          <a href=""><img src="/img/gamecube.png" alt="" class="img-fluid imgcustom"></a>
        </div>
      </div>
      <div class="row">
        <h5>270,00€</h5>
      </div>
      <div class="row">
        <strike>300,00€</strike> - 10% de descuento
      </div>
    </div>

    <div class="col-md-2">
      <div class="row">
        <div class="bd-placeholder-img">
          <a href=""><img src="/img/mariokart live.jpg" alt="" class="img-fluid imgcustom"></a>
        </div>
      </div>
      <div class="row">
        <h5>450,00€</h5>
      </div>
      <div class="row">
        <strike>500,00€</strike> - 10% de descuento
      </div>
    </div>

    <div class="col-md-2">
      <div class="row">
        <div class="bd-placeholder-img">
          <a href=""><img src="/img/wow.png" alt="" class="img-fluid imgcustom"></a>
        </div>
      </div>
      <div class="row">
        <h5>10,00€</h5>
      </div>
      <div class="row">
        <strike>20,00€</strike> - 10% de descuento
      </div>
    </div>

    <div class="col-md-2">
      <div class="row">
        <div class="bd-placeholder-img">
          <a href=""><img src="/img/mandopro.png" alt="" class="img-fluid imgcustom"></a>
        </div>
      </div>
      <div class="row">
        <h5>6,30€</h5>
      </div>
      <div class="row">
        <strike>7,00€</strike> - 10% de descuento
      </div>
    </div>
  </div>
</div>

<!--2º Fila-->
<div class="row d-flex flex-column ">

  <!--Titulo-->
  <div class="row">
    <h4 class="ml-5 mt-4 mb-4">Nuevos Productos</h4>
  </div>

  <!--Productos-->
  <div class="row d-flex justify-content-around">

    <div class="col-md-3">
      <div class="row">
        <div class="bd-placeholder-img">
          <a href=""><img src="/img/odyssey.jpg" alt="" class="img-fluid imgcustom"></a>
        </div>
      </div>
      <div class="row">
        <h5>40,00€</h5>
      </div>
    </div>

    <div class="col-md-3">
      <div class="row">
        <div class="bd-placeholder-img">
          <a href=""><img src="/img/ringfit.jpg" alt="" class="img-fluid imgcustom"></a>
        </div>
      </div>
      <div class="row">
        <h5>100,00€</h5>
      </div>
    </div>

    <div class="col-md-3">
      <div class="row">
        <div class="bd-placeholder-img">
          <a href=""><img src="/img/sdswitch.jpg" alt="" class="img-fluid imgcustom w-auto"></a>
        </div>
      </div>
      <div class="row">
        <h5>10,30€</h5>
      </div>
    </div>

  </div>
</div>
@endsection

@section('content-right')
<h6 class="mt-2">Lo más vendido</h6>

<div class="d-flex flex-row">

  <div class="d-flex flex-column">
    <h1 class="font-weight-light">1</h1>
  </div>

  <div class="d-flex flex-column m-2">
    <a href=""><img src="/img/minecraft.jpg" alt="" class="img-fluid lateralimg"></a>
  </div>

</div>

<div class="d-flex flex-row">

  <div class="d-flex flex-column">
    <h1 class="font-weight-light">2</h1>
  </div>

  <div class="d-flex flex-column m-2">
    <a href=""><img src="/img/microusb.jpg" alt="" class="img-fluid lateralimg"></a>
  </div>

</div>

<div class="d-flex flex-row">

  <div class="d-flex flex-column">
    <h1 class="font-weight-light">3</h1>
  </div>

  <div class="d-flex flex-column m-2">
    <a href=""><img src="/img/smash.jpg" alt="" class="img-fluid lateralimg"></a>
  </div>

</div>

<div class="d-flex flex-row">

  <div class="d-flex flex-column">
    <h1 class="font-weight-light">4</h1>
  </div>

  <div class="d-flex flex-column m-2">
    <a href=""><img src="/img/infamous.jpg" alt="" class="img-fluid lateralimg"></a>
  </div>

</div>

<div class="d-flex flex-row">

  <div class="d-flex flex-column">
    <h1 class="font-weight-light">5</h1>
  </div>

  <div class="d-flex flex-column m-2">
    <a href=""><img src="/img/uncharted.jpg" alt="" class="img-fluid lateralimg"></a>
  </div>

</div>
<button class="btn btn-dark m-2">Ver más</button>
@endsection