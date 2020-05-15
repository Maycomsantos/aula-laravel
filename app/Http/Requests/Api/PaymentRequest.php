<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class PaymentRequest extends FormRequest
{

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
            'name'              =>  'required',
            'document'         =>  'required',
            'rateios'           =>  'required',
            'emissao'           =>  'required',
            'dtvencimento'      =>  'required',
            'custo'             =>  'required',
            'valor'             =>  'required',
            'status'            =>  'required',
        ];
    }
}
