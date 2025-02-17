@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="bg-white p-6 shadow-lg rounded-lg">
        <h1 class="text-3xl font-bold text-gray-800 mb-6">Selamat datang di Dashboard!</h1>
        <p class="text-lg text-gray-600">Ini adalah halaman utama setelah Anda login. Anda dapat melihat dan mengelola berbagai data di sini.</p>

        <!-- Contoh Tabel Penjualan -->
        <div class="mt-8">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Penjualan Terbaru</h2>
            <table class="min-w-full bg-white border border-gray-300 rounded-lg shadow-md">
                <thead>
                    <tr>
                        <th class="py-3 px-6 text-left text-sm font-medium text-gray-700">No</th>
                        <th class="py-3 px-6 text-left text-sm font-medium text-gray-700">Produk</th>
                        <th class="py-3 px-6 text-left text-sm font-medium text-gray-700">Jumlah</th>
                        <th class="py-3 px-6 text-left text-sm font-medium text-gray-700">Total Harga</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="py-3 px-6 text-sm text-gray-700">1</td>
                        <td class="py-3 px-6 text-sm text-gray-700">Produk A</td>
                        <td class="py-3 px-6 text-sm text-gray-700">5</td>
                        <td class="py-3 px-6 text-sm text-gray-700">Rp 500.000</td>
                    </tr>
                    <tr>
                        <td class="py-3 px-6 text-sm text-gray-700">2</td>
                        <td class="py-3 px-6 text-sm text-gray-700">Produk B</td>
                        <td class="py-3 px-6 text-sm text-gray-700">2</td>
                        <td class="py-3 px-6 text-sm text-gray-700">Rp 200.000</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
