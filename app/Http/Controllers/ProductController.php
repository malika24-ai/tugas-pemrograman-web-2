<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('product.index',
        ['title' => 'Product',
        'products' => Product::latest()->get(),
        ]);  
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.create',
        ['title' => 'Create Product']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $validated = $request->validate([
        'name_product' => 'required|max:255',
        'name_pembeli' => 'required|max:255',
        'jumlah' => 'required|integer',
    ],
    [
        'name_product.required' => 'Nama produk wajib diisi',
        'name_pembeli.required' => 'Nama pembeli wajib diisi',
        'jumlah.required' => 'Jumlah wajib diisi',
        'jumlah.integer' => 'Jumlah harus berupa angka',
    ]);

    Product::create($validated);
    return redirect()->route('product.index')
        ->with('success', 'Data berhasil ditambahkan');

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
        return view('product.edit', [
        'title' => 'Edit Product',
        'product' => $product,
    ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
        'name_product' => 'required|max:255',
        'jumlah' => 'required|integer',
    ],
    [
        'name_product.required' => 'Nama produk wajib diisi',
        'name_pembeli.required' => 'Nama pembeli wajib diisi',
        'jumlah.required' => 'Jumlah wajib diisi',
        'jumlah.integer' => 'Jumlah harus berupa angka',
        
    ]);

    $product->update($validated);
    return redirect()->route('product.index')
        ->with('success', 'Data berhasil di ubah');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete($product);
        return redirect()->route('product.index') ->with('success', 'Data berhasil dihapus');
    }

}