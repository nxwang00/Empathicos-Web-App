<?php

namespace App\Http\Requests\Api\Store\v1\Profile;

use App\Http\Resources\Api\Store\v1\User\UserResource;
use App\User;
use Auth;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
            'name'     => 'required|string|max:255',
            // 'birthday' => 'required|string|max:255',
            'email'    => 'required|email|unique:users,email,' . $this->user->id,
            // 'image'    => 'image|mimes:jpg,jpeg,png|max:2048',
            // 'about'    => 'required|max:5000',
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

        return [
            'name'     => $this->input('name'),
            'birthday' => date('Y-m-d', strtotime($this->input('birthday'))),
            'email'    => $this->input('email'),
            'about'    => $this->input('about'),
            'image'    => $this->storeFilesIfExists('image'),
        ];
    }

    protected function storeFilesIfExists($file_name = ''): string
    {
        if ($this->hasFile($file_name)) {
            //delete old file...
            Storage::delete('public/profiles/' . $this->user->image);

            $filenameWithExt = $this->file($file_name)->getClientOriginalName();
            $filename        = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension       = $this->file($file_name)->getClientOriginalExtension();
            $avatar          = time() . '.' . $extension;
            $path            = $this->file($file_name)->storeAs('public/profiles', $avatar);
            return $avatar;
        } 
        return $this->user->image;
    }

    public function getUser()
    {
        return updateApiResponse('user', new UserResource($this->user));
    }

}
