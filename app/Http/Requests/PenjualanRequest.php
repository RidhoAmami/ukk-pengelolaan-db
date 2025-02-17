<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PenjualanRequest extends FormRequest
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
            'tanggal' => 'required|date', // Tanggal harus diisi dan formatnya valid
            'total_harga' => 'required|numeric|min:0', // Total harga wajib diisi, angka, dan minimal 0
            'pelanggan_id' => 'required|exists:pelanggans,id', // ID pelanggan wajib diisi dan harus ada dalam tabel pelanggan
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
            'tanggal.required' => 'Tanggal penjualan wajib diisi.',
            'tanggal.date' => 'Tanggal penjualan harus memiliki format yang valid.',

            'total_harga.required' => 'Total harga wajib diisi.',
            'total_harga.numeric' => 'Total harga harus berupa angka.',
            'total_harga.min' => 'Total harga tidak boleh kurang dari 0.',

            'pelanggan_id.required' => 'Pelanggan wajib dipilih.',
            'pelanggan_id.exists' => 'Pelanggan yang dipilih tidak valid, pastikan pelanggan terdaftar.',
        ];
    }
}
