<?php

namespace App\Http\Requests\Api\v1\User;

use App\Http\Resources\Api\v1\User\UserResource;
use App\User;
use Illuminate\Foundation\Http\FormRequest;

class ShowRequest extends FormRequest
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

    public function getUser()
    {
        return showApiResponse('user', new UserResource($this->user));
    }
}
