<?php

namespace App\Http\Requests\Web\Dashboard\Badge;

use App\Badge;
use Auth;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Storage;
use ImageResize;

class UpdateRequest extends FormRequest
{

    /**
     * Determine if the badge is authorized to make this request.
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
            'name'          => 'required|string|max:255',
            'description'   => 'required|max:10000',
            'image'         => 'image|mimes:jpg,jpeg,png|max:2048',
            'journey_image' => 'image|mimes:jpg,jpeg,png|max:2048',
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
        $this->badge->update($this->data());
        return $this;
    }

    protected function data(): array
    {
        return [
            'name'          => $this->input('name'),
            'description'   => $this->input('description'),
            'image'         => $this->storeFilesIfExists('image'),
            'journey_image' => $this->storeFilesIfExists('journey_image'),
            'status'        => 1,
        ];
    }

    protected function storeFilesIfExists($file_name = ''): string
    {
        if ($this->hasFile($file_name)) {
            //delete old file...
            Storage::delete('public/badges/' . $this->badge->image);

            $filenameWithExt = $this->file($file_name)->getClientOriginalName();
            $filename        = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension       = $this->file($file_name)->getClientOriginalExtension();
            $image_name      = time() . '.' . $extension;
            $path            = $this->file($file_name)->storeAs('public/badges', $image_name);
            
            return $image_name;

        }
        if ($file_name == 'journey_image') {
            return $this->badge->journey_image;
        }
        return $this->badge->image;
    }

    public function getBadge(): Badge
    {
        return $this->badge;
    }
}
