<?php

namespace App\Http\Controllers;

use App\Http\Requests\PenjualanRequest;
use App\Models\Pelanggan;
use App\Models\Penjualan;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mengambil semua penjualan dan mengirimkannya ke view
        $penjualan = Penjualan::all();
        return view('penjualan.index', compact('penjualan'));
    }

    /**
     * Show the form for creating a new sale.
     */
    public function create()
    {
        // Menampilkan form untuk membuat penjualan baru
        $pelanggan = Pelanggan::all(); // Ambil semua data pelanggan
        return view('penjualan.create', compact('pelanggan'));
    }

    /**
     * Store a newly created sale in storage.
     */
    public function store(PenjualanRequest $request)
    {
        // Validasi data yang dikirim oleh request dan simpan penjualan baru
        $request->validated();

        // Menambahkan penjualan baru
        $penjualan = Penjualan::create([
            'tanggal' => $request->tanggal,
            'total_harga' => $request->total_harga,
            'pelanggan_id' => $request->pelanggan_id,
        ]);

        // Redirect ke halaman daftar penjualan
        return redirect()->route('penjualan.index');
    }

    /**
     * Display the specified sale.
     */
    public function show(Penjualan $penjualan)
    {
        // Menampilkan detail penjualan
        return view('penjualan.show', compact('penjualan'));
    }

    /**
     * Show the form for editing the specified sale.
     */
    public function edit(Penjualan $penjualan)
    {
        // Menampilkan form untuk mengedit penjualan
        $pelanggan = Pelanggan::all(); // Ambil semua data pelanggan
        return view('penjualan.edit', compact('penjualan', 'pelanggan'));
    }

    /**
     * Update the specified sale in storage.
     */
    public function update(PenjualanRequest $request, Penjualan $penjualan)
    {
        // Validasi data dan update penjualan
        $request->validated();
        $penjualan->update([
            'tanggal' => $request->tanggal,
            'total_harga' => $request->total_harga,
            'pelanggan_id' => $request->pelanggan_id,
        ]);

        // Redirect ke halaman daftar penjualan
        return redirect()->route('penjualan.index');
    }

    /**
     * Remove the specified sale from storage.
     */
    public function destroy(Penjualan $penjualan)
    {
        // Menghapus penjualan dari database
        $penjualan->delete();

        // Redirect ke halaman daftar penjualan
        return redirect()->route('penjualan.index');
    }
}
