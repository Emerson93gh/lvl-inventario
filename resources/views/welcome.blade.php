@extends('theme.base')

@section('content')
    <div class="container py-5 text-center">
        <h1 class="fw-bold">Prototipo Control de Inventario</h1>
        <a href="{{ route('product.index') }}" class="btn btn-primary">Productos</a>
    </div>
@endsection
