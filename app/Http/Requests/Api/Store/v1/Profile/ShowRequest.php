<?php

namespace App\Http\Requests\Api\Store\v1\Profile;

use App\Http\Resources\Api\Store\v1\User\UserResource;
use App\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

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
        return Auth::user();
        if (Auth::check()) {
            $user = User::find(Auth::id());
            return showApiResponse('user', new UserResource($user));
        }
        return failedApiResponse('Oops, could not fetch user profile.',null, '201');
    }
}
