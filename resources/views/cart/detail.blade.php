@extends('masters.master')

@section('content-center')
<!--1º Fila-->
<div class="col ">
  @if($cart)
  <div class="col-md-8 ">
    <!--Titulo-->
    <div class="row">
      <h4 class="ml-5 mt-4 mb-4">Carrito de la Compra</h4>
    </div>
    <!--Productos-->
    <div class="col ">
      @foreach($cart->aItem as $product)
      <div class="row m-5">
        <div class="col">
          <div class="row">
            <div class="bd-placeholder-img">
              <a href="/product/{{$product['id']}}">
                <img src="{{ $product['imgurl'] }}" alt="" class="imgcustom">
              </a>
            </div>
          </div>
          <div class="row">
            <h5>{{ $product['name'] }}</h5>
          </div>
          <div class="row">
            <h6>{{ round($product['price'], 2) }} €
            </h6>
          </div>
          <div class="row">
          </div>
        </div>
        <div class="col text-center">
          <div>
            <a href="{{ route('cart.operation', [ 'operation' => 'add', 'product' => $product['id']]) }}" class="btn btn-primary"> + </a>
            <span class="ml-4 mr-4">{{$product['quantity']}}</span>
            <a href="{{ route('cart.operation', [ 'operation' => 'remove', 'product' => $product['id']]) }}" class="btn btn-primary"> - </a>
          </div>
          <div>
            <a href="{{ route('cart.operation', [ 'operation' => 'removeAll', 'product' => $product['id']]) }}" class="btn btn-warning mt-2">
              Eliminar del Carro
            </a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    <div class=" card mt-4 mb-4">
      <div class="card-body">
        <h5>Número de Productos: {{$cart->iTotalItems}}</h5>
        <h5>Precio Total: {{round($cart->dTotalPrice, 2)}} €</h5>
        <a class="btn btn-primary">Comprar</a>
      </div>
    </div>

  </div>
  @else
  <h3>Carrito Vacío</h3>
  @endif
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