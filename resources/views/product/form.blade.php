@extends('theme.base')

@section('content')
    <div class="container text-center" style="width: 70%">
        {{-- Existe un producto? --}}
        @if (isset($product))
            <h1 class="fw-bold py-2">Actualizar Producto</h1>
        @else
            <h1 class="fw-bold py-2">Crear Producto</h1>
        @endif

        <div class="d-flex flex-wrap justify-content-center">
            @if (isset($product))
            <form action="{{ route('product.update', $product) }}" method="post">
                {{-- Se utiliza la etiqueta PUT manteniendo POST por compatibilidad de navs con HTML5 --}}
                @method('PUT')
            @else
                <form action="{{ route('product.store') }}" method="post" class="row g-lg-3 gy-3">
            @endif
                {{-- Token para mayor eguridad del formulario, csrf --}}
                @csrf

                <div class="form-group row py-2">
                    <div class="form-group col col-md-2 mb-3">
                        <label for="categoria" class="form-label fw-bold">Categoría:</label>
                    </div>
                    <div class="form-group col col-md-4 mb-3">
                        <input type="text" name="categoria" id="categoria" class="form-control" placeholder="Ingresar la categoria" value="{{ old('categoria') ?? @$product->categoria }}">
                        @error('categoria')
                            <p class="form-text text-danger"> {{ $message }} </p>
                        @enderror
                    </div>
                    <div class="form-group col col-md-2 mb-3">
                        <label for="nombre" class="form-label fw-bold">Nombre:</label>
                    </div>
                    <div class="form-group col col-md-4 mb-3">
                        <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ingresar el nombre" value="{{ old('nombre') ?? @$product->nombre }}">
                        @error('nombre')
                            <p class="form-text text-danger"> {{ $message }} </p>
                        @enderror
                    </div>
                </div>

                <div class="row py-2">
                    <div class="col col-md-2 mb-3">
                        <label for="costo_unitario" class="form-label fw-bold">Costo Unitario:</label>
                    </div>
                    <div class="col col-md-4 mb-3">
                        <input type="number" name="costo_unitario" id="costo_unitario" class="form-control" placeholder="Ingresar costo" step="0.01" value="{{ old('costo_unitario') ?? @$product->costo_unitario }}">
                        @error('costo_unitario')
                        <p class="form-text text-danger"> {{ $message }} </p>
                        @enderror
                    </div>

                    <div class="col col-md-2 mb-3">
                        <label for="precio_unitario" class="form-label fw-bold">Precio Unitario:</label>
                    </div>
                    <div class="col col-md-4 mb-3">
                        <input type="number" name="precio_unitario" id="precio_unitario" class="form-control" placeholder="Ingresar precio" step="0.01" value="{{ old('precio_unitario') ?? @$product->precio_unitario }}">
                        @error('precio_unitario')
                        <p class="form-text text-danger"> {{ $message }} </p>
                        @enderror
                    </div>
                </div>

                <div class="row py-2 justify-content-center">
                    <div class="col col-md-2 mb-3">
                        <label for="en_stock" class="form-label fw-bold">En Stock:</label>
                    </div>
                    <div class="col col-md-4 mb-3">
                        <input type="number" name="en_stock" id="en_stock" class="form-control" placeholder="Ingresar Stock" step="0.01" value="{{ old('en_stock') ?? @$product->en_stock }}">
                        @error('en_stock')
                        <p class="form-text text-danger"> {{ $message }} </p>
                        @enderror
                    </div>
                </div>


                @if (isset($product))
                    <button type="submit" class="btn btn-warning fw-bold">Editar</button>
                @else
                    <button type="submit" class="btn btn-primary fw-bold">Guardar</button>
                @endif

            </form>
        </div>
    </div>
@endsection
