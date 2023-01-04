<?php

namespace App\Http\Requests\Web\Dashboard\Template;

use App\Template;
use Auth;
use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    private $template;

    /**
     * Determine if the Template is authorized to make this request.
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
            'field'    => 'required|string|max:255',
            'category' => 'required|string|max:255',
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
        $this->template = Template::create($this->data());
        // $this->template = Template::updateOrCreate([
        //         'category_id' => $this->input('category'),
        //         'field'       => $this->input('field')
        //     ],
        //     $this->data()
        // );

        return $this;
    }

    protected function data(): array
    {
        if ($this->input('field') == '1') {
            return [
                'category_id' => $this->input('category'),
                'field'       => $this->input('field'),
                'value'       => json_encode([
                    'title'       => $this->input('title'),
                    'description' => $this->input('description'),
                    'image'       => $this->storeFilesIfExists('image'),
                ]),
            ];
        }
        if ($this->input('field') == '2') {
            return [
                'category_id' => $this->input('category'),
                'field'       => $this->input('field'),
                'value'       => json_encode([
                    'title'             => $this->input('title'),
                    'short_description' => $this->input('short_description'),
                    'description'       => $this->input('description'),
                    'image'             => $this->storeFilesIfExists('image'),
                ]),
            ];
        }

        if ($this->input('field') == '3') {
            return [
                'category_id' => $this->input('category'),
                'field'       => $this->input('field'),
                'value'       => json_encode([
                    'title'        => $this->input('title'),
                    'description'  => $this->input('description'),
                    'image'        => $this->storeFilesIfExists('image'),
                    'second_image' => $this->storeFilesIfExists('second_image'),
                ]),
            ];
        }

        if ($this->input('field') == '4') {
            return [
                'category_id' => $this->input('category'),
                'field'       => $this->input('field'),
                'value'       => json_encode([
                    'title'       => $this->input('title'),
                    'description' => $this->input('description'),
                    'image'       => $this->storeFilesIfExists('image'),
                ]),
            ];
        }
        if ($this->input('field') == '5') {
            return [
                'category_id' => $this->input('category'),
                'field'       => $this->input('field'),
                'value'       => json_encode([
                    'title'             => $this->input('title'),
                    'short_description' => $this->input('short_description'),
                    'description'       => $this->input('description'),
                    'image'             => $this->storeFilesIfExists('image'),
                ]),
            ];
        }

        if ($this->input('field') == '6') {
            return [
                'category_id' => $this->input('category'),
                'field'       => $this->input('field'),
                'value'       => json_encode([
                    'title'        => $this->input('title'),
                    'description'  => $this->input('description'),
                    'image'        => $this->storeFilesIfExists('image'),
                    'second_image' => $this->storeFilesIfExists('second_image'),
                ]),
            ];
        }
    }

    protected function storeFilesIfExists($file_name = ''): string
    {
        if ($this->hasFile($file_name)) {
            $filenameWithExt = $this->file($file_name)->getClientOriginalName();
            $filename        = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension       = $this->file($file_name)->getClientOriginalExtension();
            $image_name      = time() . rand(10, 100) . '.' . $extension;
            $path            = $this->file($file_name)->storeAs('public/templates', $image_name);
            return $image_name;
        }

        return 'default.png';
    }

    public function getTemplate(): Template
    {
        return $this->template;
    }
}
