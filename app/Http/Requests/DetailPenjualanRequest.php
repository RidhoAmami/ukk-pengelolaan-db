<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DetailPenjualanRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'penjualan_id' => 'required|exists:penjualans,id', // ID penjualan wajib diisi dan harus ada dalam tabel penjualan
            'produk_id' => 'required|exists:produks,id', // ID produk wajib diisi dan harus ada dalam tabel produk
            'jumlah' => 'required|integer|min:1', // Jumlah wajib diisi, angka, dan minimal 1
        ];
    }

    /**
     * Get the custom validation messages.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'penjualan_id.required' => 'ID penjualan wajib dipilih.',
            'penjualan_id.exists' => 'Penjualan yang dipilih tidak valid, pastikan penjualan terdaftar.',

            'produk_id.required' => 'ID produk wajib dipilih.',
            'produk_id.exists' => 'Produk yang dipilih tidak valid, pastikan produk terdaftar.',

            'jumlah.required' => 'Jumlah produk wajib diisi.',
            'jumlah.integer' => 'Jumlah produk harus berupa angka bulat.',
            'jumlah.min' => 'Jumlah produk tidak boleh kurang dari 1.',
        ];
    }
}
