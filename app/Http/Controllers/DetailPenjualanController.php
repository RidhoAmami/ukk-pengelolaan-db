<?php

namespace App\Http\Controllers;

use App\Http\Requests\DetailPenjualanRequest;
use App\Models\DetailPenjualan;
use App\Models\Penjualan;
use App\Models\Produk;
use Illuminate\Http\Request;

class DetailPenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mengambil semua detail penjualan dan mengirimkannya ke view
        $detailPenjualan = DetailPenjualan::all();
        return view('detail.index', compact('detailPenjualan'));
    }

    /**
     * Show the form for creating a new detail penjualan.
     */
    public function create()
    {
        // Menampilkan form untuk membuat detail penjualan baru
        $penjualan = Penjualan::all(); // Ambil semua data penjualan
        $produk = Produk::all(); // Ambil semua produk yang tersedia
        return view('detail.create', compact('penjualan', 'produk'));
    }

    /**
     * Store a newly created detail penjualan in storage.
     */
    public function store(DetailPenjualanRequest $request)
    {
        // Validasi data yang dikirim oleh request dan simpan detail penjualan baru
        $request->validated();

        // Menambahkan detail penjualan baru
        DetailPenjualan::create([
            'penjualan_id' => $request->penjualan_id,
            'produk_id' => $request->produk_id,
            'jumlah' => $request->jumlah,
        ]);

        // Redirect ke halaman daftar detail penjualan
        return redirect()->route('detail.index');
    }

    /**
     * Display the specified detail penjualan.
     */
    public function show(DetailPenjualan $detailPenjualan)
    {
        // Menampilkan detail detail penjualan berdasarkan ID
        return view('detail.show', compact('detailPenjualan'));
    }

    /**
     * Show the form for editing the specified detail penjualan.
     */
    public function edit(DetailPenjualan $detailPenjualan)
    {
        // Menampilkan form untuk mengedit detail penjualan berdasarkan ID
        $penjualan = Penjualan::all(); // Ambil semua data penjualan
        $produk = Produk::all(); // Ambil semua produk yang tersedia
        return view('detail.edit', compact('detailPenjualan', 'penjualan', 'produk'));
    }

    /**
     * Update the specified detail penjualan in storage.
     */
    public function update(DetailPenjualanRequest $request, DetailPenjualan $detailPenjualan)
    {
        // Validasi data dan update detail penjualan
        $request->validated();
        $detailPenjualan->update([
            'penjualan_id' => $request->penjualan_id,
            'produk_id' => $request->produk_id,
            'jumlah' => $request->jumlah,
        ]);

        // Redirect ke halaman daftar detail penjualan
        return redirect()->route('detail.index');
    }

    /**
     * Remove the specified detail penjualan from storage.
     */
    public function destroy(DetailPenjualan $detailPenjualan)
    {
        // Menghapus detail penjualan berdasarkan ID
        $detailPenjualan->delete();

        // Redirect ke halaman daftar detail penjualan
        return redirect()->route('detail.index');
    }
}
