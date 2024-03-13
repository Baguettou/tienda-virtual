@extends('layouts/app')

@section('content')

<h1 class="text-center m-5">Detalle del producto</h1>

<div class="container">
  <div class="row">
      <div class="col-md-6 text-center">
          <img class="img-fluid" style="height: 400px" src="{{asset("img/cat1.webp")}}" alt="">
      </div>
      <div class="col-md-4">
          <h1>Car</h1>
          <p>Brum brum brum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime consequuntur dignissimos quam suscipit quis nulla totam magnam nesciunt laborum aperiam, illo expedita dolor hic dolorum. Eius magni et quas minus?</p>
          <h3>Price: $5.000.000</h3>
          <button type="button" class="btn btn-primary">Añadir al carrito</button>
      </div>
  </div>
</div>
    
@endsection

