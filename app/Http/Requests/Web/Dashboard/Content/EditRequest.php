<?php

namespace App\Http\Requests\Web\Dashboard\Content;

use App\Mainsubcat;
use App\Content;
use Illuminate\Foundation\Http\FormRequest;

class EditRequest extends FormRequest
{

    /**
     * Determine if the Template is authorized to make this request.
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

    public function getTemplate($content): array
    {
        return [
            'content'   => $content,
            'categories' => Mainsubcat::pluck('title', 'id'),
            'templates'  => Content::TYPES,
        ];
    }
}
