<?php

namespace App\Http\Requests\Web\Dashboard\User;

use App\User;
use Auth;
use Hash;
use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    private $user;

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
            'birthday' => 'required|string|max:255',
            'email'    => 'required|email|unique:users,email',
            'image'    => 'image|mimes:jpg,jpeg,png|max:2048',
            'about'    => 'required|max:5000',
            'password' => 'required_with:want_change_pass|string|min:8|confirmed',
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
        $this->user = User::create($this->data());

        return $this;
    }

    protected function data(): array
    {
        return [
            'name'     => $this->input('name'),
            'birthday' =>  date('Y-m-d',strtotime($this->input('birthday'))),
            'email'    => $this->input('email'),
            'about'    => $this->input('about'),
            'image'    => $this->storeFilesIfExists('image'),
            'password' => Hash::make($this->input('password')),
            'status'   => 1,
        ];
    }

    protected function storeFilesIfExists($file_name = ''): string
    {
        if ($this->hasFile($file_name)) {
            $filenameWithExt = $this->file($file_name)->getClientOriginalName();
            $filename        = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension       = $this->file($file_name)->getClientOriginalExtension();
            $avatar          = time() . '.' . $extension;
            $path            = $this->file($file_name)->storeAs('public/profiles', $avatar);
            return $avatar;
        } else {
            return 'user.jpg';
        }
    }

    public function getUser(): User
    {
        return $this->user;
    }
}
