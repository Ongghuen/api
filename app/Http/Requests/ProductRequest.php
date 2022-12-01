<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'max:50|required',
            'harga' => 'max:11|required',
            'qty' => 'max:4|required',
            'categories' => 'max:100|required',
            'desc' => 'required'
        ];
    }

    public function messages(){
        return [
            'name.required' => 'Field Nama Produk wajib diisi.',
            'harga.required' => 'Field Harga wajib diisi.',
            'qty.required' => 'Field Qty wajib diisi.',
            'categories.required' => 'Field Kategori wajib diisi.',
            'desc.required' => 'Field Deskripsi wajib diisi.',
            'name.max' => 'Nama Produk maksimal :max karakter.',
            'harga.max' => 'Harga maksimal :max karakter.',
            'qty.max' => 'Qty maksimal :max karakter.',
            'categories.max' => 'Kategori maksimal :max karakter.'
        ];
    }
}
