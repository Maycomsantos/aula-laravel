<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PaymentRequest extends FormRequest
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
            'name'          =>  'required',
            'description'   =>  'required',
            'pay'           =>  'required',
        ];
    }

    public function message(){
        return[
            'name.required'           => 'O nome é obrigatório',
            'description.required'    => 'A descrição é obrigatória',
            'pay.required'            => 'O pagamento precisa ser informado',
        ];
    }
}
