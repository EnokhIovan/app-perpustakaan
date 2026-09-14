<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreMemberRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nama' => 'required|string|max:100',
            'nim' => 'required|string',
            'email' => 'required|email',
            'nomor_telepon' => 'required|string',
            'alamat' => 'required|string|max:128',
            'status' => 'required|string',
        ];
    }

    public function messages(): array
    {
        return [
            'nama.required' => 'Nama wajib diisi.',
            'nama.string' => 'Nama harus berupa teks.',
            'nama.max' => 'Nama maksimal 100 karakter.',
            'nim.required' => 'NIM wajib diisi.',
            'nim.string' => 'NIM harus berupa teks.',
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'nomor_telepon.required' => 'Nomor telepon wajib diisi.',
            'nomor_telepon.string' => 'Nomor telepon harus berupa teks.',
            'alamat.required' => 'Alamat wajib diisi.',
            'alamat.string' => 'Alamat harus berupa teks.',
            'alamat.max' => 'Alamat maksimal 128 karakter.',
            'status.required' => 'Status wajib diisi.',
            'status.string' => 'Status harus berupa teks.',
        ];
    }
}
