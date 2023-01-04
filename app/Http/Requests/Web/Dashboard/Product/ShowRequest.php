<?php

namespace App\Http\Requests\Web\Dashboard\Product;

use App\Product;
use Illuminate\Foundation\Http\FormRequest;
use App\Category;
use DB;


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

    public function getProduct(): array
    {
        return [
            'product'       => $this->product,
            'categories' => Category::whereIn('id',json_decode($this->product->categories))->pluck('name')->implode(','),
            'galleries' => DB::table('product_images')->where('product_id',$this->product->id)->pluck('image'),

        ];
    }

}
