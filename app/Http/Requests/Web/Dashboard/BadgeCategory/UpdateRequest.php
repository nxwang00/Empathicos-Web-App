<?php

namespace App\Http\Requests\Web\Dashboard\BadgeCategory;

use App\BadgeCategory;
use Auth;
use DB;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Storage;

class UpdateRequest extends FormRequest
{

    /**
     * Determine if the badge category is authorized to make this request.
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
            'name'        => 'required|string|max:255',
            'description' => 'max:10000',
            'image'       => 'image|mimes:jpg,jpeg,png|max:2048',
            // 'images'      => 'array',
            // 'images.*'    => 'mimes:jpg,jpeg,png|max:2048',
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
        $this->badge_category->update($this->data());

        //uploading galleries images...
        // $this->galleries('images', $this->badge_category->id);

        return $this;
    }

    protected function data(): array
    {
        return [
            'name'        => $this->input('name'),
            'description' => $this->input('description'),
            'image'       => $this->storeFilesIfExists('image'),
        ];
    }

    protected function storeFilesIfExists($file_name = ''): string
    {
        if ($this->hasFile($file_name)) {
            //delete old file...
            Storage::delete('public/badge-categories/images/' . $this->badge_category->image);

            $filenameWithExt = $this->file($file_name)->getClientOriginalName();
            $filename        = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension       = $this->file($file_name)->getClientOriginalExtension();
            $avatar          = time() . '.' . $extension;
            $path            = $this->file($file_name)->storeAs('public/badge-categories/images', $avatar);
            return $avatar;
        } else {
            return $this->badge_category->image;
        }
    }

    protected function galleries($file_name, $badge_id)
    {
        if ($this->hasFile($file_name)) {
            //delete old file...
            $galleries = DB::table('badge_categories_images')->where('badge_id', $badge_id)->get();
            foreach ($galleries as $key => $gallery) {
                Storage::delete('public/badge-categories/galleries/' . $gallery->image);
            }
            //delete old gallery data...
            DB::table('badge_categories_images')->where('badge_id', $badge_id)->delete();

            $insert = [];
            if ($files = $this->file($file_name)) {
                foreach ($files as $key => $file) {
                   
                    $filenameWithExt = $file->getClientOriginalName();
                    $filename        = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                    $extension       = $file->getClientOriginalExtension();
                    $image_name      = time(). $key . '.' . $extension;
                    $path            = $file->storeAs('public/badge-categories/galleries', $image_name);
                    $insert[]        = [
                        'image'      => $image_name,
                        'badge_id' => $badge_id,
                    ];
                }
            }
            
            return DB::table('badge_categories_images')->insert($insert);
        }
    }

    public function getBadgeCategory(): BadgeCategory
    {
        return $this->badge_category;
    }
}
