<?php

namespace App\Http\Controllers;

use App\Http\Requests\PelangganRequest;
use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = Pelanggan::all();
        return view('customers.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('customers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PelangganRequest $request)
    {
        // Menggunakan data yang sudah divalidasi
        Pelanggan::create($request->validated());  // hanya menggunakan data yang valid
        return redirect()->route('customers.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pelanggan $pelanggan)
    {
        // Model binding otomatis
        return view('customers.show', compact('pelanggan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pelanggan $pelanggan)
    {
        // Model binding otomatis
        return view('customers.edit', compact('pelanggan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PelangganRequest $request, Pelanggan $pelanggan)
    {
        // Menggunakan data yang sudah divalidasi
        $pelanggan->update($request->validated());  // hanya menggunakan data yang valid
        return redirect()->route('customers.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pelanggan $pelanggan)
    {
        // Menghapus data pelanggan berdasarkan model binding
        $pelanggan->delete();
        return redirect()->route('customers.index');
    }
}
