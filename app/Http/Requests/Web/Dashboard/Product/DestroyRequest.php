<?php

namespace App\Http\Requests\Web\Dashboard\Product;

use App\Product;
use DB;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Storage;

class DestroyRequest extends FormRequest
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

    public function persist(): self
    {
        //delete old file...
        Storage::delete('public/products/images/' . $this->product->image);

        //delete galleries old file...
        $galleries = DB::table('product_images')->where('product_id', $this->product->id)->get();
        foreach ($galleries as $key => $gallery) {
            Storage::delete('public/products/galleries/' . $gallery->image);
        }
        //delete old galleries data...
        DB::table('product_images')->where('product_id', $this->product->id)->delete();

        $this->product->delete();
        return $this;
    }

    public function getMsg(): array
    {
        return ['message' => 'The Product has been trashed successfully'];
    }
}
