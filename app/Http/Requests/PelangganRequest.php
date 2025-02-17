<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PelangganRequest extends FormRequest
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
            'nama'    => 'required|string|max:255',
            'alamat'  => 'required|string|max:500',
            'telepon' => 'required|string|min:10|max:15|regex:/^[0-9]+$/'
        ];
    }

    public function messages(): array
    {
        return [
            'nama.required'    => 'Nama pelanggan wajib diisi.',
            'nama.string'      => 'Nama pelanggan harus berupa teks.',
            'nama.max'         => 'Nama pelanggan maksimal 255 karakter.',

            'alamat.required'  => 'Alamat pelanggan wajib diisi.',
            'alamat.string'    => 'Alamat pelanggan harus berupa teks.',
            'alamat.max'       => 'Alamat pelanggan maksimal 500 karakter.',

            'telepon.required' => 'Nomor telepon wajib diisi.',
            'telepon.string'   => 'Nomor telepon harus berupa teks.',
            'telepon.min'      => 'Nomor telepon minimal 10 digit.',
            'telepon.max'      => 'Nomor telepon maksimal 15 digit.',
            'telepon.regex'    => 'Nomor telepon hanya boleh berisi angka.',
        ];
    }
}
