<?php

namespace App\Http\Requests\Web\Dashboard\BadgeCategory;

use App\BadgeCategory;
use Illuminate\Foundation\Http\FormRequest;
use DB;
use Illuminate\Support\Facades\Storage;

class DestroyRequest extends FormRequest
{

    /**
     * Determine if the badge category is authorized to make this request.
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
        Storage::delete('public/badge-categories/images/' . $this->badge_category->image);

        //delete galleries old file...
        // $galleries = DB::table('badge_categories_images')->where('badge_id', $this->badge_category->id)->get();
        // foreach ($galleries as $key => $gallery) {
        //     Storage::delete('public/badge-categories/galleries/' . $gallery->image);
        // }
        //delete old galleries data...
        // DB::table('badge_categories_images')->where('badge_id', $this->badge_category->id)->delete();

        $this->badge_category->delete();
        return $this;
    }

    public function getMsg(): array
    {
        return ['message' => 'The category has been trashed successfully'];
    }
}
