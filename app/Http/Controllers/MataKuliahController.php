<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MataKuliah;

class MataKuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mataKuliahs = MataKuliah::all();
        return view('matakuliah.index', compact('mataKuliahs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('matakuliah.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required',
            'kode' => 'required',
            'sks' => 'required',
        ]);

        MataKuliah::create($data);

        return redirect()->route('matakuliah.index')->with('success', 'Mata Kuliah created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $mataKuliah = MataKuliah::find($id);
        return view('matakuliah.show', compact('mataKuliah'));
    }

    /**
     * Show the form for editing the specified resource.
     */
public function edit(string $id)
{
    $mataKuliah = MataKuliah::find($id);

    if ($mataKuliah) {
        return view('matakuliah.edit', compact('mataKuliah'));
    } else {
        // Handle the case when the Mata Kuliah is not found
        return redirect()->route('matakuliah.index')->with('error', 'Mata Kuliah not found.');
    }
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'nama' => 'required',
            'kode' => 'required',
            'sks' => 'required',
        ]);

        $mataKuliah = MataKuliah::find($id);
        $mataKuliah->update($data);

        return redirect()->route('matakuliah.index')->with('success', 'Mata Kuliah updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mataKuliah = MataKuliah::find($id);
        $mataKuliah->delete();

        return redirect()->route('matakuliah.index')->with('success', 'Mata Kuliah deleted successfully.');
    }
}