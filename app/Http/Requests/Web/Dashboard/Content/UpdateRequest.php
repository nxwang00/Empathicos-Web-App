<?php

namespace App\Http\Requests\Web\Dashboard\Content;

use App\Content;
use Auth;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Storage;

class UpdateRequest extends FormRequest
{
    protected $content;

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

    public function persist($content): self
    {
        // $this->template->delete();

        // $this->template = Template::updateOrCreate([
        //         'category_id' => $this->input('category'),
        //         'field'       => $this->input('field')
        //     ],
        //     $this->data()
        // );

        $this->content = $content->update($this->data());

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
        //delete old file & template...
        if ($this->hasFile($file_name)) {
            //delete old file...
            if ($file_name == 'second_image' && $this->old_second_image) {
                Storage::delete('public/contents/' . $this->old_second_image);
            }
            if ($file_name == 'image' && $this->old_image) {
                Storage::delete('public/contents/' . $this->old_image);
            }

            $filenameWithExt = $this->file($file_name)->getClientOriginalName();
            $filename        = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension       = $this->file($file_name)->getClientOriginalExtension();
            $image_name      = time() . rand(10, 100) . '.' . $extension;
            $path            = $this->file($file_name)->move('storage/contents', $image_name);
            return $image_name;
        }
        return $this->old_image;
    }

    public function getTemplate()
    {
        return $this->content;
    }
}
