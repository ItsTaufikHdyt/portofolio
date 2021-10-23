<?php

namespace App\Http\Requests\Admin\Portfolio;

use Illuminate\Foundation\Http\FormRequest;

class storePortfolioRequest extends FormRequest
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
            'portfolio_title' => 'required',
            'portfolio_desc' => 'required',
            'project_date' => 'required',
            'project_url' => 'required',
            'client' => 'required',
            'type' => 'required',
            'tags' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'portfolio_title.required' => 'Judul Portofolio Tidak Boleh Kosong',
            'portfolio_title.required' => 'Deskripsi Portofolio Tidak Boleh Kosong',
            'project_date.required' => 'Tanggal Projek tidak Boleh Kosong',
            'project_url.required' => 'URL Projek Tidak Boleh Kosong',
            'client.required' => 'Klien Tidak Boleh Kosong',
            'type.required' => 'Tipe Tidak Boleh Kosong',
            'tags.required' => 'Tag Tidak Boleh Kosong',
        ];
    }
}
