<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderCreate extends FormRequest
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
            'customer' => 'required',
            'telephone' => 'required',
            'email' => 'required',
            'address' => 'required',
            'product.*.product_id' => [
                function($attribute, $value, $fail){
                    if($value == null){
                        $str = explode('.',$attribute)[1];
                        $fail('Określ produkt w wierszu '.$str);
                    }
                }
            ],
            'product.*.count' => [
                function($attribute, $value, $fail){
                    if($value == null){
                        $str = explode('.',$attribute)[1];
                        $fail('Określ ilość towarów w wierszu '.$str);
                    }
                }
            ],
        ];
    }

    public function messages()
    {
        return [
          'customer.required' => 'Wymagane pole Nazwa klienta',
          'telephone.required' => 'Pole wymagane w polu telefonu klienta',
          'email.required' => 'Wymagane pole adresu e-mail klienta',
          'address.required' => 'Pole Wymagany adres odbiorcy',
          'product.*.product_id.required' => 'Wybierz produkt w wierszu :values',
          'product.*.count.required' => 'Określ ilość produktów w wierszu :attribute'
        ];
    }


}
