<?php

namespace App\Http\Requests\Web\Dashboard\Content;

use App\Mainsubcat;
use App\Maincat;
use App\Content;
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
            'main_categories' => Maincat::pluck('title', 'id'),
            'categories' => Mainsubcat::pluck('title', 'id'),
            'templates'  => Content::TYPES,
        ];
    }

}
