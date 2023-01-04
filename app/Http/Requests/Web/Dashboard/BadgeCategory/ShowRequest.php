<?php

namespace App\Http\Requests\Web\Dashboard\BadgeCategory;

use App\BadgeCategory;
use DB;
use Illuminate\Foundation\Http\FormRequest;

class ShowRequest extends FormRequest
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

    public function getBadgeCategory(): array
    {
        return [
            'category'       => $this->badge_category,
            // 'galleries' => DB::table('badge_categories_images')->where('badge_id',$this->badge_category->id)->pluck('image'),
        ];
    }

}
