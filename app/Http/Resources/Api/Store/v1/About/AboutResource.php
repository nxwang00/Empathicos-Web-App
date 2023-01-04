<?php

namespace App\Http\Resources\Api\Store\v1\About;

use Illuminate\Http\Resources\Json\JsonResource;

class AboutResource extends JsonResource
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
            'page'        => $this->page,
            'name'        => $this->name,
            'description' => $this->description,
            'course'      => $this->course,
            'website'     => $this->website,
            'status'      => $this->status,
            'images'      => asset('storage/abouts/' . $this->image),
            'created_at'  => (string) $this->created_at,
            'updated_at'  => (string) $this->updated_at,
        ];

    }
}
