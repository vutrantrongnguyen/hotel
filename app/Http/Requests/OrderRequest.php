<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
            'txtDateIn' => 'required',
            'txtDateOut' => 'required',
            'sltNumber' => 'required|not_in:0',
            'sltType' => 'required|not_in:0'
        ];
    }

    public function messages()
    {
        return [
            'txtDateIn.required' => 'Please Enter Date In',
            'txtDateOut.required' => 'Please Enter Date Out',
            'sltNumber.required' => 'Please Choose Number',
            'sltNumber.not_in' => 'Please Choose Number',
            'sltType.required' => 'Please Choose Type',
            'sltType.not_in' => 'Please Choose Type'
        ];
    }
}
