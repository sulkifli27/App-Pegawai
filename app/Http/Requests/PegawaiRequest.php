<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PegawaiRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {

        return [
            'nama_pegawai' => ['required', 'string', 'unique:pegawais,nama_pegawai', 'max:10'],
            'total_gaji' => ['required', 'min:7', 'max:8'],
        ];
    }
}
