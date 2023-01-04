<?php

namespace App\Http\Requests\Web\Dashboard\Faq;

use App\Faq;
use Illuminate\Foundation\Http\FormRequest;

class ShowRequest extends FormRequest
{

    /**
     * Determine if the Faq is authorized to make this request.
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

    public function getFaq(): array
    {
        return [
            'faq'       => $this->faq,
        ];
    }

}
