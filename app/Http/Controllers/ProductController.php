<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session; // importamos manualmente

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //return view('product.index');
        $products = Product::paginate(4); // contando desde 0 a 4 = 5
        return view('product.index')
            ->with('products',$products);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validacion del formulario / reglas / gte = mayor o igual a: 0
        $request->validate([
            'categoria' => 'required|max:15',
            'nombre' => 'required|max:15',
            'costo_unitario' => 'required|gte:0',
            'precio_unitario' => 'required|gte:0',
            'en_stock' => 'required|gte:0'
        ]);

        // creando el registro, uniamente con los parametros que deseamos que se inserten en la bd
        // con asignacion masiva - fix: usar CREATE
        $product = Product::create($request->only('categoria','nombre','costo_unitario','precio_unitario','en_stock'));

        // Sesion para enviar un mensaje a la redireccion
        Session::flash('mensaje', 'Registro creado con exito');

        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('product.form')
            ->with('product', $product);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        // validacion del formulario / reglas / gte = mayor o igual a: 0
        $request->validate([
            'categoria' => 'required|max:15',
            'nombre' => 'required|max:15',
            'costo_unitario' => 'required|gte:0',
            'precio_unitario' => 'required|gte:0',
            'en_stock' => 'required|gte:0'
        ]);

        $product->categoria = $request['categoria'];
        $product->nombre = $request['nombre'];
        $product->costo_unitario = $request['costo_unitario'];
        $product->precio_unitario = $request['precio_unitario'];
        $product->en_stock = $request['en_stock'];
        $product->save();

        // Sesion para enviar un mensaje a la redireccion
        Session::flash('mensaje', 'Registro editado con exito');

        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();

        // Sesion para enviar un mensaje a la redireccion
        Session::flash('mensaje', 'Registro eliminado con exito');

        return redirect()->route('product.index');
    }
}
