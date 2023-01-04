<?php

namespace App\Http\Requests\Api\v1\User;

use App\Http\Resources\Api\v1\User\UserResource;
use App\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class UpdateRequest extends FormRequest
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
            'first_name' => 'required|string|max:255',
            'last_name'  => 'required|string|max:255',
            'email'      => 'required|email|unique:users,email,' . $this->user->id,
            'about'      => 'required|string|max:255',
            'device_id'  => 'required|string|max:255',
            'image'      => 'image|mimes:jpg,jpeg,png|max:2048',
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
        $this->user->update($this->data());
        return $this;
    }

    protected function data(): array
    {
        $data = [
            'email'      => $this->email,
            'first_name' => $this->first_name,
            'last_name'  => $this->last_name,
            'device_id'  => $this->device_id,
            'about'      => $this->about,
            'status'      => '1',
        ];

        if ($this->hasFile('image')) {
            $filenameWithExt = $this->file('image')->getClientOriginalName();
            $filename        = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension       = $this->file('image')->getClientOriginalExtension();
            $avatar          = time() . '.' . $extension;

            $this->file('image')->storeAs('public/profiles', $avatar); //store file...
            Storage::delete('public/profiles/' . $this->hidden_image); //delete old file...

            $data['image']  = $avatar;
        } 

        return $data;
    }

    public function getUser()
    {
        return updateApiResponse('user', new UserResource($this->user));
    }

}
