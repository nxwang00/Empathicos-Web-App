<?php

namespace App\Http\Requests\Web\Dashboard\Faq;

use App\Faq;
use Auth;
use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'question' => 'required|string|max:255',
            'anwser'   => 'required|max:10000',
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
        $this->faq->update($this->data());
        return $this;
    }

    protected function data(): array
    {
        return [
            'question' => $this->input('question'),
            'anwser'   => $this->input('anwser'),
            'status'   => 1,
        ];
    }

    public function getFaq(): Faq
    {
        return $this->faq;
    }
}
