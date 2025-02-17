<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProdukRequest;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mengambil semua produk dan mengirimkannya ke view
        $produk = Produk::all();
        return view('produk.index', compact('produk'));
    }

    /**
     * Show the form for creating a new product.
     */
    public function create()
    {
        // Menampilkan form untuk membuat produk baru
        return view('produk.create');
    }

    /**
     * Store a newly created product in storage.
     */
    public function store(ProdukRequest $request)
    {
        // Validasi data yang dikirim oleh request dan simpan produk baru
        $request->validated();
        Produk::create($request->all());

        // Redirect ke halaman daftar produk
        return redirect()->route('produk.index');
    }

    /**
     * Display the specified product.
     */
    public function show(Produk $produk)
    {
        // Menampilkan detail produk
        return view('produk.show', compact('produk'));
    }

    /**
     * Show the form for editing the specified product.
     */
    public function edit(Produk $produk)
    {
        // Menampilkan form untuk mengedit produk
        return view('produk.edit', compact('produk'));
    }

    /**
     * Update the specified product in storage.
     */
    public function update(ProdukRequest $request, Produk $produk)
    {
        // Validasi data dan update produk
        $request->validated();
        $produk->update($request->all());

        // Redirect ke halaman daftar produk
        return redirect()->route('produk.index');
    }

    /**
     * Remove the specified product from storage.
     */
    public function destroy(Produk $produk)
    {
        // Menghapus produk dari database
        $produk->delete();

        // Redirect ke halaman daftar produk
        return redirect()->route('produk.index');
    }
}
