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
    public function index(Request $request)
    {
        $search = $request->search;
    $category = $request->category;

    $brands = Brand::with('category')

        ->when($search, function ($query) use ($search) {
            $query->where('name', 'like', "%{$search}%");
        })

        ->when($category, function ($query) use ($category) {
            $query->where('category_id', $category);
        })
        ->paginate(5)
        ->withQueryString();

    $categories = Category::all();

    return view('brand.index', [
        'title' => 'Data Brand',
        'brands' => $brands,
        'categorys' => $categories,
    ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('brand.create', [
        'title' => 'Create Brand',
        'categorys' => Category::all(),
    ]);
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
        'name' => 'required|max:255',
        'category_id' => 'required|exists:categories,id',
    ],
    [
        'name.required' => 'Nama brand wajib diisi',
        'category_id.required' => 'Kategori wajib dipilih',
    ]);

    Brand::create($validated);

    return redirect()->route('brand.index')
        ->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Brand $brand)
    {
            return view('brand.show', [
            'title' => 'Detail Brand',
            'brand' => $brand,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brand $brand)
    {
        return view('brand.edit', [
            'title' => 'Edit Brand',
            'brand' => $brand,
            'categorys' => Category::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Brand $brand)
    {
        $validated = $request->validate([
        'name' => 'required|max:255',
        'category_id' => 'required|exists:categories,id',
        
    ],
    [
        'name.required' => 'Nama brand wajib diisi',
        'category_id.required' => 'Kategori wajib dipilih',
        'category_id.exists' => 'Kategori yang dipilih tidak valid',
    ]);

    $brand->update($validated);
    return redirect()->route('brand.index')
        ->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand)
    {
        $brand->delete();
        return redirect()->route('brand.index') ->with('success', 'Data berhasil dihapus');
    }
}
