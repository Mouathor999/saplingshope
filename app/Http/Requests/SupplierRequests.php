<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SupplierRequests extends FormRequest
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
            'shopname'=>'required',
            'supname'=>'required',
            'village'=>'required',
            'district'=>'required',
            'province'=>'required',
            'country'=>'required',
        ];
    }
    public function messages(){
        return[
            'shopname.required'=>'ກະລູນາປ້ອນຊື່ຮ້ານ',
            'supname.required'=>'ກະລູນາປ້ອນຊື່ເຈົ້າຂອງຮ້ານ',
            'village.required'=>'ກະລູນາປ້ອນຊື່ບ້ານ',
            'district.required'=>'ກະລູນາປ້ອນຊື່ເມືອງ',
            'province.required'=>'ກະລູນາປ້ອນແຂວງ',
            'country.required'=>'ກະລູນາປ້ອນຊື່ປະເທດ',
        ];
    }
}
