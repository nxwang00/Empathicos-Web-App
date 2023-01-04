<?php

namespace App\Http\Requests\Web\Dashboard\User;

use App\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Storage;

class DestroyRequest extends FormRequest
{

    /**
     * Determine if the user is authorized to make this request.
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
        Storage::delete('public/profiles/' . $this->user->image);

        $this->user->delete();
        return $this;
    }

    public function getMsg(): array
    {
        return ['message' => 'The user has been trashed successfully'];
    }
}
