<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrderRequest extends FormRequest
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

    public function messages() {
        return [
            'products.*.array' => 'Products elements must be an arrays with product_id and quantity keys.',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['required', 'min:2', 'max:60'],
            'lastname' => ['required', 'min:2', 'max:60'],
            'phone' => ['required', 'regex: /\d/', 'min:8', 'max:12'],
            'products' => ['required', 'array'],
            'products.*' => ['required', 'array:product_id,quantity'],
            'products.*.product_id' => ['required'],
            'products.*.quantity' => ['required'],
        ];
    }
}
