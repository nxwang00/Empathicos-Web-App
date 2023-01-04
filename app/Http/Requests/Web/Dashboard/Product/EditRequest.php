<?php

namespace App\Http\Requests\Web\Dashboard\Product;

use App\Category;
use App\Product;
use DB;
use Illuminate\Foundation\Http\FormRequest;

class EditRequest extends FormRequest
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
            'product'            => $this->product,
            'categories'         => Category::where('status', 1)->pluck('name', 'id'),
            'product_categories' => Category::whereIn('id', json_decode($this->product->categories))->pluck('id'),
            'product_galleries'  => DB::table('product_images')->select('image','id')->where('product_id', $this->product->id)->get(),
        ];
    }
}
