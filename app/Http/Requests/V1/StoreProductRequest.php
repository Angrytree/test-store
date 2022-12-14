<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'name' => ['required', 'min:2', 'max:60'],
            'category_id' => ['required', 'exists:App\Models\Category,id'],
            'currency_id' => ['required', 'exists:App\Models\Currency,id'],
            'price' => ['required', 'regex:/^\d+(\.\d{1,2})?$/'],
        ];
    }
}
