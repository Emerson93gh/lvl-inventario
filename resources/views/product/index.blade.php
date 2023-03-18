@extends('theme.base')

@section('content')
    <div class="container">
        <div class="row text-center">
            <div class="col col-md-10 py-2 text-center">
                <h1>Listado de Productos</h1>
            </div>
            <div class="col col-md-2 py-2 text-end">
                <a href="{{ route('product.create') }}" class="btn btn-primary">Crear Producto</a>
            </div>
            @if (Session::has('mensaje'))
                    <div class="alert alert-info my-5">
                        {{ Session::get('mensaje') }}

                    </div>
                @endif
        </div>
    </div>

    <div class="container py-2 text-center">
        <div class="table-responsive py-3">
            <table class="table table-info">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Categoría</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Costo Unitario</th>
                        <th scope="col">Precio Unitario</th>
                        <th scope="col">En Stock</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($products as $product)
                        <tr class="">
                            <td scope="row"> {{ $product->id }} </td>
                            <td>{{ $product->categoria }}</td>
                            <td>{{ $product->nombre }}</td>
                            <td>{{ $product->costo_unitario }}</td>
                            <td>{{ $product->precio_unitario }}</td>
                            <td>{{ $product->en_stock }}</td>
                            <td>
                                <a href="{{ route('product.edit', $product) }}" class="btn btn-warning">Editar</a>
                                <form action="{{ route('product.destroy', $product) }}" method="post" class="d-inline">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('¿Esta seguro/a de eliminar el producto?')">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                        {{-- <tr class="">
                            <td scope="row">Item</td>
                            <td>Item</td>
                            <td>Item</td>
                            <td>Item</td>
                            <td>Item</td>
                            <td>Item</td>
                            <td>Item</td>
                        </tr> --}}
                    @empty
                        <tr class="">
                            <td scope="row" colspan="7">NO HAY REGISTROS!</td>
                        </tr>
                    @endforelse

                    {{-- <tr class="">
                        <td scope="row">Item</td>
                        <td>Item</td>
                        <td>Item</td>
                    </tr> --}}
                </tbody>
            </table>
            {{-- PAGINACION --}}
            @if ($products->count())
                <div class="pagination justify-content-center">
                    {{ $products->links() }}
                </div>
            @endif
        </div>
    </div>
@endsection
