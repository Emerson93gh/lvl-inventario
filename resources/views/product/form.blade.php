@extends('theme.base')

@section('content')
    <div class="container mb-5 text-center" style="width: 80%">
        <div class="d-flex justify-content-center">
            {{-- Existe un producto? --}}
            @if (isset($product))
                <h1 class="fw-bold py-2">Actualizar Producto</h1>
            @else
                <h1 class="fw-bold py-2">Crear Producto</h1>
            @endif
        </div>

        <div class="d-flex justify-content-center pb-5">
            @if (isset($product))
                <form action="{{ route('product.update', $product) }}" method="post" class="row g-lg-3 gy-3">
                {{-- Se utiliza la etiqueta PUT manteniendo POST por compatibilidad de navs con HTML5 --}}
                @method('PUT')
            @else
                <form action="{{ route('product.store') }}" method="post" class="row g-lg-3 gy-3">
            @endif
                {{-- Token para mayor seguridad del formulario, csrf --}}
                @csrf

                <div class="row py-2 mb-5 justify-content-center">
                    <div class="col-md-2 my-2">
                        <label for="categoria" class="col-form-label fw-bold">Categoría:</label>
                    </div>
                    <div class="col-md-4 my-2">
                        <input name="categoria" id="categoria" class="form-control" list="datalistOptions" autofocus="autofocus" placeholder="Seleccionar la categoria" value="{{ old('categoria') ?? @$product->categoria }}">
                        <datalist id="datalistOptions">
                            <option value="Alimentos">
                            <option value="Bebidas">
                            <option value="Carnes">
                            <option value="Cuidado Personal">
                            <option value="Vegetales">
                          </datalist>
                        @error('categoria')
                            <p class="form-text text-danger"> {{ $message }} </p>
                        @enderror
                    </div>
                    <div class="col-md-2 my-2">
                        <label for="nombre" class="col-form-label fw-bold">Nombre:</label>
                    </div>
                    <div class="col-md-4 my-2">
                        <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ingresar el nombre" value="{{ old('nombre') ?? @$product->nombre }}">
                        @error('nombre')
                            <p class="form-text text-danger"> {{ $message }} </p>
                        @enderror
                    </div>
                    <div class="col-md-2 my-2">
                        <label for="costo_unitario" class="form-label fw-bold">Costo Unitario:</label>
                    </div>
                    <div class="col-md-4 my-2">
                        <input type="number" name="costo_unitario" id="costo_unitario" class="form-control" placeholder="Ingresar costo" step="0.01" value="{{ old('costo_unitario') ?? @$product->costo_unitario }}">
                        @error('costo_unitario')
                        <p class="form-text text-danger"> {{ $message }} </p>
                        @enderror
                    </div>
                    <div class="col-md-2 my-2">
                        <label for="precio_unitario" class="form-label fw-bold">Precio Unitario:</label>
                    </div>
                    <div class="col-md-4 my-2">
                        <input type="number" name="precio_unitario" id="precio_unitario" class="form-control" placeholder="Ingresar precio" step="0.01" value="{{ old('precio_unitario') ?? @$product->precio_unitario }}">
                        @error('precio_unitario')
                        <p class="form-text text-danger"> {{ $message }} </p>
                        @enderror
                    </div>
                    <div class="col-md-2 my-2">
                        <label for="en_stock" class="form-label fw-bold">En Stock:</label>
                    </div>
                    <div class="col-md-4 my-2">
                        <input type="number" name="en_stock" id="en_stock" class="form-control" placeholder="Ingresar Stock" step="0.01" value="{{ old('en_stock') ?? @$product->en_stock }}">
                        @error('en_stock')
                        <p class="form-text text-danger"> {{ $message }} </p>
                        @enderror
                    </div>
                </div>

                <div class="col-auto mx-auto">
                    @if (isset($product))
                    <button type="submit" class="btn btn-warning fw-bold">Editar</button>
                    @else
                        <button type="submit" class="btn btn-primary fw-bold">Guardar</button>
                    @endif
                </div>
            </form>
        </div>
    </div>
@endsection
