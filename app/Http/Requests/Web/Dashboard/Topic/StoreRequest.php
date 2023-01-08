<?php

namespace App\Http\Requests\Web\Dashboard\Topic;

use App\Topic;
use Auth;
use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    private $topic;

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
            'title'    => 'required|string|max:255',
            'category' => 'required|string|max:255',
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
        $this->topic = Topic::create($this->data());

        return $this;
    }

    protected function data(): array
    {
        return [
            'category_id' => $this->input('category'),
            'title'       => $this->input('title'),
            'description' => $this->input('description'),
        ];
    }

    public function getTopic(): Topic
    {
        return $this->topic;
    }
}
