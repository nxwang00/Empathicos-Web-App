<?php

namespace App\Http\Requests\Web\Dashboard\Article;

use App\Article;
use Auth;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Storage;

class UpdateRequest extends FormRequest
{

    /**
     * Determine if the Article is authorized to make this request.
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
            'title'       => 'required|string|max:255',
            'description' => 'required|max:10000',
            'image'       => 'image|mimes:jpg,jpeg,png|max:2048',
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
        $this->article->update($this->data());
        return $this;
    }

    protected function data(): array
    {
        return [
            'title'       => $this->input('title'),
            'slug'        => createSlug($this->input('title')),
            'description' => $this->input('description'),
            'image'       => $this->storeFilesIfExists('image'),
        ];
    }

    protected function storeFilesIfExists($file_name = ''): string
    {
        if ($this->hasFile($file_name)) {
            //delete old file...
            Storage::delete('public/articles/' . $this->article->image);

            $filenameWithExt = $this->file($file_name)->getClientOriginalName();
            $filename        = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension       = $this->file($file_name)->getClientOriginalExtension();
            $avatar          = time() . '.' . $extension;
            $path            = $this->file($file_name)->storeAs('public/articles', $avatar);
            return $avatar;
        } else {
            return $this->article->image;
        }
    }

    public function getArticle(): Article
    {
        return $this->article;
    }
}
