<?php

namespace App\Http\Requests\Web\Dashboard\Content;

use App\Template;
use Illuminate\Foundation\Http\FormRequest;

class StatusRequest extends FormRequest
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

    public function persist(): self
    {
        $this->Template->update($this->data());
        return $this;
    }

    protected function data(): array
    {
        return [
            'status' => ($this->Template->status == 1) ? 2 : 1,
        ];
    }

    public function getTemplate(): Template
    {
        return $this->Template;
    }
}
