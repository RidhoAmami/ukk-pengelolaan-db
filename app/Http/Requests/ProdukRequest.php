<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdukRequest extends FormRequest
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
            'nama' => 'required|string|max:255', // Nama produk wajib diisi, harus string dan maksimal 255 karakter
            'harga' => 'required|numeric|min:0', // Harga harus berupa angka dan lebih dari atau sama dengan 0
            'stok' => 'required|integer|min:0', // Stok harus berupa angka dan lebih dari atau sama dengan 0
        ];
    }

    public function messages(): array
    {
        return [
            'nama.required' => 'Nama produk wajib diisi.',
            'nama.string' => 'Nama produk harus berupa teks.',
            'nama.max' => 'Nama produk tidak boleh lebih dari 255 karakter.',

            'harga.required' => 'Harga produk wajib diisi.',
            'harga.numeric' => 'Harga produk harus berupa angka.',
            'harga.min' => 'Harga produk tidak boleh kurang dari 0.',

            'stok.required' => 'Stok produk wajib diisi.',
            'stok.integer' => 'Stok produk harus berupa angka.',
            'stok.min' => 'Stok produk tidak boleh kurang dari 0.',
        ];
    }
}
