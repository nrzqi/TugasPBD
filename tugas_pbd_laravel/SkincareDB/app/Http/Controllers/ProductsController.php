<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Products::all();

        return view('index', compact('products'));
    }

    public function create()
    {
        return view('add');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'price' => 'required',
            'brand' => 'required',
            'category' => 'required',
            'stock' => 'required',
        ]);

        $data = $request->all();
        Products::create($data);
        echo "Product added!" . PHP_EOL;

        return redirect()->route('products.index');
    }

    public function edit($id)
    {
        $products = Products::find($id);

        return view('edit', compact('products'));
    }

    public function update(Request $request, $id)
    {
        $products = Products::find($id);
        $products->update([
            'name' => $request->name,
            'price' => $request->price,
            'brand' => $request->brand,
            'category' => $request->category,
            'stock' => $request->stock,
        ]);

        return redirect()->route('products.index');

    }

    public function destroy($id)
    {
        $products = Products::find($id);
        $products->delete();

        return redirect()->route('products.index');
    }
}
