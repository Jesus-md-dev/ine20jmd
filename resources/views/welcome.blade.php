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
    @foreach($aProduct_offering as $pOffering)
    <div class="col">
      <div class="row">
        <div class="bd-placeholder-img">
          <a href="/product/{{$pOffering->id}}"><img src="{{ $pOffering->imgurl }}" alt="" class="imgcustom"></a>
        </div>
      </div>
      <div class="row">
        <h5>{{ $pOffering->name }}</h5>
      </div>
      <div class="row">
        <h6>{{ $pOffering->price * (1 - ($pOffering->discountPercent / 100))}}
          € <strike>{{ $pOffering->price }}€ </strike>
        </h6>
      </div>
      <div class="row">
        <p>{{ $pOffering->discountPercent }}% de descuento</p>
      </div>
    </div>
    @endforeach
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
    @foreach($aProduct_new as $pNew)
    <div class="col">
      <div class="row">
        <div class="bd-placeholder-img">
          <h1><{{ $pNew->imgurl }}</h1>
          <a href="/product/{{$pNew->id}}"><img src="{{ $pNew->imgurl }}" alt="" class="img-fluid imgcustom"></a>
        </div>
      </div>
      <div class="row">
        <h5>{{ $pNew->name }}</h5>
      </div>
      @if($pNew->HasDiscount())
      <div class="row">
        <h6>
            {{ $pNew->price * (1 - ($pNew->discountPercent / 100))}}
            € <strike>{{ $pNew->price }}€ </strike>
        </h6>
      </div>
      <div class="row">
        <p>{{ $pNew->discountPercent }}% de descuento</p>
      </div>
      @else
      <div class="row">
        <h6>{{ $pNew->price }}€</h6>
      </div>
      @endif
    </div>
    @endforeach
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