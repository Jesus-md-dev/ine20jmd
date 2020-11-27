@extends('masters.master')

@section('content-center')

<div class="container bootdey">
<div class="col-md-12">
<section class="panel m-2">
<div class="panel-body">
    <div class="col-md-6">
        <div class="pro-img-details">
            <img src="{{$product->imgurl}}" alt="" class="imgdescription">
        </div>
    </div>
    <div class="col-md-6 ">
        <h4 class="pro-d-title">
                {{$product->name}}
        </h4>
        <h5>
          Empresa: 
          <a href="#" class=""> {{ $product->Company->name }} </a>
        </h5>
        <p>{{$product->description}}</p>
        <div class="m-bot15"> 
            <strong>Precio: </strong> 
            @if($product->HasDiscount())<?php
                    echo $product->price * (1 - ($product->discountPercent / 100));
                    ?>€ <strike><?= $product->price ?>€ </strike>
                <p><?= $product->discountPercent ?>% de descuento</p>
            @else
                <h6><?= $product->price?>€</h6>
            @endif
        </div>
    </div>
</div>
  </section>
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