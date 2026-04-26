<?php

namespace App\Http\Controllers;

use App\Models\Massages;
use Illuminate\Http\Request;

class MassagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        return view('massages.index', [
            'title' => 'Massages',
            'massages' => Massages::latest()->get()
            ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('massages.create', ['title' => 'Create massages']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{$validated = $request->validate([
    'name' => 'required|max:25',
    'pengirim' => 'required|max:50',
    'penerima' => 'required|max:50',
    'judul_pesan' => 'required|max:100',
    'isi_pesan' => 'required|max:100',
]);

    Massages::create($validated);

    return to_route('massages.index')->withSuccess('Pesan berhasil dibuat!');
}

    /**
     * Display the specified resource.
     */
    public function show(massages $massages)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(massages $massages)
    {
            return view('massages.edit', [
            'title' => 'edit Massages',
            'massages' => $massages
            ]);
    }

    /**
     * Update the specified resource in storage.
     */
public function update(Request $request, massages $massages)

    {$validated = $request->validate([
    'name' => 'required|max:25',
    'pengirim' => 'required|max:50',
    'penerima' => 'required|max:50',
    'judul_pesan' => 'required|max:100',
    'isi_pesan' => 'required|max:100',
]);

    $massages->update($validated);

    return to_route('massages.index')->withSuccess('Pesan berhasil dibuat!');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(massages $massages)
    { 
    $massages->delete();
    return to_route('massages.index')->withSuccess('Pesan berhasil dihapus!');
    }
}
