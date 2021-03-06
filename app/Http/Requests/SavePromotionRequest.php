<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SavePromotionRequest extends FormRequest
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
            'noi_dung' => 'required',
            'ngay_bat_dau' => 'required',
            'ngay_ket_thuc' => 'required',
            'so_luong' => 'numeric|required|min:2|max:100',
            'chiet_khau' => 'numeric|required|min:5|max:70'
        ];
    }
}
