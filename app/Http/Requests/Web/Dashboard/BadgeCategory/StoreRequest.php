<?php

namespace App\Http\Requests\Web\Dashboard\BadgeCategory;

use App\BadgeCategory;
use Auth;
use DB;
use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    private $badge_category;

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
            'image'       => 'required|image|mimes:jpg,jpeg,png|max:2048',
            // 'images'      => 'required|array',
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
        $this->badge_category = BadgeCategory::create($this->data());
        
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
            $path            = $this->file($file_name)->storeAs('public/badge-categories/images', $avatar);
            return $avatar;
        } else {
            return 'badge-category.jpg';
        }
    }

    protected function galleries($file_name, $badge_id)
    {
        $insert = [];
        if ($this->hasFile($file_name)) {
            if ($files = $this->file($file_name)) {
                foreach ($files as $key => $file) {
                    $filenameWithExt = $file->getClientOriginalName();
                    $filename        = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                    $extension       = $file->getClientOriginalExtension();
                    $image_name      = time() . $key .'.' . $extension;
                    $path            = $file->storeAs('public/badge-categories/galleries', $image_name);
                    $insert[]        = [
                        'image'      => $image_name,
                        'badge_id' => $badge_id,
                    ];
                }
            }
        }
        return DB::table('badge_categories_images')->insert($insert);
    }

    public function getBadgeCategory(): BadgeCategory
    {
        return $this->badge_category;
    }
}
