<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveProductRequest extends FormRequest
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
            'ten_san_pham' => 'required',
            'size' => 'required',
            'gia' => 'required|numeric',
            'chat_lieu' => 'required',
            'mo_ta' => 'required',
            'gia_nhap' => 'required|numeric',
            'trong_luong' => 'required',
            'mau_sac' => 'required',
            'anh' => 'file|image'
        ];
    }
}
