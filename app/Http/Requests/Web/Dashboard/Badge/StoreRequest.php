<?php

namespace App\Http\Requests\Web\Dashboard\Badge;

use App\Badge;
use Auth;
use Illuminate\Foundation\Http\FormRequest;
use ImageResize;
use Storage;

class StoreRequest extends FormRequest
{
    private $badge;

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
            'image'         => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'journey_image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
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
        $this->badge = Badge::create($this->data());

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

            $filenameWithExt = $this->file($file_name)->getClientOriginalName();
            $filename        = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension       = $this->file($file_name)->getClientOriginalExtension();
            $image_name      = time() . '.' . $extension;
            $path            = $this->file($file_name)->storeAs('public/badges', $image_name);
            return $image_name;

            return $avatar;
        }
    }

    public function getBadge(): Badge
    {
        return $this->badge;
    }
}
