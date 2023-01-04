<?php

namespace App\Http\Resources\Api\Store\v1\Faq;

use Illuminate\Http\Resources\Json\ResourceCollection;

class FaqCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return FaqResource::collection($this->collection);
    }

}
