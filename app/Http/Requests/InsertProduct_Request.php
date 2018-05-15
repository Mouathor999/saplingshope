<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InsertProduct_Request extends FormRequest
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
            'pid'=>'required',
            'pname'=>'required',
            'ptypeid'=>'required',
            'plevel'=>'required',
            'pprice'=>'required',
            'pamount'=>'required',
            'limit'=>'required',
        ];
    }
    public function messages()
    {

        return [
            'pid.required'=>"Please input id",
            'pname.required'=>"Please input productname",
            'ptypeid.required'=>"Please input product type",
            'pprice.required'=>"Please input price",
            'pamount.required'=>"Please input pamount",
        ];
    }
}
