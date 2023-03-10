<?php

namespace App\Http\Resources\Api\Store\v1\BadgeCategory;

use Illuminate\Http\Resources\Json\JsonResource;

class BadgeCategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'          => $this->id,
            'name'        => $this->name,
            'description' => $this->description,
            'image'       => asset('storage/badge-categories/images/' . $this->image),
            'created_at'  => (string) $this->created_at,
            'updated_at'  => (string) $this->updated_at,
        ];
    }
}
