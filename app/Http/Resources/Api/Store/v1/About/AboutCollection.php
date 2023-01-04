<?php

namespace App\Http\Resources\Api\Store\v1\About;

use Illuminate\Http\Resources\Json\ResourceCollection;

class AboutCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return AboutResource::collection($this->collection);
    }

}
