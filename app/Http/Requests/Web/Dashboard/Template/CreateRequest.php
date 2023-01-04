<?php

namespace App\Http\Requests\Web\Dashboard\Template;

use App\BadgeCategory;
use App\Template;
use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
{

    /**
     * Determine if the template is authorized to make this request.
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

    public function getTemplate(): array
    {
        return [
            'categories' => BadgeCategory::where('status', 1)->pluck('name', 'id'),
            'templates'  => Template::TYPES,
        ];
    }

}
