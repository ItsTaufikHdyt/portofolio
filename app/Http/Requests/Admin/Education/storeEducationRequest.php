<?php

namespace App\Http\Requests\Admin\Education;

use Illuminate\Foundation\Http\FormRequest;

class storeEducationRequest extends FormRequest
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
            'title' => 'required',
            'period' => 'required',
            'location' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Judul Tidak Boleh Kosong',
            'period.required' => 'Periode Tidak Boleh Kosong',
            'location.required' => 'Lokasi Tidak Boleh Kosong',
        ];
    }
}
