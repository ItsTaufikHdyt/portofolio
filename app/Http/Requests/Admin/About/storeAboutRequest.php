<?php

namespace App\Http\Requests\Admin\About;

use Illuminate\Foundation\Http\FormRequest;

class storeAboutRequest extends FormRequest
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
            'desc' => 'required',
            'website' => 'required',
            'phone' => 'required',
            'city' => 'required',
            'email' => 'required',
            'freelance' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'desc.required' => 'Deskripsi Tidak Boleh Kosong',
            'website.required' => 'Website Tidak Boleh Kosong',
            'phone.required' => 'Phone Tidak Boleh Kosong',
            'city.required' => 'city Tidak Boleh Kosong',
            'email.required' => 'email Tidak Boleh Kosong',
            'freelance.required' => 'freelance Tidak Boleh Kosong',
            
        ];
    }
}
