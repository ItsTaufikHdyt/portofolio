<?php

namespace App\Http\Requests\Admin\Tags;

use Illuminate\Foundation\Http\FormRequest;

class storeTagsRequest extends FormRequest
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
            'tags_name' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'tags_name.required' => 'Nama Tag Tidak Boleh Kosong',
        ];
    }
}
