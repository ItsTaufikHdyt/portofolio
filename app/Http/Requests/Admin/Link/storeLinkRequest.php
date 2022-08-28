<?php

namespace App\Http\Requests\Admin\Link;

use Illuminate\Foundation\Http\FormRequest;

class storeLinkRequest extends FormRequest
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
            'type' => 'required',
            'icon' => 'required',
            'title' => 'required',
            'subtitle' => 'required',
            'url' => 'required',

        ];
    }

    public function messages()
    {
        return [
            'type.required' => 'type Tidak Boleh Kosong',
            'icon.required' => 'icon Tidak Boleh Kosong',
            'title.required' => 'title Tidak Boleh Kosong',
            'subtitle.required' => 'subtitle Tidak Boleh Kosong',
            'url.required' => 'url Tidak Boleh Kosong',
        ];
    }
}
