<?php

namespace App\Http\Requests\Web\Dashboard\Category;

use App\Category;
use Auth;
use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{

    /**
     * Determine if the Category is authorized to make this request.
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
            'description' => 'max:10000',
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
        $this->category->update($this->data());
        return $this;
    }

    protected function data(): array
    {
        return [
            'name'        => $this->input('name'),
            'description' => $this->input('description'),
        ];
    }

    public function getCategory(): Category
    {
        return $this->category;
    }
}
