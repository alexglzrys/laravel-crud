<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('id', 'DESC')->paginate();
        return view('products.index', compact('products'));
    }

    public function show($id)
    {
        $product = Product::find($id);
        return view('products.show', compact('product'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(ProductRequest $request)
    {
        $product = new Product();
        $product->name  = $request->input('name');
        $product->short = $request->input('short');
        $product->body  = $request->input('body');
        $product->save();

        return redirect()->route('products.index')->with('info', 'Producto registrado satisfactoriamente');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.edit', compact('product'));
    }

    public function update(ProductRequest $request, $id)
    {
        $product = Product::find($id);
        $product->name = $request->input('name');
        $product->short = $request->input('short');
        $product->body = $request->input('body');
        $product->save();

        return redirect()->route('products.index')->with('info', 'Los cambios en el producto se han actualizado satisfactoriamente');
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return back()->with('info', 'Producto eliminado satisfactoriamente del sistema');
    }
}
