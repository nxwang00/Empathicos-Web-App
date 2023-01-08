<?php

namespace App\Http\Requests\Web\Dashboard\Topic;

use App\Topic;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Storage;

class DestroyRequest extends FormRequest
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

    public function persist(): self
    {
        $this->topic->delete();
        return $this;
    }

    public function getMsg(): array
    {
        return ['message' => 'The topic has been trashed successfully'];
    }
}
