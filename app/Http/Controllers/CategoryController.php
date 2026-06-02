<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('category.index',
        ['title' => 'Category',
        'categories' => Category::latest()->get(),
        ]);  
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('category.create',
        ['title' => 'Create Category']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
        'name' => 'required|max:255',
        
    ],
    [
        'name.required' => 'Nama kategori wajib diisi',

    ]);

    Category::create($validated);
    return redirect()->route('category.index')
        ->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('category.edit', [
        'title' => 'Edit Category',
        'category' => $category,
    ]);
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $validated = $request->validate([
        'name' => 'required|max:255',
        
    ],
    [
        'name.required' => 'Nama kategori wajib diisi',
        
    ]);

        $category->update($validated);
        return redirect()->route('category.index')
        ->with('success', 'Data berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('category.index') ->with('success', 'Data berhasil dihapus');
    }
}
