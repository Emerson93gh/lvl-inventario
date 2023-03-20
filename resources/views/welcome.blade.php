@extends('theme.base')

@section('content')
    <div class="container mb-5 mx-auto text-center">
        <h1 class="fw-bold py-2">Prototipo Control de Inventario</h1>
        <div class="card py-2 mx-auto" style="width: 20rem;">
            <img src="{{ asset('assets/img/istock-612x612.jpg') }}" class="card-img-top mx-auto" alt="products" style="width: 150px">
            <div class="card-body">
              <h5 class="card-title">Productos</h5>
              <p class="card-text">Gestiona los productos en el inventario de Tienda ESV.</p>
              <a href="{{ route('product.index') }}" class="btn btn-primary">Productos</a>
            </div>
          </div>
    </div>
@endsection
