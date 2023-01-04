<?php

namespace App\Http\Resources\Api\Store\v1\Badge;

use Illuminate\Http\Resources\Json\ResourceCollection;

class BadgeCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return BadgeResource::collection($this->collection);
    }

}
