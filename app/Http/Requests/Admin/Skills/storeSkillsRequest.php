<?php

namespace App\Http\Requests\Admin\Skills;

use Illuminate\Foundation\Http\FormRequest;

class storeSkillsRequest extends FormRequest
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
            'name' => 'required',
            'icon' => 'required',
            'level' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Nama Tidak Boleh Kosong',
            'icon.required' => 'Icon Tag Tidak Boleh Kosong',
            'level.required' => 'Level Tag Tidak Boleh Kosong',
        ];
    }
}
