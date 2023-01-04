<?php

namespace App\Http\Resources\Api\Store\v1\BadgeCategory;

use Illuminate\Http\Resources\Json\ResourceCollection;

class BadgeCategoryCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return BadgeCategoryResource::collection($this->collection);
    }

}
