<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequests extends FormRequest
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
            'uname' => 'required',
            'pwd' => 'required|min:8|max:20',
            'Comfirm_pwd' => 'required|min:8|max:20',
            'name' => 'required',
            'lastname' => 'required',
            'gender' => 'required',
            'age' => 'required',
            'E_edu' => 'required',
            'village' => 'required',
            'district' => 'required',
            'province' => 'required',
            'phone' => 'required',
        ];
    }
    public function messages(){
        return [
            'uname.required' => 'ກະລູນາປ້ອນຂໍ້ມູນຜູ້ໃຊ້',
            'pwd.required' => 'ກະລູນາປ້ອນລະຫັດ',
            'Comfirm_pwd.required' => 'ກະລູນາປ້ອນລະຫັດຢືນຢັນ',
            'name.required' => 'ກະລູນາປ້ອນຊື່',
            'lastname.required' => 'ກະລູນາປ້ອນນາມສະກຸນ',
            'gender.required' => 'ກະລູນາລະບຸເພດ',
            'age.required' => 'ກະລູນາລະບຸອາຍຸ',
            'E_edu.required' => 'ກະລູນາລະບຸລະດັບການສືກສາ',
            'village.required' => 'ກະລູນາປ້ອນຊື່ບ້ານ',
            'district.required' => 'ກະລູນາປ້ອນຊື່ເມືອງ',
            'province.required' => 'ກະລູນາປ້ອນຊື່ແຂວງ',
            'phone.required' => 'ກະລູນາປ້ອນໝາຍເລກໂທລະສັບ',
        ];
    }
}
