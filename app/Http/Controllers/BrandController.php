<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $brands = Brand::paginate(5);

        return view('brand.index', [
            'title' => 'Brand',
            'brands' => $brands,
            'categorys' => Category::all(),
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
            'jenis' => 'required',
            'tahun_berdiri' => 'required',
            'status' => 'required',
        ],
            [
                'name.required' => 'Nama brand wajib diisi',
                'category_id.required' => 'Kategori wajib dipilih',
                'jenis.required' => 'Asal brand wajib diisi',
                'tahun_berdiri.required' => 'Tahun berdiri brand wajib diisi',
                'status.required' => 'Status brand wajib diisi',
            ]);

        Brand::create($validated);
        return to_route('brand.index')->with('success', 'Data berhasil ditambahkan');
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
            'jenis' => 'required',
            'tahun_berdiri' => 'required',
            'status' => 'required',
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
        $brand->delete($brand);

        return redirect()->route('brand.index')->with('success', 'Data berhasil dihapus');
    }
}
