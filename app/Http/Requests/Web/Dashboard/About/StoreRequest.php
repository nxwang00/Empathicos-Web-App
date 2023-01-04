<?php

namespace App\Http\Requests\Web\Dashboard\About;

use App\About;
use Auth;
use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    private $about;

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
            'page'        => 'required|string|max:255',
            'name'        => 'required|string|max:255',
            'course'      => 'required|string|max:255',
            'position'    => 'required|string|unique:abouts,position',
            'website'     => 'required|string|max:255',
            'description' => 'required|max:10000',
            'image'       => 'required|image|mimes:jpg,jpeg,png|max:2048',
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
        $this->about = About::create($this->data());

        return $this;
    }

    protected function data(): array
    {
        return [
            'page'        => $this->input('page'),
            'name'        => $this->input('name'),
            'website'     => $this->input('website'),
            'course'      => $this->input('course'),
            'description' => $this->input('description'),
            'position'     => $this->input('position'),
            'image'       => $this->storeFilesIfExists('image'),
            'status'      => 1,
        ];
    }

    protected function storeFilesIfExists($file_name = ''): string
    {
        if ($this->hasFile($file_name)) {
            $filenameWithExt = $this->file($file_name)->getClientOriginalName();
            $filename        = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension       = $this->file($file_name)->getClientOriginalExtension();
            $avatar          = time() . '.' . $extension;
            $path            = $this->file($file_name)->storeAs('public/abouts', $avatar);
            return $avatar;
        } else {
            return 'about.jpg';
        }
    }

    public function getAbout(): About
    {
        return $this->about;
    }
}
