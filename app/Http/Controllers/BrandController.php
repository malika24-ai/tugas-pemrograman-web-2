<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use App\Models\Category;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('brand.index',
        ['title' => 'Brand',
        'brands' => Brand::latest()->paginate(3),
        ]);  
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('brand.create',
        ['title' => 'Create Brand',
        'categorys' => Category::latest()->get(),
        ]);
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
        'name_product' => 'required|max:255',
        'category_id' => 'required|exists:categories,id',
        
    ],
    [
        'name_product.required' => 'Nama produk wajib diisi',
        'category_id.required' => 'Kategori wajib dipilih',
        'category_id.exists' => 'Kategori yang dipilih tidak valid',
    ]);

    Brand::create($validated);
    return redirect()->route('product.index')
        ->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brand $brand)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Brand $brand)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand)
    {
        //
    }
}
