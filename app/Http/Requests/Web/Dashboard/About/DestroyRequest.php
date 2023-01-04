<?php

namespace App\Http\Requests\Web\Dashboard\About;

use App\About;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Storage;

class DestroyRequest extends FormRequest
{

    /**
     * Determine if the About is authorized to make this request.
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
        //delete old file...
        Storage::delete('public/abouts/' . $this->about->image);

        $this->about->delete();
        return $this;
    }

    public function getMsg(): array
    {
        return ['message' => 'The About has been trashed successfully'];
    }
}
