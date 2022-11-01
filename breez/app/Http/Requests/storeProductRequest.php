<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeProductRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'productName' => 'required|string|max:20|',
            'productPrice' => 'required|integer',
            'productDescription' => 'required|string|max:255',
            'productImage' => 'required|string|max:20',
            'productQuantity' => 'required|integer',

        ];
    }
}
