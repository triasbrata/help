<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProvinsiRequest extends Request
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
            'id'=>'required|min:2|max:2',
            'title'=>'required|min:3|max:50'
        ];
    }
    public function attributes()
    {
        return [
            'id'=>' ID Provinsi',
            'title' => 'Nama Provinsi'
        ];
    }
}
