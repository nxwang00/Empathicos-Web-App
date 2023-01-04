<?php

namespace App\Http\Requests\Web\Dashboard\Product;

use App\Product;
use Auth;
use Illuminate\Foundation\Http\FormRequest;
use DB;
use Illuminate\Support\Facades\Storage;

class UpdateRequest extends FormRequest
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
            'name'        => 'required|string|max:255',
            'price'       => 'required|string|max:255',
            'description' => 'required|max:10000',
            'categories'  => 'required|array',
            'image'       => 'image|mimes:jpg,jpeg,png|max:2048',
            'images'      => 'array',
            'images.*'    => 'mimes:jpg,jpeg,png|max:2048',
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
            'required' => 'The :attribute field is required.',
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
        $this->product->update($this->data());

        //uploading galleries images...
        $this->galleries('images', $this->product->id);
        return $this;

    }

    protected function data(): array
    {
        return [
            'name'        => $this->input('name'),
            'price'       => $this->input('price'),
            'description' => $this->input('description'),
            'categories'  => json_encode($this->input('categories')),
            'image'       => $this->storeFilesIfExists('image'),
            'status'      => 1,
        ];
    }

    protected function storeFilesIfExists($file_name = ''): string
    {
        if ($this->hasFile($file_name)) {
            //delete old file...
            Storage::delete('public/products/images/' . $this->product->image);

            $filenameWithExt = $this->file($file_name)->getClientOriginalName();
            $filename        = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension       = $this->file($file_name)->getClientOriginalExtension();
            $image_name      = time() . '.' . $extension;
            $path            = $this->file($file_name)->storeAs('public/products/images', $image_name);
            return $image_name;
        }
        return $this->product->image;
    }

    protected function galleries($file_name, $product_id)
    {
        if ($this->hasFile($file_name)) {
            //delete old file...
            // $galleries = DB::table('product_images')->where('product_id', $product_id)->get();
            // foreach ($galleries as $key => $gallery) {
            //     Storage::delete('public/products/galleries/' . $gallery->image);
            // }
            //delete old gallery data...
            // DB::table('product_images')->where('product_id', $product_id)->delete();

            $insert = [];
            if ($files = $this->file($file_name)) {
                foreach ($files as $key => $file) {
                   
                    $filenameWithExt = $file->getClientOriginalName();
                    $filename        = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                    $extension       = $file->getClientOriginalExtension();
                    $image_name      = time(). $key . '.' . $extension;
                    $path            = $file->storeAs('public/products/galleries', $image_name);
                    $insert[]        = [
                        'image'      => $image_name,
                        'product_id' => $product_id,
                    ];
                }
            }
            
            return DB::table('product_images')->insert($insert);
        }
    }

    public function getProduct(): Product
    {
        return $this->product;
    }
}
