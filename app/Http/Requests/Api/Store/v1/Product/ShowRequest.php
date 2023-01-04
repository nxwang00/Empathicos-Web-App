<?php

namespace App\Http\Requests\Api\Store\v1\Product;

use App\Http\Resources\Api\Store\v1\Product\ProductResource;
use App\Product;
use Illuminate\Foundation\Http\FormRequest;

class ShowRequest extends FormRequest
{

    /**
     * Determine if the Product is authorized to make this request.
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

        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [

        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [

        ];
    }

    public function getProduct()
    {
        return showApiResponse('product', new ProductResource($this->product));
    }
}
