<?php

namespace App\Http\Requests\Web\Dashboard\BadgeTemplate;

use App\BadgeTemplate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Storage;

class DestroyRequest extends FormRequest
{

    /**
     * Determine if the BadgeTemplate is authorized to make this request.
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
        $value = json_decode($this->badge_template->value);

        if (!empty($value->second_image)) {
            Storage::delete('public/badge-templates/' . $value->second_image);
        }
        if (!empty($value->image)) {
            Storage::delete('public/badge-templates/' . $value->image);
        }

        $this->badge_template->delete();
        return $this;
    }

    public function getMsg(): array
    {
        return ['message' => 'The template has been trashed successfully'];
    }
}
